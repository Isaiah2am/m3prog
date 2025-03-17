<?php


$mijnFunctionResultaat = mijnFunction();

function mijnFunction()
{
    return 1;
}


function returnVariable()
{
    $result =rand();
    return $result;
}


echo returnVariable();
echo "<br>";
echo returnVariable();
echo "<br>";
echo returnVariable();
echo "<br>";


echo $mijnFunctionResultaat;
echo "<br>";

?>