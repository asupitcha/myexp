<?php
error_reporting(E_ALL ^ E_NOTICE);
require('LoginClass.php');
require('UserClass.php');
session_start();

echo "this";
$str = 	$_SESSION['myCart'];
$aaa =  (explode(" ",$str));
$arrCart =array_count_values($aaa);
$number = rand(0,9);
$number2 = rand(0,9);
$number3 = rand(0,9);
$i_number = $number.$number2.$number3;


//u_ID
$user1 = $_SESSION['user'];
$result = $user1->getUserID();
$_SESSION["number"] = $i_number;
foreach($arrCart as $key => $val){

  $servername ="localhost";
  $username = "root";
  $password = "";

  try {
      $conn = new PDO("mysql:host=$servername;dbname=sneaker_shopdb", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      if($i_number != "" AND $key != "" AND $val != "" AND $result != ""){
        // add to data base
        $strSQL = "INSERT INTO cart (I_ID,P_ID,amount,U_ID) VALUES ";
        $strSQL .= "('".$i_number."','".$key."','".$val."','".$result."')";
        $conn->exec($strSQL);

  		header("location:showDetail.php");
      }

  }
  catch(PDOException $e)
  {
      echo $strSQL . "<br>" . $e->getMessage();
  }

  $conn = null;
}
?>
