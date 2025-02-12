<?php
header("Content-Type: application/json");
    require_once("Cane.php");
    $cane = new Cane();
    echo json_encode($cane);
?>