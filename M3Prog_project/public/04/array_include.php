<?php
$announcements = [
    "a.html",
    "b.html",
    "c.html",
    "d.html",
    "e.html"
];
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
    ?>
</body>
</html>
