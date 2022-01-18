<?php

require_once __DIR__ . "/User.php";

class PremiumUser extends User {
  
  function __construct($_firstname, $_surname)
  {
    parent::__construct($_firstname, $_surname);
    $this->discount = 40;
  }

  public function getFinalPrice($product){
    $finalPrice = $product->getPrice() - (($product->getPrice() * $this->discount) / 100);
    return number_format($finalPrice, 2, ",", "");
  }

}