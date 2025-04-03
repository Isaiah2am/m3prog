<?php


$jsonarray= [
    $verbruikverbruik= [
        "switch 2" => 11,
        "iphone 1" => 1,
        "nintendo ds" => 5,
        "xbox series x" => 49,
        "steam deck" => 16,

    ],
    $presoon= [
        "voornaam" => "Jan",
        "achternaam" => "Jansen",
        "leeftijd" => 30,
        "woonplaats" => "Amsterdam",
        "favoriete_eten" => "pizza",
        "minstfavoriete_eten" => "spruitjes",
    ],
    $weersvoorspelling = [
        'maandag' => 15,
        'dinsdag' => 14,
        'woensdag' => 34,
        'donderdag' => 4,
        'vrijdag' => 25,
        'zaterdag' => 41,
        'zondag' => 1
    ],
    $tropiespergame = [
        "A" => 11,
        "B" => 0,
        "C" => 9,
        "D" => "tetris",

    ],
];



header('Content-Type: application/json');
echo json_encode($jsonarray);
echo "\n";
