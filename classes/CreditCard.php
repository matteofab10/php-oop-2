<?php 

class CreditCard {

  private $holder;
  private $card_number;
  private $expiration_date;
  private $cvv;

  function __construct($_holder, $_card_number, $_expiration_date, $_cvv)
  {
    $this->holder = $_holder;
    $this->card_number = $_card_number;
    $this->expiration_date = $_expiration_date;
    $this->cvv = $_cvv;
  }

  // SETTER
  public function setHolder($_holder){
    $this->holder = $_holder;
  }
  public function setCardNumber($_cardNumber){
    $this->cardNumber = $_cardNumber;
  }
  public function setExpirationDate($_expiration_date){
    $this->expiration_date = $_expiration_date;
  }
  public function setCvv($_cvv){
    $this->cvv = $_cvv;
  }

  // GETTER
  public function getHolder(){
    return $this->holder;
  }
  public function getCardNumber(){
    return $this->card_number;
  }
  public function getExpirationDate(){
    return $this->expiration_date;
  }
  public function getCvv(){
    return $this->cvv;
  }

}