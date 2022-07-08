<?php

require 'Trening.php';

$trening = new Trening();
$trening->id = $_GET['TID'];
$trening->datum = $_GET['datum'];
$trening->vreme = $_GET['vreme'];
$trening->teren_id = $_GET['teren'];
$trening->trajanje = $_GET['trajanje'];
$trening->teniser_id = $_GET['teniser'];

$trening->izmeniTrening($trening->id, $trening->datum, $trening->vreme, $trening->teren_id, $trening->trajanje, $trening->teniser_id);

header("Location: termini.php");
