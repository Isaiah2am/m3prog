<?php

$artiekel =[
    "naam"=> 'telefoon',
    "prijs"=> 100,
    "vooraad" => 10,
];

$json = json_encode($artiekel);
echo "$json\n";

$object = json_decode($json);

print_r($object);