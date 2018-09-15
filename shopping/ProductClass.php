<?php
class ProductClass{
  private $id;
  private $name;
  private $price;
  private $quantity;
  private $status;

  function _construct($id, $name, $price, $qauntity, $status){
    $this->id = $id;
    $this->name = $name;
    $this->price = $price;
    $this->quantity = $quantity;
    $this->status = $status;
  }
  function getID(){
    return $this->id;
  }
  function getName(){
    return $this->name;
  }
  function getPrice(){
    return $this->price;
  }
  function getQuantity(){
    return $this->quantity;
  }
  function getStatus(){
    return $this->status;
  }
}
?>
