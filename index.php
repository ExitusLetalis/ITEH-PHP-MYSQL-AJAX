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

    <h1 id="novitermin-tekst">NOVI TRENING TERMIN</h1>

    <form action="saveTrening.php" method="get">

        <div class="fr">

            <div class="forma">
                <label class="form-label">Datum: </label>
                <input type="text" class="form-control" name="datum">
            </div>

            <div class="forma">
                <label class="form-label">Vreme: </label>
                <input type="text" class="form-control" name="vreme">
            </div>

            <div class="forma">
                <label class="form-label">Teren: </label>
                <select class="form-select" name="teren">
                    <?php

                    $konekcija = new mysqli("localhost", "root", "", "trening");
                    $sql  = "select * from teren";
                    $rezultat = $konekcija->query($sql);

                    while ($t = mysqli_fetch_array($rezultat)) {
                    ?>
                        <option value="<?php echo $t['id']; ?>"><?php echo $t['naziv']; ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>

        </div>

        <div class="sr">

            <div class="forma">
                <label class="form-label">Trajanje: </label>
                <input type="text" class="form-control" name="trajanje">
            </div>

            <div class="forma">
                <label class="form-label">Teniser: </label>
                <select class="form-select" name="teniser">
                    <?php

                    $sql2  = "select * from teniser";
                    $rezultat2 = $konekcija->query($sql2);

                    while ($t = mysqli_fetch_array($rezultat2)) {
                    ?>
                        <option value="<?php echo $t['id']; ?>"><?php echo $t['ime'] . " " . $t['prezime']; ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>

            <button type="submit" class="btn btn-success" id="rzrbtn">Rezerviši</button>

        </div>

    </form>

</body>

</html>