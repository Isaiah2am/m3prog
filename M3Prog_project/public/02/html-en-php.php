<?php
$title = "Een php html voorbeeld pagina";  
$img_url = "https://www.buildingenclosureonline.com/ext/resources/ARWWCA/Project-Profiles-2017/PAC-CLAD-Athletes/HPI_5246-e.jpg?height=635&t=1505319384&width=1200";  
$auteur = "isaiah2 am";  
$alt = "yo";  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> <?= $title; ?> </h1> 

    <img src="<?= $img_url; ?>" alt="<?= $alt; ?>"> 

    <h2> autur <?= $auteur; ?></h2>
</body>
</html>
