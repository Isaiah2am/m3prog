<?php
// Celsius naar Fahrenheit
function celsiusToFahrenheit($celsius) {
    return ($celsius * 1.8) + 32;
}

// Celsius naar Kelvin
function celsiusToKelvin($celsius) {
    return $celsius + 273.15;
}

// Kelvin naar Celsius
function kelvinToCelsius($kelvin) {
    return $kelvin - 273.15;
}

// Voorbeeldwaarden
$celsius = 25; // Stel hier de temperatuur in Celsius in

// Conversies
$fahrenheit = celsiusToFahrenheit($celsius);
$kelvin = celsiusToKelvin($celsius);
$kelvinTemp = 298.15; // Stel hier een temperatuur in Kelvin in
$celsiusFromKelvin = kelvinToCelsius($kelvinTemp);

// Output
echo "{$celsius} graden Celsius = {$fahrenheit} graden Fahrenheit. <br/>";
echo "{$celsius} graden Celsius = {$kelvin} Kelvin. <br/>";
echo "{$kelvinTemp} Kelvin = {$celsiusFromKelvin} graden Celsius. <br/>";
?>
