<?php

require_once __DIR__ . "/User.php";

class PremiumUser extends User {
  private $premium_discount;
  
  function __construct($_firstName, $_lastName)
  {
    parent::__construct($_firstName, $_lastName);
    $this->discount = 10;
  }

  public function setPremiumDiscount($_premium_discount){
    $this->premium_discount += $_premium_discount;
  }

}