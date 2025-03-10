<?php
$announcements = [
    "a.html",
    "b.html",
    "c.html",
    "d.html",
    "e.html"
];


$reviews = 
[
    ["demon's souls",10],
    ["mario wonder",9.5],
    ["mega man 2",8],
]
;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    foreach ($announcements as $announcement) {
        include "announcements/$announcement";
    }

    foreach ($reviews as $review) {

        $title = $review[0];
        $cijfer = $review[1];



    }


    ?>

<h1> <?= $title?></h1>
<h2><?=$cijfer?></h2>

</body>
</html>
