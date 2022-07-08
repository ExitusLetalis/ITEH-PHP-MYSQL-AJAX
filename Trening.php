<?php

class Trening
{
    public $id;
    public $datum;
    public $vreme;
    public $teren_id;
    public $trajanje;
    public $teniser_id;

    public function dodajTrening($datum, $vreme, $teren_id, $trajanje, $teniser_id)
    {
        $konekcija = new mysqli("localhost", "root", "", "trening");
        $sql = "insert into trening (datum, vreme, teren_id, trajanje, teniser_id) values ('$datum', '$vreme', '$teren_id', '$trajanje', '$teniser_id')";

        return $konekcija->query($sql);
    }
}
