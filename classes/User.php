<?php

class User {
  private $firstname;
  private $surname;
  private $address;
  private $email;
  protected $discount = 0;
  private $credit_card;

  function __construct($_firstname, $_surname)
  {
    $this->firstname = $_firstname;
    $this->surname = $_surname;

  }

  // SETTER
  public function setFirstname($_firstname){
    $this->firstname = $_firstname;
  }
  public function setSurname($_surname){
    $this->surname = $_surname;
  }
  public function setAddress($_address){
    $this->address = $_address;
  }
  public function setEmail($_email){
    $this->email = $_email;
  }
  public function setDiscount($_discount){
    $this->discount = $_discount;
  }
  public function setCreditCard($_credit_card){
    $this->credit_card = $_credit_card;
  }

  // GETTER
  public function getFirstname(){
    return $this->firstname;
  }
  public function getSurname(){
    return $this->surname;
  }
  public function getAddress(){
    return $this->address;
  }
  public function getEmail(){
    return $this->email;
  }
  public function getDiscount(){
    return $this->discount;
  }
  public function getCreditCard(){
    return $this->credit_card;
  }
}