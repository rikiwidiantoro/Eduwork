<?php
    include_once('koneksi.php');

    $gerabahs = mysqli_query($koneksi, "SELECT * FROM gerabah");
    // $tass = mysqli_query($koneksi, "SELECT * FROM tas_anyam");
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>katalog nana art</title>

        <!-- font awesome -->
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

        <style>
            .navbar a {
                color: white;
            }
            .navbar .active {
                color: #004da9;
            }
            .tambah:hover {
                color: white;
            }
        </style>

    </head>
    <body>
        <!-- awal navbar -->
        <nav class="navbar fixed-top navbar-light bg-info">
            <div class="container">
                <div class="col-md-5">
                    <a class="navbar-brand" href="#">
                    <!-- <img src="/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top"> -->
                    NANA ART
                    </a>
                </div>
                <div class="col-md-5 pb-2">
                    <ul class="nav justify-content-end">
                        <li class="nav-item px-3">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link" href="#">Gerabah</a>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link" href="#">Tas Anyam</a>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link" href="#">Tentang Kami</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- akhir navbar -->


        <!-- awal isi -->
        <br><br>
        <div class="container my-5">
            <div class="row">
                <div class="col-md-3">
                    <h4>Aneka Gerabah Tanah Liat</h4>
                    <hr width="287px">
                </div>
                <div class="col-md-9">
                    <a href="" class="btn btn-info px-3 tambah">Tambah Data</a>
                </div>
            </div>
            <div class="row">
                <?php
                    foreach($gerabahs as $gerabah) {
                        echo "
                            <div class='col-md-4'>
                                <div class='card mb-3' style='max-width: 540px;'>
                                    <div class='row g-0'>
                                        <div class='col-md-4'>
                                            <img src='asset-foto/gerabah/". $gerabah['gambar'] ."' class='img-fluid rounded-start' alt='...'>
                                        </div>
                                        <div class='col-md-8'>
                                            <div class='card-body'>
                                                <h5 class='card-title'>Deskripsi Gerabah</h5>
                                                <ul>
                                                    <li>Nama : ". $gerabah['nama'] ."</li>
                                                    <li>Bahan : ". $gerabah['bahan'] ."</li>
                                                    <li>Ukuran : ". $gerabah['ukuran'] ."</li>
                                                    <li>Berat : ". $gerabah['berat'] ."</li>
                                                    <li>Harga Grosir : Rp.". $gerabah['harga_grosir'] ."</li>
                                                    <li>Harga Konsumen : Rp.". $gerabah['harga_konsumen'] ."</li>
                                                </ul>
                                                <div>
                                                    <a href='' class='btn btn-warning px-4'>Edit</a>
                                                    <a href='' class='btn btn-danger px-4'>Hapus</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ";
                    }
                ?>
                
            </div>
        </div>
        <!-- akhir isi -->


        <!-- awal tentang kami -->
        <div class="container text-center">
            <div class="row">
                <div class="col-md-6 offset-3">
                    <h4>Tentang Kami</h4>
                    <hr width="200px" style="margin: auto;">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-6 offset-3">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Soluta ipsa quam totam nostrum nihil vitae dolorum tenetur dolores inventore quos cupiditate possimus eos unde rem, ipsam, accusantium fugiat iusto laborum illo consequuntur earum. Dignissimos deserunt recusandae magni nostrum animi, eos perspiciatis, repellendus soluta, omnis odio voluptates maiores error amet porro.</p>
                </div>
            </div>
        </div>
        <!-- akhir tentang kami -->


        <!-- awal footer -->
        <div class="container-fluid bg-info">
            <div class="row">
                <div class="col">
                    <h3>NANA ART</h3>
                    <h5>Aneka Gerabah Tanah Liat & <br> Tas Anyam</h5>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <footer class="text-center">
                        <p>&copy; 2022 Riki Widiantoro | Tugas Besar Eduwork - Website Katalog | <a href="https://github.com/rikiwidiantoro" target="_blank"><i class="fab fa-github"> rikiwidiantoro</i></a></p>
                    </footer>
                </div>
            </div>
        </div>
        <!-- akhir footer -->



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
