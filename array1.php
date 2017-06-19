<?php



$colors = array("Red", "Green","Blue");

array_unshift($colors,"Yellow");
array_push($colors,"Black");


$colors[1] = "Magenta";
$colors[3] = "Cyan";

var_dump($colors);



?>