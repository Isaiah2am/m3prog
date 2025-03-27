<?php

$steden = array("amsterdam", "rotterdam", "utrecht");

$jsonSteden = json_encode($steden);

$decodedSteden = json_decode($jsonSteden);

print_r($decodedSteden);

$json = '{
    "studenten": [
      {
        "name": "mario",
        "gemiddeldCijfer": 7.5
      },
      {
        "name": "wario",
        "gemiddeldCijfer": 4.5
      }
    ]
  }';

  $dataObject= json_decode($json);
  echo "<br>";
  print_r($dataObject);
  echo "<br>";
  echo $dataObject->studenten[0]->name;
  echo "<br>";
  echo $dataObject->studenten[1]->gemiddeldCijfer;
?>