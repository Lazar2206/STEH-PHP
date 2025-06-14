<?php
Class Prijava {
    public $id;
    public $predmet;
    public $katedra;
    public $sala;
    public $datum;

    public function __construct($id, $predmet=null, $katedra=null, $sala=null, $datum=null) {
        $this->id = $id;
        $this->predmet = $predmet;
        $this->katedra = $katedra;
        $this->sala = $sala;
        $this->datum = $datum;
    }

    // READ
    public static function getAll(mysqli $conn) {
        $q="SELECT * FROM prijave";
        return $conn->query($q);
    }
    //delete
    public function deleteById(mysqli $conn,int $id) {
        $q = "DELETE FROM prijave WHERE id = '$id'";
        return $conn->query($q);
    }
    //create
    public function addPrijava(Prijava $p, mysqli $conn) {
        $q = "INSERT INTO prijave (predmet, katedra, sala, datum) VALUES ('$p->predmet', '$p->katedra', '$p->sala', '$p->datum')";
        return $conn->query($q);
    }

    //read one
    private function readOne(int $id, mysqli $conn) {
        $q = "SELECT * FROM prijave WHERE id = '$id'";
        $result = $conn->query($q);
        if ($result->num_rows > 0) {
            return $result->fetch_object();
        }
        return null;
    }

    //update 
    // public function updatePrijava(Prijava $p, mysqli $conn) {
    //     $q="SELECT * FROM prijave where id = '$p->id'";
    //     return $conn->query($q);
    // }
public function updatePrijava(Prijava $p, mysqli $conn) {
        $q = "UPDATE prijave SET predmet=?, katedra=?, sala=?, datum=? WHERE id=?";
        $s=$conn->prepare($q);
        $s->bind_param("ssssi", $p->predmet, $p->katedra, $p->sala, $p->datum, $p->id);
        return $s->execute();
    }
}