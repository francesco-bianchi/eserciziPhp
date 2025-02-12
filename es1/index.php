<?php
header("Content-Type: application/json");
    require_once("Alunno.php");
    $alunni = [];
    $alunno1 = new Alunni("Francesco", "Bianchi", 18);
    $alunno2 = new Alunni("Leonardo", "Iarossi", 18);
    array_push($alunni, $alunno1);
    array_push($alunni, $alunno2);

    echo json_encode($alunni);
?>