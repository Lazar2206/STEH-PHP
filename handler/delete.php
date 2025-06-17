<?php

// require "../dbBroker.php";
// require "../model/prijava.php";

if(isset($_POST['sumbit']) && $_POST['submit'] == 'Obrisi') {
    $id = $_POST['id_predmeta'];
   $prijava=new Prijava($id);
   $obrisano = $prijava->deleteById($conn, $id);
}