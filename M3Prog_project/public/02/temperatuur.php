<?php

function celsiusToFahrenheit($celsius) {
    return ($celsius * 1.8) + 32;
}


function celsiusToKelvin($celsius) {
    return $celsius + 273.15;
}


function kelvinToCelsius($kelvin) {
    return $kelvin - 273.15;
}


$celsius = 25; 


$fahrenheit = celsiusToFahrenheit($celsius);
$kelvin = celsiusToKelvin($celsius);
$kelvinTemp = 298.15; 
$celsiusFromKelvin = kelvinToCelsius($kelvinTemp);


echo "{$celsius} graden Celsius = {$fahrenheit} graden Fahrenheit. <br/>";
echo "{$celsius} graden Celsius = {$kelvin} Kelvin. <br/>";
echo "{$kelvinTemp} Kelvin = {$celsiusFromKelvin} graden Celsius. <br/>";
?>
