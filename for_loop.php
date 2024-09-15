<?php

// using for loop:

// for($i=1;$i<=10;$i++){
//     if($i==1){
//         echo"Namta of {$i} <br>";
//     }
//     for($j=1;$j<=10;$j++){
//         $namta = $i * $j ;

//         echo "{$i}x{$j}={$namta} <br>";
//         if($j==10 && $i<=9){
//             $namtaof = $i+1;
//             echo"Namta of {$namtaof} <br>";
//         }
//     }
// }


// Using while loop:

$i = 1;

while ($i <= 10) {
    if($i==1){
                 echo"Namta of {$i} <br>";
             }
    $j = 1;
    while ($j <= 10) {
        $namta = $i * $j;
        echo "{$i}x{$j}={$namta} <br>";
        if($j==10 && $i<=9){
                        $namtaof = $i+1;
                         echo"Namta of {$namtaof} <br>";
                   }
        $j++;
        
    }
    $i++;
}
