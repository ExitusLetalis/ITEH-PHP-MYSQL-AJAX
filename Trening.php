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

    public function izmeniTrening($id, $datum, $vreme, $teren_id, $trajanje, $teniser_id)
    {
        $konekcija = new mysqli("localhost", "root", "", "trening");
        $sql = "update trening set datum='$datum', vreme='$vreme', teren_id='$teren_id', trajanje='$trajanje', teniser_id='$teniser_id' where id='$id'";

        return $konekcija->query($sql);
    }
}
