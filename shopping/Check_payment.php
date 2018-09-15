<?php
//require('creadit.php');
require('checkPaymentClass.php');

if($_POST['name'] == "" OR $_POST['number'] == "" OR $_POST['month'] == "" OR $_POST['year'] == "" OR $_POST['cvv'] == "" OR $_POST['zipCode'] == ""){
  echo "<script language=\"JavaScript\"> alert('Fill in incomplete!') </script>";
  echo '<meta http-equiv="refresh" content="0; URL=creadit.php">';
}else{
  $status = new CheckPayment();
  $name = $status->checkName($_POST['name']);
  $number = $status->checkNumber($_POST['number']);
  $month = $status->checkMonth($_POST['month']);
  $year = $status->checkYear($_POST['year']);
  $cvv = $status->checkCvv($_POST['cvv']);
  $code = $status->checkZipcode($_POST['zipCode']);

  $message = "";
  if($name == "false"){
    $message = $message.', '.'Name';
  }else if($number == "false"){
    $message = $message.', '.'Number of card';
  }else if($month == "false"){
    $message = $message.', '.'Month';
  }else if($year == "false"){
    $message = $message.', '.'year';
  }else if($cvv == "false"){
    $message = $message.', '.'CVV';
  }else if($code == "false"){
    $message = $message.', '.'Zip Code';
  }


  if($message == ""){
    header("location:showInvoice.php");
  }else{
    echo "<script language=\"JavaScript\"> alert($message.'Fill in incomplete!') </script>";
    echo '<meta http-equiv="refresh" content="0; URL=creadit.php">';
  }


}

?>
