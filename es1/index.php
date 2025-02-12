<?php
    require_once("Alunno.php");
    $alunni = [];
    $alunno1 = new Alunni("Francesco", "Bianchi", 18);
    $alunno2 = new Alunni("Leonardo", "Iarossi", 18);
    array_push($alunni, $alunno1);
    array_push($alunni, $alunno2);

    echo "<h2>Lista alunni: </h2><br>";
    foreach($alunni as $alunno){
        $alunno -> stampa();
    }
    
?>