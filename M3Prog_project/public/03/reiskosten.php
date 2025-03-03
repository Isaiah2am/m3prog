<?php

$afstand = 1000;  
$prijs_per_liter_benzine = 1.89;  
$prijs_trein = 60;  
$tankinhoud = 50;  


$benzine_verbruik_per_km = 1 / 15;  
$benzine_gebruik = $afstand * $benzine_verbruik_per_km; 
$aantal_tanken = ceil($benzine_gebruik / $tankinhoud);  
$kosten_auto = $benzine_gebruik * $prijs_per_liter_benzine; 

echo "De totale afstand is: " . $afstand . " km<br>";
echo "De totale kosten voor de reis met de auto zijn: €" . number_format($kosten_auto, 2, ',', '.') . "<br>";
echo "Je verbruikt " . number_format($benzine_gebruik, 2, ',', '.') . " liter benzine.<br>";
echo "Je moet " . $aantal_tanken . " keer tanken.<br>";


if ($kosten_auto > $prijs_trein) {
    echo "Ik ga met de trein.";
} else {
    echo "Ik ga met de auto.";
}
?>
