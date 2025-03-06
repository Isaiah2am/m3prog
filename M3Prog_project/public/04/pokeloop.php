<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $pokemon = ["Deoxys","Giratina ","Arceus ","Tyranitar","Samurott "];
    $img = ["https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/386.png","https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/487.png","https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/493.png","https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/248.png","https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/503.png"];


for ($i = 0; $i < count($pokemon); $i++) {
    echo "<div class='pokemon-item'>";
    echo "<h1>" . $pokemon[$i] . "</h1>";
    echo "<img src='" . $img[$i] . "'";

}

?>



</body>
</html>