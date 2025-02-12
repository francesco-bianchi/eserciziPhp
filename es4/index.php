<?php
header("Content-Type: application/json");
    require_once("Studente.php");
    $studenti = [];
    $studente1 = new Studente("Francesco", "Bianchi", "123");
    $studente2 = new Studente("Stefano", "Cherubini", "323");
    array_push($studenti, $studente1);
    array_push($studenti, $studente2);

    echo json_encode($studenti);
    
?>