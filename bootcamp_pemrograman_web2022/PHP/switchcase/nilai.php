<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas switch case PHP</title> 
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <style>
        body {
            text-align: center;
        }
        .note {
            font-size: 12px;
            color: red;
        }
    </style>
</head>
<body>
    <h1>menghitung kategori nilai</h1>
    <p class="note">note: jika muncul error abaikan!, lanjutkan mengisi form lalu klik cek!</p>

    <!-- form input -->
    <form action="" method="GET">
        <label for="nilai">Nilai : </label><br>
        <input type="text" id="nilai" name="nilai">
        <br><br>
        <input type="submit" value="cek!">
    </form>
    <br><br>


    <!-- PHP -->
    <?php

        // input
        $nilai = $_GET['nilai'];

        // pengkondisian
        if ($nilai >= 90 && $nilai <= 100 ) {
            $kategori = "A";
        } else if ($nilai >= 80 && $nilai < 90 ) {
            $kategori = "B";
        } else if ($nilai >= 70 && $nilai < 80 ) {
            $kategori = "C";
        } else if ($nilai >= 0 && $nilai < 70 ) {
            $kategori = "D";
        } else {
            $kategori = "kosong";
        }

        // switch case
        switch ( $kategori ) {
            case "A":
                echo "Anda mendapatkan nilai <b>A</b>";
                break;
            case "B":
                echo "Anda mendapatkan nilai <b>B</b>";
                break;
            case "C":
                echo "Anda mendapatkan nilai <b>C</b>";
                break;
            case "D":
                echo "Anda mendapatkan nilai <b>D</b>";
                break;
            case "kosong":
                echo "<b>Nilai tidak ditemukan!</b>";
                break;
        }

    ?>


    <br><br><hr><br>
    <footer>
        <p>Tugas PHP - switch case Eduwork | Riki Widiantoro | <a href="https://github.com/rikiwidiantoro" target="_blank"><i class="fab fa-github"> rikiwidiantoro</i></a></p>
    </footer>
</body>
</html>


