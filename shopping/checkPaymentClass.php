<?php
class CheckPayment{

  public function checkName($name){

    if (preg_match("/^[A-Za-z]*$/",$name)) {
      return "true";
    } else {
      return "false";
    }

  }
  public function checkNumber($number){
    if (preg_match("/^[0-9]{4}-[0-9]{4}-[0-9]{4}-[0-9]{4}$/",$number)) {
      return "true";
    } else {
      return "false";
    }
  }
  public function checkMonth($month){
    if (preg_match("/^[0][1-9]|[1][0-2]$/",$month)) {
      return "true";
    } else {
      return "false";
    }
  }
  public function checkYear($year){
    if(preg_match("/^[0-9]{4}$/", $year)){
      return "true";
    } else {
      return "false";
    }
  }
  public function checkCvv($cvv){
    if (preg_match("/^[0-9]{3}$/",$cvv)) {
      return "true";
    } else {
      return "false";
    }
  }
  public function checkZipcode($code){
    if (preg_match("/^[0-9]{5}$/",$code)) {
      return "true";
    } else {
      return "false";
    }
  }
}
?>
