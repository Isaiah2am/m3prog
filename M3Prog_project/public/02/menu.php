<?php

$gerechtFormat = "Gerecht type: <TYPEGERECHT><br><br>
<NAAMGERECHT> €<PRIJS><br><br>
<BESCHRIJVING><br>
Ingegredientenlijst:<br>
<INGREDIENTENLIJST><br><br>
Bent u allergisch? bekijk dan hieronder de allergenen:<br>
<ALLERGENENLIJST><br>";

$typeGerecht = "hoofd";  
$naamGerecht = "Pizza Margherita";
$prijs = 12.50;  
$beschrijving = "Een klassieke pizza met tomatensaus, mozzarella en verse basilicum.";
$ingredientenLijst = "Tomaat, mozzarella, basilicum, olijfolie";
$allergenenLijst = "Gluten, melk";
 

$gerechtDetails = str_replace("<TYPEGERECHT>", $typeGerecht, $gerechtFormat);
$gerechtDetails = str_replace("<NAAMGERECHT>", $naamGerecht, $gerechtDetails);
$gerechtDetails = str_replace("<PRIJS>", $prijs, $gerechtDetails);
$gerechtDetails = str_replace("<BESCHRIJVING>", $beschrijving, $gerechtDetails);
$gerechtDetails = str_replace("<INGREDIENTENLIJST>", $ingredientenLijst, $gerechtDetails);
$gerechtDetails = str_replace("<ALLERGENENLIJST>", $allergenenLijst, $gerechtDetails);


echo $gerechtDetails;
?>
