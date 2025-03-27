<?php
header('Content-Type: application/json');

$films = array(
    "films" => array(
        array(
            "title" => "Spiderman no way home",
            "details" => array(
                "regisseur" => "Jon Watts",
                "jaar"      => 2021,
                "genre"     => "Action"
            )
        ),
        array(
            "title" => "Inception",
            "details" => array(
                "regisseur" => "Christopher Nolan",
                "jaar"      => 2010,
                "genre"     => "Science Fiction/Thriller"
            )
        ),
        array(
            "title" => "footloose",
            "details" => array(
                "regisseur" => "Craig Brewer",
                "jaar"      => 2011 ,
                "genre"     => "music/Drama"
            )
        )
    )
);

$jsonFilms = json_encode($films, JSON_PRETTY_PRINT);

echo $jsonFilms;
?>