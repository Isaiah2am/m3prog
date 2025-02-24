<?php

$getal = 11214.48956; 
$afgerond1 = ceil($getal); 
echo "Als je $getal afrondt naar boven, krijg je: $afgerond1<br>";


$getal2 = 11214.48956; 
$afgerond2 = floor($getal2); 
echo "Als je $getal2 afrondt naar beneden, krijg je: $afgerond2<br>";


$random1 = rand(1, 100); 
$random2 = rand(1, 100); 
$random3 = rand(1, 100); 


$optelling = $random1 + $random2;


$resultaat = $optelling / $random3;

echo "Random1: $random1<br>";
echo "Random2: $random2<br>";
echo "Random3: $random3<br>";
echo "De optelling van Random1 en Random2 is: $optelling<br>";
echo "Het resultaat van de deling van $optelling door Random3 is: $resultaat<br>";

?>
