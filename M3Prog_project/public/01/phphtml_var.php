<?php
$title = "Mijn mooie website";
$datum = date('d-m-y');
$tijd = date("H:i");
$favoritegame= "super metroid";
$mooistegetal= 42;  
$favoriteshow = "spongebob";
$leukestad = "amsterdam";


?>

<!doctype html>
<html lang="en">
    <head>
        <title><?php echo $title ?></title>
    </head>
    <body>

        <h2>De datum vandaag is: <?php echo $datum?>, en de tijd is <?php echo $title?> uur.
        
        <p><h2>Mijn favoriete game</h2><?php echo $favoritegame?></p>

        <p><h2>mooistegetal:</h2><?= $mooistegetal?> </p>

        <p><h2>favorite show</h2><?=$favoriteshow?> </P>

        <p><h2>favorite stad</h2><?=$leukestad?></p>
        
    </body>
</html>