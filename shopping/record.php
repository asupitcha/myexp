<?php
//เก็บวันที่และแสดง invoice
error_reporting(E_ALL ^ E_NOTICE);
require('LoginClass.php');
require('UserClass.php');
session_start();
$servername ="localhost";
$username = "root";
$password = "";

//	header("location:payment1.php");
try {
  $user1 = $_SESSION['user'];
  $result = $user1->getUserID();
  $i_number =  $_SESSION['number'];

  $t=time();
  $d = date("Y-m-d",$t);

  // add to data base
  $conn = new PDO("mysql:host=$servername;dbname=sneaker_shopdb", $username, $password);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $strSQL = "INSERT INTO history (I_ID,idate,pdate,U_ID) VALUES ";
  $strSQL .= "('".$i_number."','".$d."','".$d."','".$result."')";

  $conn->exec($strSQL);
  header("location:showHistory.php");
}
catch(PDOException $e)
{
  	echo $strSQL . "<br>" . $e->getMessage();
}

$conn = null;

?>
