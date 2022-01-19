<?php

class Product {
  private $id;
  private $name;
  private $price;
  private $status;

  function __construct($_id, $_name, $_status)
  {
    $this->id = $_id;
    $this->name = $_name;
    $this->status = $_status;
  }


  // SETTER
  public function setId($_id){
    $this->id = $_id;
  }
  public function setName($_name){
    $this->name = $_name;
  }
  public function setPrice($_price){
    $this->price = $_price;
  }
  public function setStatus($_status){
    $this->status = $_status;
  }

  // GETTER
  public function getId(){
    return $this->id;
  }
  public function getName(){
    return $this->name;
  }
  public function getPrice(){
    return $this->price;
  }
  public function getStatus(){
    return $this->status;
  }

  public function getFinalPrice(){
    $finalPrice = $this->price - (($this->price * $this->discount) / 100);
    return number_format($finalPrice, 2, ",", "");
  }

  public function checkInt($discount){

    if(!is_int($discount) || $discount > 100){
      throw new Exception("Sconto non valido!");
    }
    
    return  $discount;
  }

}