<?php
$title = "Mijn mooie website";
$datum = date('d-m-y');
$tijd = date("H:i");
$favoritegame= "super metroid";
$mooistegetal= 42;

echo $title;
echo $datum;
echo $tijd;
echo $favoritegame;
echo $mooistegetal;

?>

<!doctype html>
<html lang="en">
    <head>
        <title><?php echo "Titel van de pagina" ?></title>
    </head>
    <body>
        <h2>De datum vandaag is: <?php echo date('d-m-Y')?>, en de tijd is <?php echo date("H:i")?> uur.
        
        <p><h2>Mijn favoriete game</h2><?php echo "Super metroid";?></p>
    </body>
</html>