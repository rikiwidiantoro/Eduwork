<?php
    include_once('koneksi.php');

    // query data
    $id = $_GET['id'];
    $tampil = mysqli_query($koneksi, "SELECT * FROM gerabah WHERE id_gerabah = '$id';");

    // looping query data
    while( $data_gerabah = mysqli_fetch_array($tampil) ) {
        $nama = $data_gerabah['nama'];
        $gambar = $data_gerabah['gambar'];
        $bahan = $data_gerabah['bahan'];
        $ukuran = $data_gerabah['ukuran'];
        $berat = $data_gerabah['berat'];
        $harga_grosir = $data_gerabah['harga_grosir'];
        $harga_konsumen = $data_gerabah['harga_konsumen'];
    }

    // mengambil data form yg baru di edit
    if( isset($_POST['submit']) ) {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $bahan = $_POST['bahan'];
        $ukuran = $_POST['ukuran'];
        $berat = $_POST['berat'];
        $harga_grosir = $_POST['harga_grosir'];
        $harga_konsumen = $_POST['harga_konsumen'];
        $gambar = $_POST['gambar'];

        // mengirim data ke database
        $editgerabah = mysqli_query($koneksi, "UPDATE gerabah SET gambar = '$gambar', nama = '$nama', bahan = '$bahan', ukuran = '$ukuran', berat = '$berat', harga_grosir = '$harga_grosir', harga_konsumen = '$harga_konsumen' WHERE id_gerabah = '$id';");

        // alert dan re direct
        // walaupun ada bug tampilan setelah alert di klik ok
        echo "<script>alert('Data Gerabah berhasil diubah!'); document.location.href = 'index.php';</script>";
        // header('Location: index.php');
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

        <title>edit data</title>
    </head>
    <body>
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h1>Edit Data Gerabah</h1>
                    <hr width="500" style="margin:20px auto; height:1.5px;">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 offset-3">
                    <form action="editgerabah.php" method="post">

                        <table  class="table-bordered" cellpadding="8" width="100%">
                            <tr>
                                <td>ID</td>
                                <td>
                                    <input type="text" class="form-control" name="id" readonly="" value="<?= $id ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <td>
                                    <input type="text" class="form-control" name="nama" value="<?= $nama ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>Bahan</td>
                                <td>
                                    <input type="text" class="form-control" name="bahan" value="<?= $bahan ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>Ukuran</td>
                                <td>
                                    <input type="text" class="form-control" name="ukuran" value="<?= $ukuran ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>Berat</td>
                                <td>
                                    <input type="text" class="form-control" name="berat" value="<?= $berat ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>Harga Grosir</td>
                                <td>
                                    <input type="number" class="form-control" name="harga_grosir" value="<?= $harga_grosir ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>Harga Konsumen</td>
                                <td>
                                    <input type="number" class="form-control" name="harga_konsumen" value="<?= $harga_konsumen ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>Gambar</td>
                                <td>
                                    <input type="text" class="form-control" name="gambar" placeholder="contoh: gambar.jpg" value="<?= $gambar ?>">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                <input type="submit" name="submit" class="form-control btn btn-info" value="Edit Data Gerabah">
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>



        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></>

    </body>
</html>
