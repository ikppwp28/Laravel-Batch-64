<?php
require_once 'Animal.php';
require_once 'Ape.php';
require_once 'Frog.php';

$sheep = new Animal("shaun");
echo "Hewan : $sheep->name <br>"; 
echo "Jumlah Kaki : $sheep->legs <br>"; 
echo "Berdarah Dingin : $sheep->cold_blooded <br><br>";

$sungokong = new Ape("kera sakti");
echo "Hewan : $sungokong->name <br>";
echo "Jumlah Kaki : $sungokong->legs <br>"; 
echo "Berdarah Dingin : $sungokong->cold_blooded <br>";
echo "Yell : " . $sungokong->yell() ."<br><br>"; 

$kodok = new Frog("buduk");
echo "Hewan : $kodok->name <br>";
echo "Jumlah Kaki : $kodok->legs <br>";
echo "Berdarah Dingin : $kodok->cold_blooded <br>"; 
echo "Jump : " . $kodok->jump() ."<br><br>"; 
?>
