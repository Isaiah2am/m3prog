<?php

class LunchItem {
    public $naam;
    public $prijs;
    public $beschrijving;
}

$broodjesbal = new LunchItem();
$broodjesbal->naam = "Broodjesbal";
$broodjesbal->prijs = 2.50;
$broodjesbal->beschrijving = "Een broodje met een bal er op";

$kaasbroodje = new LunchItem();
$kaasbroodje->naam = "Kaasbroodje";
$kaasbroodje->prijs = 1.75;
$kaasbroodje->beschrijving = "Een broodje met kaas";

$lunchItems = [$broodjesbal, $kaasbroodje];

foreach ($lunchItems as $item) {
    echo "Naam: {$item->naam}<br>";
    echo "Prijs: €{$item->prijs}<br>";
    echo "Beschrijving: {$item->beschrijving}<br><br>";
}
?>