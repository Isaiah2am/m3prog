<?php
$stad = "Amsterdam";
$weer = "zonnig";
$aantal_mensen = 872000;  
$temperatuur = 12.5; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weer in de stad</title>
</head>
<body>
    <h1>Weerbericht voor <?= $stad; ?></h1>
    <p>Het weer is momenteel: <?= $weer; ?>. aantal mensen in de stad: <?= $aantal_mensen; ?>  en de huidige temperatuur is: <?= number_format($temperatuur, 1); ?> °C.</p> 
    
</body>
</html>
