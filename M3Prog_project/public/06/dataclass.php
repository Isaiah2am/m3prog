<?php
header('Content-Type: application/json');

class Student {
    public $name;
    public $cijfer;
    
    public function __construct($name, $cijfer) {
        $this->name = $name;
        $this->cijfer = $cijfer;
    }
}

// Maak de student-objecten aan
$mario  = new Student("mario ", 5.5);
$bowser  = new Student("bowser ", 5.5);
$peach = new Student("peach", 5.5);
$wario  = new Student("wario", 55.5);

$dataObject = array(
    "studenten" => array($mario, $bowser, $peach, $wario)
);

echo json_encode($dataObject);
?>