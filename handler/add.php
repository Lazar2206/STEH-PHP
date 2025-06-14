<?php

if(isset($_POST['submit']) && $_POST['submit'] == 'zakazi') {
    
    
    $predmet = $_POST['predmet'];
    $katedra = $_POST['katedra'];
    $sala = $_POST['sala'];
    $datum = $_POST['datum'];

    $prijava = new Prijava(null, $predmet, $katedra, $sala, $datum);
    $result=$prijava->addPrijava($prijava, $conn);

    if($status) {
        header("Location: ../view/home.php?status=success");
    } else {
        header("Location: ../view/home.php?status=error");
    }
}