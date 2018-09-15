<?php
$servername ="localhost";
$username = "root";
$password = "";
$dbname = "sneaker_shopdb";

$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
	die("Connection failed:" .$conn->connect_error);
}

$request_email = $_POST['email'];
if($request_email == ""){
    echo '<script language="javascript" type="text/javascript"> alert("Please fill email!!");
    window.location = "forgotpass.html";
    </script>';
}else{
    $sql = "SELECT * FROM user WHERE U_EMAIL = '".$_REQUEST['email']."'";
	$objQuerySQL = $conn->query($sql);
    $objResult = $objQuerySQL->fetch_array();
    if(!$objResult){
        echo '<script language="javascript" type="text/javascript"> alert("Invalid email!");
		window.location = "forgotpass.html";
		</script>';
	}else{
        $msg = "Your Password is ".$objResult['U_PASSWORD'];
        $msg = wordwrap($msg,70);
        $headers =  'MIME-Version: 1.0' . "\r\n"; 
        $headers .= 'From: fashe@example.com' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
        echo $msg;
        echo $objResult['U_EMAIL'];
        mail($objResult['U_EMAIL'],"Your Password",$msg,$headers);
        echo '<script language="javascript" type="text/javascript"> alert("Send Email Successfully!");
		window.location = "login.html";
		</script>';
    }
}
?>