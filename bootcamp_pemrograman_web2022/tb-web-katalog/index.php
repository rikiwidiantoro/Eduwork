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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

        <style>
            body {
                background-color: #f8efed;
            }
            .navbar a {
                color: white;
            }
            .navbar .active {
                color: #004da9;
            }
            .tambah:hover {
                color: white;
            }
            .navbar .container h4 {
                display: inline;
                position: absolute;
                top: 17px;
            }
            .card {
                box-shadow: -2px -1px 10px 2px rgba(0,0,0,0.35);
            }
            .card-body {
                font-size: 13px;
            }
            .card-body a {
                font-size: 14px;
                padding: 6px 30px;
                margin: 1px 5px;
            }
            .footer .row .col {
                color: #f8efed;
            }
            .footer ul {
                list-style-type: none;
                padding: 0;
            }
            .footer ul li i {
                margin-right: 5px;
            }
        </style>

    </head>
    <body>
        <!-- awal navbar -->
        <nav class="navbar fixed-top navbar-light bg-info">
            <div class="container">
                <div class="col-md-5">
                    <a class="navbar-brand" href="#">
                        <img src="asset-foto/nana-art.png" alt="nana_art" width="50" class="d-inline-block align-text-top">
                    </a>
                    <h4>NANA ART</h4>
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
                    <a href="tambahgerabah.php" class="btn btn-info px-3 tambah">Tambah Data</a>
                </div>
            </div>
            <div class="row">
                <?php
                    foreach($gerabahs as $gerabah) {
                        echo "
                            <div class='col-md-4'>
                                <div class='card mb-3' style='max-width: 540px;'>
                                    <div class='row g-0'>
                                        <div class='col-md-4 mt-5'>
                                            <img src='asset-foto/gerabah/". $gerabah['gambar'] ."' class='img-fluid rounded-start' alt='...'>
                                        </div>
                                        <div class='col-md-8'>
                                            <div class='card-body'>
                                                <h5 class='card-title'><u>Deskripsi Gerabah</u></h5>
                                                <table>
                                                    <tr>
                                                        <td>Nama</td>
                                                        <td>:</td>
                                                        <td>". $gerabah['nama'] ."</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bahan</td>
                                                        <td>:</td>
                                                        <td>". $gerabah['bahan'] ."</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Ukuran</td>
                                                        <td>:</td>
                                                        <td>". $gerabah['ukuran'] ."</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Berat</td>
                                                        <td>:</td>
                                                        <td>". $gerabah['berat'] ."</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Harga <br> Grosir</td>
                                                        <td>:</td>
                                                        <td>Rp.". $gerabah['harga_grosir'] ."</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Harga <br> Konsumen</td>
                                                        <td>:</td>
                                                        <td>Rp.". $gerabah['harga_konsumen'] ."</td>
                                                    </tr>
                                                </table>
                                                <div class='mt-2'>
                                                    <a href='editgerabah.php?id=".$gerabah['id_gerabah']."' class='btn btn-warning'>Edit</a>
                                                    <a href='hapusgerabah.php?id=".$gerabah['id_gerabah']."' class='btn btn-danger'>Hapus</a>
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
        <div class="container-fluid bg-info footer">
            <div class="container pt-5">
                <div class="row">
                    <div class="col offset-1">
                        <h2>NANA ART</h2>
                        <h5>Aneka Gerabah Tanah Liat & <br> Tas Anyam</h5>
                    </div>
                    <div class="col">
                        <h5>Alamat</h5>
                        <p>Sambirobyong RT 01/RW 02, Desa Plancungan,<br> Kecamatan Slahung, Ponorogo,<br> Jawa Timur, Indonesia</p>
                    </div>
                    <div class="col">
                        <h5>Kontak</h5>
                        <ul>
                            <li><i class="fas fa-phone"></i> 0852-3281-0942</li>
                            <li><i class="fa fa-whatsapp"></i> 0852-3281-0942</li>
                            <li><i class="fa fa-envelope" aria-hidden="true"></i> nanaridawati@gmail.com</li>
                            <li><i class="fab fa-instagram"></i> @nana_grabah_ponorogo</li>
                        </ul>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col">
                        <footer class="text-center">
                            <p>&copy; 2022 Riki Widiantoro | Tugas Besar Eduwork - Website Katalog | <a href="https://github.com/rikiwidiantoro" target="_blank"><i class="fab fa-github"> rikiwidiantoro</i></a></p>
                        </footer>
                    </div>
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
