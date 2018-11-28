import socket
import threading
from tkinter import *

class Client:

    def __init__(self):
        self.window = Tk()  # tkinter.Tk()ปกติต้องเขียนแบบนี้ แต่import เข้ามาหมด ไม่ต้องเขียนโมดูลได้
        self.window.title("TU talk")
        self.window.geometry("550x400")
        self.m = ""
        self.mes = ""
        self.f = ""

        self.loginFrame = Frame(self.window)
        self.loginFrame.pack(side=TOP)

        # -------- label & fill form --------
        self.username = StringVar()
        self.password = StringVar()
        self.port = StringVar()
        self.userLabel = Label(self.loginFrame, text="Username: ").grid(row=0)
        self.userEntry = Entry(self.loginFrame, textvariable=self.username).grid(row=0, column=1)  # หลังcolum เติม ,command=ฟังก์ชันที่ต้องการเียกใช้งาน
        self.passLabel = Label(self.loginFrame, text="Password: ").grid(row=0, column=2)
        self.passEntry = Entry(self.loginFrame, textvariable=self.password).grid(row=0, column=3)
        self.ipLabel = Label(self.loginFrame, text="IP: " + socket.gethostbyname(socket.gethostname())).grid(row=1, column=1)
        self.portLabel = Label(self.loginFrame, text="Port: ").grid(row=1, column=2)
        self.portEntry = Entry(self.loginFrame, textvariable=self.port).grid(row=1, column=3)

        self.b = Button(self.loginFrame, text="Submit", command=self.myThread)
        self.b.grid(row=1, column=4)

        # -------- friend list --------
        self.onlineFrame = Frame(self.window)
        self.onlineFrame.pack(side=LEFT)
        self.scrollbar = Scrollbar(self.onlineFrame)
        self.scrollbar.pack(side=RIGHT, fill=Y)
        self.showlist = Listbox(self.onlineFrame, height=50, width=30,
                                yscrollcommand=self.scrollbar.set)  # state=DISABLED ไม่สามารถแก้ไขได้
        confriend = threading.Thread(target=self.connection)
        self.showlist.bind('<Double-1>', lambda x: confriend.start())
        self.showlist.pack()

        # -------- chat frame --------
        self.chatFrame = Frame(self.window)
        self.showchat = Frame(self.chatFrame)
        self.showchat.pack()
        self.scrollbar2 = Scrollbar(self.showchat)
        self.scrollbar2.pack(side=RIGHT, fill=Y)
        self.chat = Text(self.showchat, height=19, width=50, yscrollcommand=self.scrollbar2.set)
        self.chat.config(state=DISABLED)
        self.chat.pack()

        # ----- chat box --------
        self.sendmsg = StringVar()
        self.chatbox = Entry(self.chatFrame, width=41, textvariable=self.sendmsg)
        self.chatbox.bind('<Return>', self.showMsg)
        self.scrollbar2.pack(side=RIGHT, fill=Y)
        self.chatbox.pack(side=LEFT)
        self.chatFrame.pack(side=RIGHT)

        self.window.mainloop()

    def myThread(self):
        threading.Thread(target=self.heartbeat).start()  # create heartbeat thread and start
        threading.Thread(target=self.listen).start()  # create listen(wait for connect from friend) thread and start

        self.userEntry = Entry(self.loginFrame, state=DISABLED).grid(row=0, column=1)
        self.passEntry = Entry(self.loginFrame, state=DISABLED).grid(row=0, column=3)
        self.portEntry = Entry(self.loginFrame, state=DISABLED).grid(row=1, column=3)
        self.b.configure(text="Logout", command=self.close_window)  # if you logout, close application

    def heartbeat(self):
        # string for authentication to server
        authen = "USER:" + self.username.get() + "\nPASS:" + self.password.get() + "\nIP:" + \
                      socket.gethostbyname(socket.gethostname()) + "\nPORT:" + self.port.get() + "\n"

        client = socket.socket(socket.AF_INET, socket.SOCK_STREAM)  # create socket "TCP"
        client.connect(("128.199.83.36", 34261))  # connect server
        client.send(authen.encode('utf-8'))  # sent string to authentication

        while True:
            try:
                msg = client.recv(1024).decode('utf-8')  # receive msg from server (friend list)
                if not("SUCCESS" in msg or "END" in msg or "Hello" in msg):
                    split = msg.split("\n")
                    for friend in split:
                        self.showlist.insert(END, friend)
                if "Hello" in msg:
                    self.showlist.delete(0, END)
                    # if server sent msg "Hello _ID_", sent "Hello Server" to server
                    client.send(("Hello Server").encode('utf-8'))
                else:
                    continue
            except ConnectionError:
                print("Close")
                client.close()

    def listen(self):
        # create socket for waiting your friend
        waitfriend = socket.socket()
        # bind socket with IP address and port number
        waitfriend.bind((socket.gethostbyname(socket.gethostname()), int(self.port.get())))
        waitfriend.listen(1)  # allow only one client

        try:
            client, addr = waitfriend.accept()  # object accept client
            self.chat.config(state='normal')
            self.chat.insert(INSERT, 'Connected Form: ' + str(addr) + '\n--------------------------------\n')
            self.chat.config(state=DISABLED)
            self.chatwithfriend(client)
        except:
            print("Disconnect")

    def connection(self):
        self.values = [self.showlist.get(idx) for idx in self.showlist.curselection()]
        namel = self.values[0]
        name = namel.split(":")
        chatfriend = (str(name[1]), int(name[2]))
        confriend = socket.socket(socket.AF_INET, socket.SOCK_STREAM)

        try:
            confriend.connect((name[1], int(name[2])))
            self.chat.config(state='normal')
            self.chat.insert(INSERT, 'Connected To: ' + str(chatfriend) + '\n--------------------------------\n')
            self.chat.config(state=DISABLED)
            self.chatwithfriend(confriend)
        except ConnectionError:
            self.chat.config(state='normal')
            self.chat.insert(INSERT, 'Connection Error!')
            self.chat.config(state=DISABLED)
        except socket.gaierror:
            self.chat.config(state='normal')
            self.chat.insert(INSERT, 'Your friend offline.')
            self.chat.config(state=DISABLED)

    def chatwithfriend(self, friend):
        self.f = friend
        threading.Thread(target=self.recvMsg, args=(friend,)).start()

    def sendMsg(self):
        self.f.send(self.mes.encode('utf-8'))  # sent msg to friend
        self.status = 0

    def showMsg(self, event):
        self.m = "You: " + self.sendmsg.get() + "\n"
        self.chat.config(state='normal')
        self.chat.insert(INSERT, self.m)
        self.chat.config(state=DISABLED)
        self.mes = self.sendmsg.get()
        self.chat.see(END)
        self.chatbox.delete(0, 'end')
        self.sendMsg()

    def recvMsg(self, friend):
        while True:
            try:
                data = friend.recv(1024).decode('utf-8')  # receive msg from friend and convert byte to String
                if not data:
                    continue
                msgrecv = "Friend: " + data + "\n"
                self.chat.config(state='normal')
                self.chat.insert(INSERT, msgrecv)
                self.chat.config(state=DISABLED)
                self.chat.see(END)
            except ConnectionResetError:
                self.chat.config(state='normal')
                self.chat.insert(INSERT, '--------------------------------\nDisconnect from your friend')
                self.chat.config(state=DISABLED)
                break

    def close_window(self):
        self.window.destroy()


client = Client()
