<?php

$standartstring= 'hello world<br>';
$extrastring = "extraworld<br>";

$voornaam = "luigi<br>";
$achternaam = "mario<br>";


$naam = "Yoshi";
$ondertekentDoor = "directeur bowser";

$emailtext =
"Beste $naam<br>
Helaas moeten wij uw verzoek afwijzen.<br>
Onze Goomba's vinden het niet leuk om opgegeten te worden<br>
<br>
Hoogachtend<br>
$ondertekentDoor
<br>
PS:<br>
De princess is in haar kasteel... voor nu :>
";


$fullname = $voornaam . " " . $achternaam;

echo $emailtext;

echo $fullname;
echo $standartstring;
echo $extrastring;

echo $naam;
echo $ondertekentDoor;

?>