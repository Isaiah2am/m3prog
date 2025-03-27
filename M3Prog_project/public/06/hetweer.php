<?php
$dag = isset($_GET['dag']) ? $_GET['dag'] : 'ma';

$temperaturen = array(
    "ma" => 21,
    "di" => 23,
    "wo" => 20,
    "do" => 18,
    "vr" => 19,
    "za" => 22,
    "zo" => 20
);

$weerIconen = array(
    "ma" => "../imgs/sun.png",
    "di" => "../imgs/cloud.png",
    "wo" => "../imgs/rain.png",
    "do" => "../imgs/storm.png",
    "vr" => "../imgs/snow.png",
    "za" => "../imgs/fog.png",
    "zo" => "../imgs/cloud.png"
);

if (isset($temperaturen[$dag]) && isset($weerIconen[$dag])) {
    $celsius = $temperaturen[$dag];
    $fahrenheit = ($celsius * 9/5) + 32;
    $icoon = $weerIconen[$dag];
} else {
    $celsius = null;
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>het weer - voorspelling</title>

</head>
<body>
    <h1>weersvoorspelling</h1>
    <?php if ($celsius !== null): ?>
        <div>
            <h2>voorspelling voor <?php echo htmlspecialchars(strtoupper($dag)); ?></h2>
            <p>temperatuur <?php echo htmlspecialchars($celsius); ?> &deg;C</p>
            <p>in fahrenheit <?php echo htmlspecialchars($fahrenheit); ?> &deg;F</p>
            <img src="<?php echo htmlspecialchars($icoon); ?>" alt="Weericoon voor <?php echo htmlspecialchars($dag); ?>">
        </div>
    <?php else: ?>
        <p>geen gegevens beschikbaar voor de dag <?php echo htmlspecialchars($dag); ?></p>
    <?php endif; ?>
</body>
</html>