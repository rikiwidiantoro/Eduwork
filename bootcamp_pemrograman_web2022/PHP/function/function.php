<?php

// bangun datar
function persegi($sisiPersegi) {
    // $sisiPersegi = 5;
    $luasPersegi = $sisiPersegi * $sisiPersegi;
    echo $luasPersegi;
}

function persegiPanjang($panjangPersegiPanjang, $lebarPersegiPanjang) {
    // $panjangPersegiPanjang = 10;
    // $lebarPersegiPanjang = 5;
    $luasPersegiPanjang = $panjangPersegiPanjang * $lebarPersegiPanjang;
    echo $luasPersegiPanjang;
}

function segitiga($alasSegitiga, $tinggiSegitiga) {
    $luasSegitiga = 1/2 * $alasSegitiga * $tinggiSegitiga;
    echo $luasSegitiga;
}

function lingkaran($jarijariLingkaran) {
    $phi = 22/7;
    $luasLingkaran = $phi * ($jarijariLingkaran ** 2);
    echo $luasLingkaran;
}

function layang($diagonal1, $diagonal2) {
    $luasLayang = 1/2 * $diagonal1 * $diagonal2;
    echo $luasLayang;
}


// bangun ruang
function kubus($rusuk) {
    $volumeKubus = $rusuk ** 3;
    echo $volumeKubus;
}

function balok($panjangBalok, $lebarBalok, $tinggiBalok) {
    $volumeBalok = $panjangBalok * $lebarBalok * $tinggiBalok;
    echo $volumeBalok;
}

function tabung($jarijariTabung, $tinggiTabung) {
    $phi = 22/7;
    $volumeTabung = $phi * ($jarijariTabung ** 2) * $tinggiTabung;
    echo $volumeTabung;
}

function bola($jarijariBola) {
    $phi = 22/7;
    $volumeBola = 4/3 * $phi * ($jarijariBola ** 3);
    echo $volumeBola;
}

function kerucut($jarijariKerucut, $tinggiKerucut) {
    $phi = 22/7;
    $volumeKerucut = 1/3 * $phi * ($jarijariKerucut ** 2) * $tinggiKerucut;
    echo $volumeKerucut;
}

?>


