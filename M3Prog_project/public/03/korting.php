<?php

$totaalbesteld = 400.0;
$verzendkosten = 3.50;
$korting = 0;
$cadeautje=false;


if($totaalbesteld >= 100){
    $verzendkosten = 0;
}

if($totaalbesteld >= 250){
    $korting = 0.05;
}

if($totaalbesteld >= 400){
    $cadeautje = true;
}

$totaal = $totaalbesteld - ($korting*$totaalbesteld) + ($verzendkosten);

echo "totaal van de bestelde artiekelen $totaalbesteld</br>";
echo "totaal met verzendkosten wordt het $totaal</br>";

if($cadeautje == true){
    
echo "U krijgt ook een cadeautje ter waarde van 10 euro</br>";

}


?>