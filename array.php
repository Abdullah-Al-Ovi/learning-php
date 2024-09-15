<?php
$foods = array("banana","mango","apple");
$cars = array("toyota","marcedes","tesla");
// iteration-method-1:
 for($i=0;$i<count($foods);$i++){
    echo $foods[$i] . "<br>";
 }

 // iteration-method-1:

 foreach($cars as $car){
    echo $car . "<br>";
 }

//  push,pull

array_push($foods,"kiwi");
for($i=0;$i<count($foods);$i++){
    echo $foods[$i] . "<br>";
 }
array_pop($foods);
for($i=0;$i<count($foods);$i++){
    echo $foods[$i] . "<br>";
 }
// Note : Same will be for sift and unshift
$reversed_foods = array_reverse($foods,true); // Reversing an array doesn't modify the original array
foreach($reversed_foods as $reversed_food){
    echo $reversed_food . "<br>";
 }
?>