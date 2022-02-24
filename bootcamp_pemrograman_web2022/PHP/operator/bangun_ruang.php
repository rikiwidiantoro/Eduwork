<!-- menghitung 3 macam volume bangun ruang -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas bangun ruang</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
    <h1>tugas bangun ruang</h1>
    <p>menghitung 3 macam volume bangun ruang</p>

    <ol>

        <!-- kubus -->
        <li>
            <h4>Kubus</h4>
            <p>rumus Volume = rusuk pangkat 3</p>
            <p>soal = Jika suatu kubus memiliki panjang rusuk 7 cm. Hitunglah volume kubus tersebut!</p>
            <p>
                <?php 
                $r = 7; 
                $volumeKubus = $r ** 3;
                ?>
                jawab = Volume = r3 = <?= $volumeKubus ?> cm3
            </p>
        </li>

        <!-- balok -->
        <li>
            <h4>Balok</h4>
            <p>rumus Volume = panjang x lebar x tinggi</p>
            <p>soal = Suatu balok memiliki panjang 10 cm, lebar 8 cm dan tinggi 6 cm. Hitunglah volume balok tersebut!</p>
            <p>
                <?php 
                $p = 10; 
                $l = 8; 
                $t = 6;
                $volumeBalok = $p * $l * $t;
                ?>
                jawab = Volume = p x l x t = <?= $volumeBalok ?> cm3
            </p>
        </li>

        <!-- tabung -->
        <li>
            <h4>Tabung</h4>
            <p>rumus Volume = phi x r pangkat 2 x tinggi</p>
            <p>soal = jika sebuah tabung memiliki jari-jari 14 cm dan tinggi 20 cm. Berapakah volume tabung tersebut?</p>
            <p>
                <?php 
                $phi = 22/7; 
                $r = 14;
                $t = 20; 
                $volumeTabung = $phi * ($r ** 2) * $t;
                ?>
                jawab = Volume = phi x r2 x t = <?= $volumeTabung ?> cm3
            </p>
        </li>

    </ol>
    <br>

    <footer>
        <p style="text-align:center;">Tugas PHP - operator Eduwork | Riki Widiantoro | <a href="https://github.com/rikiwidiantoro" target="_blank"><i class="fab fa-github"> rikiwidiantoro</i></a></p>
    </footer>



</body>
</html>
