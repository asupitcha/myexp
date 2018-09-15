
<?php

error_reporting(E_ALL ^ E_NOTICE);
require('LoginClass.php');
require('UserClass.php');
session_start();
$servername ="localhost";
$username = "root";
$password = "";
$dbname = "sneaker_shopdb";

  $conn = new mysqli($servername,$username,$password,$dbname);
  if($conn->connect_error){
  	die("Connection failed:" .$conn->connect_error);
  }

  $sql = "SELECT * FROM history WHERE U_ID=";
  $objQuerySQL = $conn->query($sql);
  $user1 = $_SESSION['user'];
  echo $_SESSION['user'];
//  $result = $user1->getUserID();
  while($row = $objQuerySQL->fetch_assoc()) {
  //  if($row["U_ID"] == $result){

  echo  '<tr class="table-row">';
  echo    '<td class="column-1">'.$row['I_ID'].'</td>';
  echo    '<td class="column-2">'.$row["idate"].'</td>';
  echo    '<td class="column-3">'.$row["pdate"].'</td>';
  echo    '<td class="column-4">'.$row["status"].'</td>';
  echo  '</tr>';
//  }
}
// ?>
