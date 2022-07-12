<?php

$konekcija = new mysqli("localhost", "root", "", "trening");

$kolona = $_POST['kolona'];
$sort = $_POST['sort'];

$sql = "SELECT trening.id, trening.datum, trening.vreme, teren.naziv, teren.lokacija, trening.trajanje, teniser.ime, teniser.prezime 
            FROM trening JOIN teren ON trening.teren_id=teren.id 
            JOIN teniser ON trening.teniser_id = teniser.id ORDER BY " . $kolona . " " . $sort;

$rezultat = $konekcija->query($sql);

while ($t = mysqli_fetch_array($rezultat)) {
?>
    <tr>
        <td><?php echo $t['datum'];  ?></td>
        <td><?php echo $t['vreme'];  ?></td>
        <td><?php echo $t['naziv'];  ?></td>
        <td><?php echo $t['lokacija'];  ?></td>
        <td><?php echo $t['trajanje'];  ?></td>
        <td><?php echo $t['ime'] . " " . $t['prezime'];  ?></td>
        <td>
            <a href="editTrening.php?IDTRENING=<?php echo $t['id']; ?>"><button class="btn btn-success" id="biz">EDIT</button></a>
            <a href="deleteTrening.php?IDTRENING=<?php echo $t['id']; ?>"><button class="btn btn-success" id="dd">DELETE</button></a>
        </td>
    </tr>
<?php
}
?>