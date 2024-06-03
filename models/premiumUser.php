<?php
require_once __DIR__ . "/user.php";
require_once __DIR__ . "/membership.php";

class PremiumUser extends User {
  private Membership $membership;

  public function __construct(string $_name, string $_lastname, Membership $_membership) {
    // Richiamare il costruttore della classe padre
    parent::__construct($_name, $_lastname);

    // Aggiunger le zioni relativi a questa classe
    $this->membership = $_membership;
  }

  // Polimorfismo: modificare il metodo della classe base
  public function calculateDiscount() {
    if ($this->membership->getName() === "Silver") {
      if ($this->getAge() >= 65) {
        $this->discount = 8;
      } else {
        $this->discount = 5;
      }
    } else if ($this->membership->getName() === "Gold") {
      if ($this->getAge() >= 65) {
        $this->discount = 12;
      } else {
        $this->discount = 10;
      }
    }
  }

  public function greeting() {
    return "Ciao, sono user premium e mi chiamo " . $this->getFullName();
  }

  /**
   * Get the value of membership
   */ 
  public function getMembership()
  {
    return $this->membership;
  }
}
