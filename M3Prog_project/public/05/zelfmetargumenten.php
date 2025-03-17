<?php

function convertCurrency($amount, $fromCurrency, $toCurrency) {
    echo "$amount <br> $fromCurrency <br>$toCurrency <br>";
}


function sendEmail($to, $from, $subject, $message){
    echo "$to<br> $from<br>  $subject<br>  $message<br>";
}

function generateRandomString($length){
    echo " $length<br>";
}

function calculateArea($length, $width){
    echo" $length<br>  $width <br>";
}

convertCurrency(100,"euro", "yen");
generateRandomString(10);
calculateArea(10, 20);
sendEmail("leraar@college.nl","studenten@college","huiswerk","voor volgende week");

?>