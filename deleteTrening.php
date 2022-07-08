<?php

$konekcija = new mysqli("localhost", "root", "", "trening");
$sql = "delete from trening where id=" . $_GET['IDTRENING'];
$konekcija->query($sql);

header("Location: termini.php");
