<?php
class Membership {
  private $name;
  private $price;
  private $date;

  public function __construct($_name, $_price, $_date)
  {
    $this->name = $_name;
    $this->price = $_price;
    $this->date = $_date;
  }

  /**
   * Get the value of name
   */ 
  public function getName()
  {
    return $this->name;
  }

  /**
   * Get the value of price
   */ 
  public function getPrice()
  {
    return $this->price;
  }

  /**
   * Get the value of date
   */ 
  public function getDate()
  {
    return $this->date;
  }
} 