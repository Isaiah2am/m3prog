<?php

$loggedin = false;
if(isset($_GET['loggedin'])){
    $loggedin = true;
}
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
        if ($loggedin == true){
            include "mydashboard.html";
            

    }else{
        include "home.html";
    }
    
    
    ?>
</body>
</html>