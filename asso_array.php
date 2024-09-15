<?php
$capitals = array(
    "USA" => "Washington",
    "BD" => "Dhaka",
    "India" => "Delhi"
);

//echo $capitals["USA]

$keys = array_keys($capitals);
// Similar for values

$flipped = array_flip($capitals); // Interchange key value pair

$merged = array_merge($capitals,["Pakistan"=>"Karachi"]);

$reversed_capitals = array_reverse($capitals,true); //Note: preserved_keys:true/false will more evident for integer type keys in associative array

// foreach($capitals as $key=>$value){
//     echo "{$key}={$value} <br>";
// }

// foreach($flipped as $key=>$value){
//     echo "{$key}={$value} <br>";
// }

foreach($merged as $key=>$value){
    echo "{$key}={$value} <br>";
}

// foreach($reversed_capitals as $key=>$value){
//     echo "{$key}={$value} <br>";
// }

// foreach($keys as $key){
//     echo"{$key} <br>";
// }


