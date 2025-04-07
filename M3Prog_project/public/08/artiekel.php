<?php

class Artiekel
{
    public $naam;
    public $prijs;
    public $voorraad;



 
  
}


$game = new Artiekel();
$game->naam = "Donkey kong bananza";
$game->prijs = 100;
$game->voorraad = 10;

echo "\n";
 print_r($game);

 $json = json_encode($game);
echo "$json\n";

$object = json_decode($json);

print_r($object);