<?php
header("Content-Type: application/json");
    require_once("Automobile.php");
    $automobili = [];
    $automobile1 = new Automobile("Toyota", 2004, "yaris");
    $automobile2 = new Automobile("Fiat", 2018, "panda");
    array_push($automobili, $automobile1);
    array_push($automobili, $automobile2);

    echo json_encode($automobili);
    
?>