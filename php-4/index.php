<?php
require_once("animal.php");
require_once("frog.php");
require_once("ape.php");

$sheep = new Animal("shaun");

echo $sheep->name . "<br>"; // "shaun"
echo $sheep->legs . "<br>"; // 2
echo $sheep->cold_blooded . "<br>"; // 

$sungokong = new Ape("kera sakti");
$sungokong->yell(); // "Auooo"

$kodok = new Frog("buduk");
$kodok->jump() ; // "hop hop"
?>