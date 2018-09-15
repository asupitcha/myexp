<?php
error_reporting(E_ALL ^ E_NOTICE);
require('LoginClass.php');
require('UserClass.php');
require('invoice.php');
//require('current.php');
session_start();
$servername ="localhost";
$username = "root";
$password = "";
$detail = new Invoice();
//$current = new current();

try {
  if($_POST['type'] == "" OR $_POST['name'] == "" OR $_POST['phone'] == "" OR $_POST['addr'] == ""){
  echo "<script language=\"JavaScript\"> alert('Fill in incomplete!') </script>";
  echo '<meta http-equiv="refresh" content="0; URL=showDetail.php">';
  }else{
    $conn = new PDO("mysql:host=$servername;dbname=sneaker_shopdb", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // add to class
    $detail->setType($_POST['type']);
    $detail->setName($_POST['name']);
    $phone = $_POST['phone'];
    if(preg_match("/^[0-9]{10}$/", $phone)){
      $detail->setPhone($_POST['phone']);
    } else {
      echo "<script language=\"JavaScript\"> alert('Phone incorrect!') </script>";
      echo '<meta http-equiv="refresh" content="0; URL=showDetail.php">';
    }
    $detail->setAddr($_POST['addr']);
    $id = $_SESSION['number'];
    $detail->setID($id);
    $t=time();
    $d = date("d-m-Y",$t);
    $detail->setDate($d);
    $type = $detail->getType();

		$_SESSION["detail"] = $detail;

    //u_ID
    $user1 = $_SESSION['user'];
    $result = $user1->getUserID();
    $number = $_SESSION['number'];
  //  $current->setCuerrent($number);
    // add to data base
		$strSQL = "INSERT INTO invoice (U_ID,I_ID,Name,Phone_number,Addr,Type) VALUES ";
		$strSQL .= "('".$result."','".$number."','".$_POST["name"]."','".$_POST["phone"]."','".$_POST["addr"]."','".$type."')";
  	$conn->exec($strSQL);

	header("location:payment1.php");
  }
}
catch(PDOException $e)
{
  	echo $strSQL . "<br>" . $e->getMessage();
}

$conn = null;

?>
