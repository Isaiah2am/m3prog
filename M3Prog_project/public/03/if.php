<?php
 $eenBoolVariable =false;
 $aantalopvooraad = 0;
 $opvoorraad = $aantalopvooraad;
 $niet = "niet op voorraad";
 $wel = "wel op voorraad";

 if($opvoorraad == 0 ){
    echo $niet;
 } else{
    echo $wel;
 }



?>