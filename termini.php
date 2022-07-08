<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="stil.css">
</head>

<body>

    <img src="https://www.insidesport.in/wp-content/uploads/2022/04/byersandco-wimbledon-1594393920819.jpg" alt="" id="w-pocetna">

    <h1 id="rezter-tekst">REZERVISANI TRENING TERMINI</h1>

    <table class="table table-bordered table-light border border-2 border-dark" id="trez">
        <thead>
            <tr>
                <th>Datum</th>
                <th>Vreme</th>
                <th>Naziv terena</th>
                <th>Lokacija terena</th>
                <th>Trajanje</th>
                <th>Teniser</th>
            </tr>
        </thead>

        <tbody>
            <?php

            $konekcija = new mysqli("localhost", "root", "", "trening");
            $sql = "SELECT trening.datum, trening.vreme, teren.naziv, teren.lokacija, trening.trajanje, teniser.ime, teniser.prezime 
            FROM trening JOIN teren ON trening.teren_id=teren.id 
            JOIN teniser ON trening.teniser_id = teniser.id";

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

                </tr>
            <?php
            }
            ?>
        </tbody>

    </table>




</body>

</html>