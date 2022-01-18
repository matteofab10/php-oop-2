<?php

class Product {
  private $name;
  private $price;
  private $description;
  private $status;
  private $discount = 0;

  function __construct($_name, $_status)
  {
    $this->name = $_name;
    $this->status = $_status;
  }


  // SETTER
  public function setName($_name){
    $this->name = $_name;
  }
  public function setPrice($_price){
    $this->price = $_price;
  }
  public function setDescription($_description){
    $this->description = $_description;
  }
  public function setStatus($_status){
    $this->status = $_status;
  }
  public function setDiscount($_discount){
    $this->discount = $_discount;
  }

  // GETTER
  public function getName(){
    return $this->name;
  }
  public function getPrice(){
    return $this->price;
  }
  public function getDescription(){
    return $this->description;
  } 
  public function getStatus(){
    return $this->status;
  }
  public function getDiscount(){
    return $this->discount;
  }


}