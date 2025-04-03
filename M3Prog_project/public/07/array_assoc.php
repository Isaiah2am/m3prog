<?php
$weersvoorspelling = [
    'maandag' => 15,
    'dinsdag' => 14,
    'woensdag' => 34,
    'donderdag' => 4,
    'vrijdag' => 25,
    'zaterdag' => 41,
    'zondag' => 1
];

$vandaag = 'maandag'; 
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="array_assoc.css">
</head>
<body>
<pre><?php print_r($weersvoorspelling); ?></pre>

    <h2>weersvoorspelling per dag</h2>
    <table>
        <thead>
            <tr>
                <th>dag</th>
                <th>temperatuur (°C)</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($weersvoorspelling as $dag => $temp) : ?>
                <tr>
                    <td><?= $dag ?></td>
                    <td><?= $temp ?>°C</td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <strong><p>de temperatuur op <?= $vandaag; ?> = <?= $weersvoorspelling[$vandaag]; ?>°C.</p></strong>

    <p>op dinsdag is het <?= $weersvoorspelling['dinsdag']; ?>°C.</p>
    <p>op woensdag is het <?= $weersvoorspelling['woensdag']; ?>°C.</p>
    <p>op donderdag is het <?= $weersvoorspelling['donderdag']; ?>°C.</p>
    <p>op vrijdag is het <?= $weersvoorspelling['vrijdag']; ?>°C.</p>


</body>
</html>