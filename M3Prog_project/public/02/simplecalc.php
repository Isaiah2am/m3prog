<?php

    //direct met getallen
    $eenPlusEen = 1 + 1;
    $tienMinVijf = 10 - 5;

    //met variabelen
    $leeftijd = 18;
    $dagen_per_jaar = 365;


    $som1 = 2 + 2;
    $som2 = 5 * 5;
    $som3 = 100 / 100;
    $som4 = 60 - 25;



    $leeftijd_in_dagen = $leeftijd * $dagen_per_jaar;

    //en dan op het scherm:
    echo "Ik ben " . $leeftijd . " jaar " . " en dus al " . $leeftijd_in_dagen . " dagen oud!"; 
    echo $som1;
    echo $som2;
    echo $som3;
    echo $som4;

    $vraagsom1 = $som1 * $som2;
    $vraagsom2 = $som4 / $som3;
    $vraagsom3 = $vraagsom1 *  $som4 / $vraagsom2 - $som2;

    echo $vraagsom1;
    echo $vraagsom2;
    echo $vraagsom3;


?>