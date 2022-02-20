<!--  menghitung 5 macam luas jenis bangun datar -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas bangun datar</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
    <h1>tugas bangun datar</h1>
    <p>menghitung 5 macam luas jenis bangun datar</p>

    <ol>

        <!-- persegi -->
        <li>
            <h4>Persegi</h4>
            <p>rumus : sisi x sisi</p>
            <p>soal : Sebuah persegi memiliki ukuran sisi 5 cm. Hitunglah berapa luas persegi tersebut!</p>
            <p>
                <?php 
                $s = 5; 
                $luasPersegi = $s * $s;
                ?>
                jawab : Luas = s x s = <?= $luasPersegi ?> cm2
            </p>
        </li>

        <!-- persegi panjang -->
        <li>
            <h4>Persegi Panjang</h4>
            <p>rumus : panjang x lebar</p>
            <p>soal : Sebuah persegi panjang memiliki ukuran panjang 10 cm dan lebar 5 cm. Hitunglah berapa luas persegi panjang tersebut!</p>
            <p>
                <?php 
                $p = 10; 
                $l = 5; 
                $luasPersegiPanjang = $p * $l;
                ?>
                jawab : Luas = p x l = <?= $luasPersegiPanjang ?> cm2
            </p>
        </li>

        <!-- segitiga -->
        <li>
            <h4>Segitiga</h4>
            <p>rumus : 1/2 x alas x tinggi</p>
            <p>soal : Sebuah segitiga memiliki ukuran sisi alas 10 cm dan tinggi 7 cm. Jika ukuran sisi-sisi miringnya adalah 8 cm dan 9 cm, hitunglah berapa luas segitiga tersebut!</p>
            <p>
                <?php 
                $a = 10; 
                $t = 7; 
                $luasSegitiga = 1/2 * $a * $t;
                ?>
                jawab : Luas = 1/2 x a x t = <?= $luasSegitiga ?> cm2
            </p>
        </li>

        <!-- lingkaran -->
        <li>
            <h4>Lingkaran</h4>
            <p>rumus : phi x r pangkat 2</p>
            <p>soal : Sebuah lingkaran memiliki ukuran jari-jari 7 cm. Hitunglah berapa luas lingkaran tersebut!</p>
            <p>
                <?php 
                $phi = 22/7; 
                $r = 7; 
                $luasLingkaran = $phi * $r ** 2;
                ?>
                jawab : Luas = phi x r2 = <?= $luasLingkaran ?> cm2
            </p>
        </li>

        <!-- layang-layang -->
        <li>
            <h4>Layang-layang</h4>
            <p>rumus : 1/2 x diagonal 1 x diagonal 2</p>
            <p>soal : Sebuah layang-layang memiliki ukuran diagonal1 10 cm dan diagonal2 20 cm. Hitunglah berapa luas layang-layang tersebut!</p>
            <p>
                <?php 
                $d1 = 10; 
                $d2 = 20; 
                $luasLayang = 1/2 * $d1 * $d2;
                ?>
                jawab : Luas = 1/2 x d1 x d2 = <?= $luasLayang ?> cm2
            </p>
        </li>

    </ol>
    <br>

    <footer>
        <p style="text-align:center;">Tugas PHP - operator Eduwork | Riki Widiantoro | <a href="https://github.com/rikiwidiantoro" target="_blank"><i class="fab fa-github"> rikiwidiantoro</i></a></p>
    </footer>



</body>
</html>

