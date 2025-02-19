<?php
header("Content-Type: application/json");
    require_once("Alunno.php");
    require_once("Indirizzo.php");
    require_once("Voto.php");

    /*$voti_alunni = [];
    $voto1 = new Voto(8, "matematica", "buono");
    $voto2 = new Voto(7, "italiano", "bene");
    array_push($voti_alunni, $voto1);
    array_push($voti_alunni, $voto2);

    $indirizzo1 = new Indirizzo("via x dicembre", 1, 50121);
    $indirizzo2 = new Indirizzo("via xv dicembre", 1, 50121);

    $alunni = [];
    $alunno1 = new Alunno("Francesco", "Bianchi", 18, $indirizzo1, $voti_alunni);
    $alunno2 = new Alunno("Leonardo", "Iarossi", 18, $indirizzo2, $voti_alunni);
    array_push($alunni, $alunno1);
    array_push($alunni, $alunno2);

    //echo json_encode($alunni);
    $alunni_serializzati = json_encode($alunni);*/
    

    //deserializzazione
    $alunni_serializzati = file_get_contents("alunni.json");
    $alunni2 = json_decode($alunni_serializzati, true);
    $alunni_nuovi=[];
    foreach($alunni2 as $alunno){
        $alunno_nuovo = new Alunno($alunno["nome"], $alunno["cognome"], $alunno["eta"], $alunno["indirizzo"], $alunno["voti_alunni"]);
        array_push($alunni_nuovi, $alunno_nuovo);
    }
    echo json_encode($alunni_nuovi);
    //var_dump($alunni2);
?>