<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>tugas function PHP</title>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <style>
            body {
                font-family: verdana;
                text-align: justify;
            }
            .bangundatar {
                border-right: 1px solid silver;
            }
            footer {
                font-size: 14px;
            }
        </style>
    </head>
    <body>

        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">Website Informasi Rumus Matematika</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse d-flex" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown link
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                        </li>
                    </ul>
                </div>
            </div>
            </nav>
        <!-- akhir navbar -->

        <!-- main -->
        <div class="container p-4">
            <!-- header -->
            <div class="row">
                <div class="col">
                    <h1>Bangun Datar</h1>
                    <hr width="300px">
                </div>
                <div class="col">
                    <h1>Bangun Ruang</h1>
                    <hr width="300px">
                </div>
            </div>
            <!-- akhir header -->
            
            <!-- isi -->
            <div class="row">
                <!-- bangun datar -->
                <div class="col-md-6 bangundatar">
                    <ol>
                        <li>
                            <h4>Persegi</h4>
                            <p>rumus Luas = sisi x sisi</p>
                            <p>soal = Sebuah persegi memiliki ukuran sisi 5 cm. Hitunglah berapa luas persegi tersebut!</p>
                            <p>jawab <br> Luas Persegi = s x s = <?= persegi(5); ?> cm2</p>
                        </li>
                        <li>
                            <h4>Persegi Panjang</h4>
                            <p>rumus Luas = panjang x lebar</p>
                            <p>soal = Sebuah persegi panjang memiliki ukuran panjang 10 cm dan lebar 5 cm. Hitunglah berapa luas persegi panjang tersebut!</p>
                            <p>jawab <br> Luas Persegi Panjang = p x l = <?= persegiPanjang(10, 5); ?> cm2</p>
                        </li>
                        <li>
                            <h4>Segitiga</h4>
                            <p>rumus Luas = 1/2 x alas x tinggi</p>
                            <p>soal = Sebuah segitiga memiliki ukuran sisi alas 10 cm dan tinggi 7 cm. Jika ukuran sisi-sisi miringnya adalah 8 cm dan 9 cm, hitunglah berapa luas segitiga tersebut!</p>
                            <p>jawab <br> Luas Segitiga = 1/2 x a x t = <?= segitiga(10, 7); ?> cm2</p>
                        </li>
                        <li>
                            <h4>Lingkaran</h4>
                            <p>rumus Luas = phi x r pangkat 2</p>
                            <p>soal = Sebuah lingkaran memiliki ukuran jari-jari 7 cm. Hitunglah berapa luas lingkaran tersebut!</p>
                            <p>jawab <br> Luas Lingkaran = phi x r2 = <?= lingkaran(7); ?> cm2</p>
                        </li>
                        <li>
                            <h4>Layang-layang</h4>
                            <p>rumus Luas = 1/2 x diagonal 1 x diagonal 2</p>
                            <p>soal = Sebuah layang-layang memiliki ukuran diagonal1 10 cm dan diagonal2 20 cm. Hitunglah berapa luas layang-layang tersebut!</p>
                            <p>jawab <br> Luas Layang-layang = 1/2 x d1 x d2 = <?= layang(10, 20); ?> cm2</p>
                        </li>
                    </ol>
                </div>
                <!-- akhir bangun datar -->
                <!-- bangun ruang -->
                <div class="col-md-6">
                    <ol>
                        <li>
                            <h4>Kubus</h4>
                            <p>rumus Volume = rusuk pangkat 3</p>
                            <p>soal = Jika suatu kubus memiliki panjang rusuk 7 cm. Hitunglah volume kubus tersebut!</p>
                            <p>jawab <br> Volume Kubus = r3 = <?= kubus(7); ?> cm3</p>
                        </li>
                        <li>
                            <h4>Balok</h4>
                            <p>rumus Volume = panjang x lebar x tinggi</p>
                            <p>soal = Suatu balok memiliki panjang 10 cm, lebar 8 cm dan tinggi 6 cm. Hitunglah volume balok tersebut!</p>
                            <p>jawab <br> Volume Balok = p x l x t = <?= balok(10, 8, 6); ?> cm3</p>
                        </li>
                        <li>
                            <h4>Tabung</h4>
                            <p>rumus Volume = phi x r pangkat 2 x tinggi</p>
                            <p>soal = jika sebuah tabung memiliki jari-jari 14 cm dan tinggi 20 cm. Berapakah volume tabung tersebut?</p>
                            <p>jawab <br> Volume Tabung = phi x r2 x t = <?= tabung(14, 20); ?> cm3</p>
                        </li>
                        <li>
                            <h4>Kerucut</h4>
                            <p>rumus Volume = 1/3 x phi x r pangkat 2 x tinggi</p>
                            <p>soal = Hitunglah volume kerucut yang mempunyai jari-jari alas 7 cm dan tinggi 20 cm!</p>
                            <p>jawab <br> Volume Kerucut = 1/3 x phi x r2 x t = <?= kerucut(7, 20); ?> cm3</p>
                        </li>
                        <li>
                            <h4>Bola</h4>
                            <p>rumus Volume = 4/3 x phi x r pangkat 3</p>
                            <p>soal = Doni di beri sebuah bola oleh ayah nya yang memiliki jari – jari sebesar 14cm, maka carilah volume bola?</p>
                            <p>jawab <br> Volume Bola = 4/3 x phi x r3 = <?= bola(14); ?> cm3</p>
                        </li>
                    </ol>
                </div>
                <!-- akhir bangun ruang -->
            </div>
            <!-- akhir isi -->
        </div>
        <!-- akhir main -->


        <!-- footer -->
        <footer class="bg-dark text-light p-2">
            <p class="text-center mt-2">Tugas PHP - function Eduwork | Riki Widiantoro | <a href="https://github.com/rikiwidiantoro" target="_blank"><i class="fab fa-github"> rikiwidiantoro</i></a></p>
        </footer>

        <!-- Optional JavaScript; choose one of the two! -->
        
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        -->
    </body>
</html>
