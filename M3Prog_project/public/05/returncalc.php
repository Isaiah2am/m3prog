<?php

$anser1 = add(5, 5);
$anser2 = divide(10, 10);
$anser3 = subtract(15, 15);
$anser4 = multiply(15, 15);

function add($getal1, $getal2){
    $som = $getal1 + $getal2;
    return $som;
}   

function divide($getal1, $getal2){
    $som = $getal1 / $getal2;
    return $som;
}   

function subtract($getal1, $getal2){
    $som = $getal1 - $getal2;
    return $som;
}   

function multiply($getal1, $getal2){
    $som = $getal1 * $getal2;
    return $som;
}   

    
echo $anser1;
echo"<br>";
echo $anser2;
echo"<br>";
echo $anser3;
echo"<br>";
echo $anser4;





?>