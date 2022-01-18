<?php

require_once __DIR__ . "/CreditCard.php";

class User {
  private $id;
  private $name;
  private $lastname;
  private $address;
  private $email;
  private $payment;

  function __construct()
  {
    $this-> payment = new CreditCard();
  }
}