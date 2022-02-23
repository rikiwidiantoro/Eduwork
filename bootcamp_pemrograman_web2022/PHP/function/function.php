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
        <div class="container">
            <!-- bangun datar -->

            <!-- header -->
            <div class="row">
                <div class="col">
                    <h1>Bangun Datar</h1>
                    <hr width="300px">
                </div>
            </div>
            <!-- akhir header -->

            <!-- isi -->
            <div class="row">
                <div class="col">
                    <h5>Persegi</h5>

                </div>
            </div>
            <!-- akhir isi -->
            
            <!-- akhir bangun datar -->
        
        </div>
        <!-- akhir main -->


<div class="container">

<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium quia qui minima quas! Eos pariatur provident assumenda minus ipsa? Ducimus voluptas aliquam modi, odio qui blanditiis quam ratione, doloribus perspiciatis tenetur laudantium exercitationem illum! Officiis deserunt, repellat modi tempora iure at cumque incidunt aliquam nostrum, repudiandae distinctio soluta ducimus. Odit corrupti minima consectetur illo. Consequuntur ut voluptatem asperiores totam perspiciatis assumenda aspernatur debitis, quam iure! Neque culpa quo deleniti ullam expedita provident, dolorem quas, repudiandae, ab necessitatibus atque voluptate? Laboriosam illo nisi incidunt quia ex illum, fuga numquam possimus omnis quam voluptatem hic consequatur accusamus quae eius corporis explicabo inventore.</p>
</div>







        <!-- footer -->
        <footer class="bg-dark text-light p-2">
            <p class="text-center mt-2">Tugas PHP - operator Eduwork | Riki Widiantoro | <a href="https://github.com/rikiwidiantoro" target="_blank"><i class="fab fa-github"> rikiwidiantoro</i></a></p>
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


<?php

function persegi($sisiPersegi) {
    // $sisiPersegi = 5;
    $luasPersegi = $sisiPersegi * $sisiPersegi;
    echo $luasPersegi;
}
persegi(10);
echo "<br>";

function persegiPanjang($panjangPersegiPanjang, $lebarPersegiPanjang) {
    // $panjangPersegiPanjang = 10;
    // $lebarPersegiPanjang = 5;
    $luasPersegiPanjang = $panjangPersegiPanjang * $lebarPersegiPanjang;
    echo $luasPersegiPanjang;
}
persegiPanjang(10,7);
echo "<br>";

function segitiga($alasSegitiga, $tinggiSegitiga) {
    $luasSegitiga = 1/2 * $alasSegitiga * $tinggiSegitiga;
    echo $luasSegitiga;
}
segitiga(10,7);
echo "<br>";

function lingkaran($jarijariLingkaran) {
    $phi = 22/7;
    $luasLingkaran = $phi * $jarijariLingkaran ** 2;
    echo $luasLingkaran;
}
lingkaran(7);
echo "<br>";

function layang($diagonal1, $diagonal2) {
    $luasLayang = 1/2 * $diagonal1 * $diagonal2;
    echo $luasLayang;
}
layang(10, 20);
echo "<br>";





?>