<?php

$games= ["fortnite","minecraft","cod","mario","zelda"];



echo"<br>";
echo $games[2]; 
echo"<br>";
echo $games[4]; 
echo"<br>";


var_dump($games);
echo"<br>";
print_r($games);


echo count($games). "<br>";
array_push($games, "nog een game");
print_r($games);


echo"<br>";
echo implode(' >> ', $games);
echo"<br>";
echo implode("  ",$games);
echo"<br>";
echo implode( "<br>", $games);


print_r($games);

echo"<br>";
echo implode(' >> ', $games);
echo"<br>";
echo implode("  ",$games);
echo"<br>";
echo implode( "<br>", $games);

?>

