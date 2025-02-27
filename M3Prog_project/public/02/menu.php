<?php
// Het format voor het gerecht
$gerechtFormat = "Gerecht type: <TYPEGERECHT><br><br>
<NAAMGERECHT> €<PRIJS><br><br>
<BESCHRIJVING><br>
Ingegredientenlijst:<br>
<INGREDIENTENLIJST><br><br>
Bent u allergisch? bekijk dan hieronder de allergenen:<br>
<ALLERGENENLIJST><br>";

// Variabelen voor het gerecht
$typeGerecht = "hoofd";  // Kan 'voor', 'hoofd' of 'na' zijn
$naamGerecht = "Pizza Margherita";
$prijs = 12.50;  // De prijs van het gerecht in euro's
$beschrijving = "Een klassieke pizza met tomatensaus, mozzarella en verse basilicum.";
$ingredientenLijst = "Tomaat, mozzarella, basilicum, olijfolie";
$allergenenLijst = "Gluten, melk";

// Vervang de placeholders met de variabelen
$gerechtDetails = str_replace("<TYPEGERECHT>", $typeGerecht, $gerechtFormat);
$gerechtDetails = str_replace("<NAAMGERECHT>", $naamGerecht, $gerechtDetails);
$gerechtDetails = str_replace("<PRIJS>", $prijs, $gerechtDetails);
$gerechtDetails = str_replace("<BESCHRIJVING>", $beschrijving, $gerechtDetails);
$gerechtDetails = str_replace("<INGREDIENTENLIJST>", $ingredientenLijst, $gerechtDetails);
$gerechtDetails = str_replace("<ALLERGENENLIJST>", $allergenenLijst, $gerechtDetails);

// Toon het resultaat
echo $gerechtDetails;
?>
