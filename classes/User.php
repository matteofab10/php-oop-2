<?php

require_once __DIR__ . "/CreditCard.php";

class User {
  private $id;
  private $firstname;
  private $lastname;
  private $address;
  private $email;
  private $payment;

  function __construct()
  {
    $this-> payment = new CreditCard();
  }

  public function setFirstName($_firstName){
    $this->firstName = $_firstName;
  }
  public function setLastName($_lastName){
    $this->lastName = $_lastName;
  }
  public function setAddress($_address){
    $this->address = $_address;
  }
  public function setEmail($_email){
    $this->email = $_email;
  }
  public function setPayment($_payment){
    $this->payment = $_payment;
  }

  
  public function getFirstName(){
    return $this->firstName;
  }
  public function getLastName(){
    return $this->lastName;
  }
  public function getAddress(){
    return $this->address;
  }
  public function getEmail(){
    return $this->email;
  }
  public function getPayment(){
    return $this->payment;
  }
}