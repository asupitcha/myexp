<?php
session_start();
$servername ="localhost";
$username = "root";
$password = "";
$dbname = "heawbot";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
	die("Connection failed:" .$conn->connect_error);
}
$user = $_POST['username'];
$pwd = $_POST['password'];

if($user == "" OR $pwd == "") {
	echo "<script language=\"JavaScript\"> alert('Please enter a valid username or password.') </script>";
	echo '<meta http-equiv="refresh" content="0; URL=login.html">';
}else {
	$sql = "SELECT * FROM admin WHERE A_ID = '".$_REQUEST['username']."' AND A_PASSWORD = '".$_REQUEST['password']."'";
	$objQuerySQL = $conn->query($sql);
	$objResult = $objQuerySQL->fetch_array();

	if(!$objResult){
		echo "<script language=\"JavaScript\"> alert('Username or password invalid!') </script>";
		echo '<meta http-equiv="refresh" content="0; URL=login.html">';
	}else{
		$_SESSION["name"] = "Admin";
		session_write_close();
		header("location:index.php");
	}
}
?>
