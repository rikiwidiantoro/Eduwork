<?php
    include_once('koneksi.php');
    $data_katalog = mysqli_query($koneksi, "SELECT * FROM katalog");
    $data_penerbit = mysqli_query($koneksi, "SELECT * FROM penerbit");
    $data_pengarang = mysqli_query($koneksi, "SELECT * FROM pengarang");

    if( isset($_POST['submit']) ) {
        $isbn = $_POST['isbn'];
        $judul = $_POST['judul'];
        $tahun = $_POST['tahun'];
        $katalog = $_POST['katalog'];
        $penerbit = $_POST['penerbit'];
        $pengarang = $_POST['pengarang'];
        $stok = $_POST['qty_stok'];
        $harga_pinjam = $_POST['harga_pinjam'];

        $tambah = mysqli_query($koneksi, "INSERT INTO `buku`(`isbn`, `judul`, `tahun`, `id_penerbit`, `id_pengarang`, `id_katalog`, `qty_stok`, `harga_pinjam`) VALUES('$isbn', '$judul', '$tahun', '$penerbit', '$pengarang', '$katalog', '$stok', '$harga_pinjam');");

        // re direct ke halaman utama
        header('Location: index.php');
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

        <title>Tambah Buku</title>
    </head>
    <body>

        <div class="container">
            <div class="row text-center m-4">
                <div class="col-md-12">
                    <h3>Tambah Buku</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 offset-2">
                    <form action="tambah.php" method="post" name="formtambah">
                        <table class="table-bordered" width="100%" cellpadding="10">
                            <tr>
                                <td>ISBN</td>
                                <td><input type="text" class="form-control" name="isbn"></td>
                            </tr>
                            <tr>
                                <td>Judul</td>
                                <td><input type="text" class="form-control" name="judul"></td>
                            </tr>
                            <tr>
                                <td>Tahun</td>
                                <td><input type="text" class="form-control" name="tahun"></td>
                            </tr>
                            <tr>
                                <td>Katalog</td>
                                <td>
                                    <select name="katalog" class="form-control">
                                        <?php
                                            while( $katalog = mysqli_fetch_array($data_katalog) ) {
                                                echo "
                                                    <option value=". $katalog['id_katalog'] .">". $katalog['nama'] ."</option>
                                                ";
                                            }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Penerbit</td>
                                <td>
                                    <select name="penerbit" class="form-control">
                                        <?php
                                            while( $penerbit = mysqli_fetch_array($data_penerbit) ) {
                                                echo "
                                                    <option value=". $penerbit['id_penerbit'] .">". $penerbit['nama_penerbit'] ."</option>
                                                ";
                                            }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Pengarang</td>
                                <td>
                                    <select name="pengarang" class="form-control">
                                        <?php
                                            while( $pengarang = mysqli_fetch_array($data_pengarang) ) {
                                                echo "
                                                    <option value=". $pengarang['id_pengarang'] .">". $pengarang['nama_pengarang'] ."</option>
                                                ";
                                            }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Stok</td>
                                <td><input type="text" class="form-control" name="qty_stok"></td>
                            </tr>
                            <tr>
                                <td>Harga Pinjam</td>
                                <td><input type="text" class="form-control" name="harga_pinjam"></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type="submit" class="form-control btn btn-primary" name="submit" value="Tambah">
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
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
