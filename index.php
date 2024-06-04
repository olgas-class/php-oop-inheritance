<?php
require_once __DIR__ . "/models/user.php";
require_once __DIR__ . "/models/premiumUser.php";
require_once __DIR__ . "/models/membership.php";

$user1 = new User("Peppe", "Verdi");

$user1->setName("Pippo");

echo $user1->getFullName();

$age = 7;

// Eccezzione
// 
try {
  $user1->setAge($age);
  $user1->calculateDiscount();
} catch (Exception $e) {
  echo "<br>Eccezzione: " . $e->getMessage();
}


var_dump($user1);

// 
// // Classe premium user
$membership2 = new Membership("Gold", 30, "2024-06-03");
$user2 = new PremiumUser("Pluto", "Neri", $membership2);
var_dump($user2);

$user2->setAge(45);
$user2->calculateDiscount();

echo $user2->getDiscount();

echo $user1->greeting() . "<br>";
echo $user2->greeting();

echo $user2->getMembership()->getName();


// static properties and methods
echo "<br>";
echo User::$country;
echo "<br>";
echo PremiumUser::$title;

// Metodo statico
echo "<br>";
$password = User::generatePassword();
echo $password;


