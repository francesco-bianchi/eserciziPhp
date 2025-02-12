<?php
    require_once("Automobile.php");
    $automobili = [];
    $automobile1 = new Automobile("Toyota", 2004, "yaris");
    $automobile2 = new Automobile("Fiat", 2018, "panda");
    array_push($automobili, $automobile1);
    array_push($automobili, $automobile2);

    echo "<h2>Lista automobili: </h2><br>";
    foreach($automobili as $automobile){
        $automobile -> stampaAuto();
    }
    
?>