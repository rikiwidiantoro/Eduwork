<?php
    include_once('koneksi.php');
    $books = mysqli_query($koneksi, "SELECT buku.*, katalog.nama as nama_katalog, penerbit.nama_penerbit as nama_penerbit, pengarang.nama_pengarang as nama_pengarang FROM buku
                            LEFT JOIN katalog ON buku.id_katalog = katalog.id_katalog
                            LEFT JOIN penerbit ON buku.id_penerbit = penerbit.id_penerbit
                            LEFT JOIN pengarang ON buku.id_pengarang = pengarang.id_pengarang
    ");

?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>study kasus web dinamis</title>
    </head>
    <body>

        <div class="container">

            <!-- link pindah UI -->
            <div class="row m-4">
                <div class="col-md-2 offset-2">
                    <h5><a href="">Buku</a></h5>
                </div>
                <div class="col-md-2">
                    <h5><a href="">Katalog</a></h5>
                </div>
                <div class="col-md-2">
                    <h5><a href="">Penerbit</a></h5>
                </div>
                <div class="col-md-2">
                    <h5><a href="">Pengarang</a></h5>
                </div>
            </div>
            <!-- akhir link pindah UI -->

            <!-- tabel -->
            <div class="row">
                <div class="col">
                    <table class="table">
                        <thead>
                            <tr>
                                <td>ISBN</td>
                                <td>Judul</td>
                                <td>Tahun</td>
                                <td>Katalog</td>
                                <td>Penerbit</td>
                                <td>Pengarang</td>
                                <td>Stok</td>
                                <td>Harga Pinjam</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach($books as $book) {
                                    echo "
                                        <tr>
                                            <td>". $book['isbn']."</td>
                                            <td>". $book['judul']."</td>
                                            <td>".$book['tahun']."</td>
                                            <td>".$book['nama_katalog']."</td>
                                            <td>".$book['nama_penerbit']."</td>
                                            <td>".$book['nama_pengarang']."</td>
                                            <td>".$book['qty_stok']."</td>
                                            <td>".$book['harga_pinjam']."</td>
                                        </tr>
                                    ";
                                }
                            ?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- akhir tabel -->

        </div>





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
