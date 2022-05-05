<?php

require_once 'Animal.php';
require_once 'Frog.php';
require_once 'Ape.php';

$sheep = new Animal("shaun");

echo "Name : " . $sheep->name . "\n";
echo "Legs : " . $sheep->legs . "\n";
echo "cold blooded : " . $sheep->cold_blooded . "\n" . "\n";


$kodok = new Frog("buduk");

echo "Name : " . $kodok->name . "\n";
echo "Legs : " . $kodok->legs . "\n";
echo "cold blooded : " . $kodok->cold_blooded . "\n";
echo $kodok->jump() . "\n\n";



$sungokong = new Ape("kera sakti");

echo "Name : " . $sungokong->name . "\n";
echo "Legs : " . $sungokong->legs . "\n";
echo "cold blooded : " . $sungokong->cold_blooded . "\n";
echo $sungokong->yell();
