<?php

class User {
  private $firstName;
  private $lastName;
  private $address;
  private $email;
  private $payment;

  function __construct($_firstName, $_lastName)
  {
    $this->firstName = $_firstName;
    $this->lastName = $_lastName;

  }


  // SETTER
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

  // GETTER
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