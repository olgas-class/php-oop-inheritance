<?php

class User {
  private string $name;
  private string $lastname;
  private int $age;
  protected int $discount;

  public function __construct(string $_name, string $_lastname) {
    $this->name = $_name;
    $this->lastname = $_lastname;
  }

  /**
   * Set the value of name
   *
   * @return  self
   */
  public function setName(string $_name) {
    $this->name = $_name;
  }

  /**
   * Set the value of lastname
   *
   * @return  self
   */
  public function setLastname(string $_lastname) {
    $this->lastname = $_lastname;
  }

  public function getFullName() {
    return $this->name . " " . $this->lastname;
  }

  /**
   * Get the value of age
   */
  public function getAge() {
    return $this->age;
  }

  /**
   * Set the value of age
   *
   * @return  self
   */
  public function setAge(int $_age) {
    if ($_age < 18 || $_age > 110) {
      throw new Exception("Età non valida");
    }
    $this->age = $_age;
  }

  public function calculateDiscount() {
    if ($this->age >= 65) {
      $this->discount = 5;
    } else {
      $this->discount = 0;
    }
  }

  /**
   * Get the value of discount
   */
  public function getDiscount() {
    return $this->discount;
  }


  public function greeting() {
    return "Ciao, sono user normale e mi chiamo " . $this->getFullName();
  }
}
