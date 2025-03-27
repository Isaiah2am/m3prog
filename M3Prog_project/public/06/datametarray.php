<?php
header('Content-Type: application/json');

$student1 = array(
    "name" => "mario ",
    "cijfer" => 5.5
);
$student2 = array(
    "name" => "wario ",
    "cijfer" => 5.5
);

$dataObject = array(
    "studenten" => array($student1, $student2)
);

$student3 = array(
    "name" => "bowser",
    "cijfer" => 5.5
);
$student4 = array(
    "name" => "toad",
    "cijfer" => 5.5
);

$dataObject["studenten"][] = $student3;
$dataObject["studenten"][] = $student4;

$jsonString = json_encode($dataObject);

echo $jsonString;
?>