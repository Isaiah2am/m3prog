<?php

$json = '{"naam":"God of war","prijs":39.99,"voorraad":150}';

$game = json_decode($json);

echo "Naam: {$game->naam}<br>";
echo "Prijs: €{$game->prijs}<br>";
echo "Voorraad: {$game->voorraad}<br>";

$game->beschrijving = "Game of the Year Edition";

echo "Beschrijving: {$game->beschrijving}<br>";

$game->voorraad = 20;

$game->prijs = 29.99;

$game->jaar = 2022;

echo "<br>Gewijzigde waarden:<br>";
echo "Naam: {$game->naam}<br>";
echo "Prijs: €{$game->prijs}<br>";
echo "Voorraad: {$game->voorraad}<br>";
echo "Beschrijving: {$game->beschrijving}<br>";
echo "Jaar: {$game->jaar}<br>";

$jsonOutput = json_encode($game, JSON_PRETTY_PRINT);

echo "<br>JSON-output:<br><pre>$jsonOutput</pre>";
?>