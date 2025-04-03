<?php

$verbruikverbruik= [
    "switch 2" => 11,
    "iphone 1" => 1,
    "nintendo ds" => 5,
    "xbox series x" => 49,
    "steam deck" => 16,

];

foreach ($verbruikverbruik as $key => $value) {
    echo "<p>$key verbruikt $value Kwh.</p>";
}

$totaal = 0;

foreach ($verbruikverbruik as $key => $value) {
    $totaal += $value;
}

echo "het totaal is verbruikt is $totaal KWH ";