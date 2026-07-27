<?php

require_once "animal.php";
require_once "Frog.php";
require_once "Ape.php";

// RILIS 0: Animal
$sheep = new Animal("shaun");
echo "Name : " . $sheep->name . "<br>"; // "shaun"
echo "legs : " . $sheep->legs . "<br>"; // 4
echo "cold blooded : " . $sheep->cold_blooded . "<br><br>"; // "no"

// RILIS 1: Frog
$kodok = new Frog("buduk");
echo "Name : " . $kodok->name . "<br>";
echo "legs : " . $kodok->legs . "<br>";
echo "cold blooded : " . $kodok->cold_blooded . "<br>";
echo "Jump : ";
$kodok->jump(); // "hop hop"
echo "<br>";

// RILIS 1: Ape
$sungokong = new Ape("kera sakti");
echo "Name : " . $sungokong->name . "<br>";
echo "legs : " . $sungokong->legs . "<br>";
echo "cold blooded : " . $sungokong->cold_blooded . "<br>";
echo "Yell : ";
$sungokong->yell(); // "Auooo"

?>