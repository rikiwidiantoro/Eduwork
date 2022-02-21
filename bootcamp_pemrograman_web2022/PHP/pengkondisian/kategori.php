<!-- menghitung nilai BMI -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas pengkondisian PHP</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <style>
        body {
            text-align: center;
        }
        span {
            font-weight: bold;
        }
        .note {
            font-size: 12px;
            color: red;
        }
    </style>
</head>
<body>
    <h1>menghitung nilai BMI</h1>
    <p class="note">note: jika muncul error abaikan!, lanjutkan mengisi form lalu klik cek!</p>

    <!-- form input -->
    <form action="" method="GET">
        <label for="nama">Nama : </label><br>
        <input type="text" id="nama" name="nama">
        <br><br>
        <label for="beratbadan">Berat Badan : (kg)</label><br>
        <input type="text" id="beratbadan" name="beratbadan">
        <br><br>
        <label for="tinggibadan">Tinggi Badan : (m)(harus dengan titik '.')</label><br>
        <input type="text" id="tinggibadan" name="tinggibadan">
        <br><br>
        <input type="submit" value="cek!">
    </form>
    <br><hr><br>

    <?php

        // inputan
        $nama = $_GET['nama'];
        $bb = $_GET['beratbadan']; //satuan kilogram contoh: 70kg
        $tb = $_GET['tinggibadan']; // satuan meter contoh: 1.7m harus dengan titik '.'

        // rumus BMI
        $bmi = $bb / $tb ** 2;


        // penkondisian kategori
        if ( $bmi < 18.5 ) {
            $kategori = "Kurus";
        } else if ( $bmi > 18.5 && $bmi < 24.9) {
            $kategori = "Ideal";
        } else if ( $bmi > 25.0 && $bmi < 29.9 ) {
            $kategori = "Gemuk";
        } else if ( $bmi > 30.0 ) {
            $kategori = "Obesitas";
        }



        // <!-- output -->
        // echo "<p>Hallo, <span>$nama</span>. Nilai BMI Anda adalah <span>$bmi</span>, tipe badan Anda termasuk dalam kategori <span>$kategori</span>.</p>"
    ?>

        <!-- output -->
        <p>Hallo, <span><?= $nama ?></span>. Nilai BMI Anda adalah <span><?= $bmi ?></span>, tipe badan Anda termasuk dalam kategori <span><?= $kategori ?></span>.</p>


    <br><hr><br>
    <footer>
        <p>Tugas PHP - pengkondisian Eduwork | Riki Widiantoro | <a href="https://github.com/rikiwidiantoro" target="_blank"><i class="fab fa-github"> rikiwidiantoro</i></a></p>
    </footer>

</body>
</html>