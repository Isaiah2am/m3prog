<?php

$presoon= [
    "voornaam" => "Jan",
    "achternaam" => "Jansen",
    "leeftijd" => 30,
    "woonplaats" => "Amsterdam",
    "favoriete_eten" => "pizza",
    "minstfavoriete_eten" => "spruitjes",
];

echo "<table>";
echo "<tr><th>Key</th><th>Value</th></tr>";

foreach ($presoon as $key => $value) {
    echo "<tr><td>$key</td><td>$value</td></tr>";
}

echo "</table>";