<?php
if(isset($_POST['submit']) && $_POST['submit'] == 'izmeni') {
    
    $id = $_POST['id_predmeta'];
    $predmet = $_POST['predmet'];
    $katedra = $_POST['katedra'];
    $sala = $_POST['sala'];
    $datum = $_POST['datum'];

    $prijava = new Prijava(null, $id, $predmet, $katedra, $sala, $datum);
    $result=$prijava->addPrijava($prijava, $conn);
}