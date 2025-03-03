<?php

$R = " <button style='background-color:#FF0000;height:25px;width:25px;'/>";
$O = "<button style='background-color:#Ffa500;height:25px;width:25px;'/> " ;
$G = "<button style='background-color:#00ff00;height:25px;width:25px;'/>";
$stoplichtkleur = "G";




 
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
if($stoplichtkleur == "R" ){
    echo $R;
 } elseif ( $stoplichtkleur == "O"){
    echo $O;
 } elseif($stoplichtkleur == "G"){
    echo $G;
 }


?>

</body>
</html>