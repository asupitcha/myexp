<?php
session_start();
$servername ="localhost";
$username = "root";
$password = "";
$dbname = "sneaker_shopdb";

$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
	die("Connection failed:" .$conn->connect_error);
}

$checkUsername = false;
$checkEmail = false;
$allfill = true;
$count = 000;

if($_POST["username"] == "" || $_POST["password"] == "" || $_POST["email"] == "" || $_POST["fname"] == "" || $_POST["lname"] == "" || $_POST["date"] == "" || $_POST["gender"] == "" || $_POST["phone-number"] == "" || $_POST["address"] == ""){
	$allfill = false;
}

$checkSQL = "SELECT U_ID,U_USERNAME, U_EMAIL FROM user";
$objQuerySQL = $conn->query($checkSQL);
while($row = $objQuerySQL->fetch_assoc()){
	if((int)$row["U_ID"] > $count){
		$count = (int)$row["U_ID"];
	}
	if($_POST["username"] == $row['U_USERNAME']){
		$checkUsername = true;
	}
	if($_POST["email"] == $row['U_EMAIL']){
		$checkEmail = true;
	}

}

++$count;
$id = "";
if($count<10){
	$id = "00".$count;
}else{
	$id = "0".$count;
}
if(!$allfill){
	if(!$checkUsername || !$checkEmail){
		$strSQL = "INSERT INTO user ";
		$strSQL .="(U_ID,U_USERNAME,U_PASSWORD,U_EMAIL,U_FIRSTNAME,U_LASTNAME,U_GENDER,U_DATE,U_PHONE_NUMBER,U_ADDRESS,U_ROLE) ";
		$strSQL .="VALUES ";
		$strSQL .="('".$id."','".$_POST["username"]."','".$_POST["password"]."'";
		$strSQL .=",'".$_POST["email"]."','".$_POST["fname"]."','".$_POST["lname"]."' ";
		$strSQL .=",'".$_POST["gender"]."','".$_POST["date"]."','".$_POST["phone-number"]."','".$_POST["address"]."',0) ";
		$objQuery = $conn->query($strSQL);
	
		if(!$objQuery)
		{
			echo '<script language="javascript" type="text/javascript"> alert("There is something ERROR happened please retry agian!!!!");
			window.location = "register.html";
			</script>';
		}
		else
		{
			echo '<script language="javascript" type="text/javascript"> alert("Register Successfully!");
			window.location = "login.html";
			</script>';
		}
	}else{
		if($checkUsername){
			echo '<script language="javascript" type="text/javascript"> alert("Duplicate username!");
			window.location = "register.html";
			</script>';
		}
		else{
			echo '<script language="javascript" type="text/javascript"> alert("Duplicate email");
			window.location = "register.html";
			</script>';
		}
	}
}else{
	echo '<script language="javascript" type="text/javascript"> alert("Fill in incomplete!");
			window.location = "register.html";
			</script>';
}
?>
