<?php
    include_once('koneksi.php');

    // mengambil data form
    if( isset($_POST['submit']) ) {
        $nama = $_POST['nama'];
        $bahan = $_POST['bahan'];
        $warna = $_POST['warna'];
        $ukuran = $_POST['ukuran'];
        $berat = $_POST['berat'];
        $harga_reseller = $_POST['harga_reseller'];
        $harga_konsumen = $_POST['harga_konsumen'];
        // $gambar = $_POST['gambar'];

        // upload gambar
        $gambar = uploadGambarTas();
        if( !$gambar ) {
            return false;
        }

        // mengirim data ke database
        $tambahtas = mysqli_query($koneksi, "INSERT INTO `tas_anyam`(`id_tas`, `gambar`, `nama`, `bahan`, `warna`, `ukuran`, `berat`, `harga_reseller`, `harga_konsumen`) VALUES('', '$gambar', '$nama', '$warna', '$bahan', '$ukuran', '$berat', '$harga_reseller', '$harga_konsumen');");

        // alert dan re direct
        echo "<script>alert('Data Tas Anyam berhasil ditambahkan!'); document.location.href = 'index.php';</script>";
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

        <title>tambah data</title>
    </head>
    <body>
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h1>Tambah Data Tas Anyam</h1>
                    <hr width="500" style="margin:20px auto; height:1.5px;">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 offset-3">
                    <form action="tambahtas.php" method="post" enctype="multipart/form-data">

                        <table  class="table-bordered" cellpadding="8" width="100%">
                            <tr>
                                <td>Nama</td>
                                <td>
                                    <input type="text" class="form-control" name="nama">
                                </td>
                            </tr>
                            <tr>
                                <td>Bahan</td>
                                <td>
                                    <input type="text" class="form-control" name="bahan">
                                </td>
                            </tr>
                            <tr>
                                <td>Warna</td>
                                <td>
                                    <input type="text" class="form-control" name="warna">
                                </td>
                            </tr>
                            <tr>
                                <td>Ukuran</td>
                                <td>
                                    <input type="text" class="form-control" name="ukuran">
                                </td>
                            </tr>
                            <tr>
                                <td>Berat</td>
                                <td>
                                    <input type="text" class="form-control" name="berat">
                                </td>
                            </tr>
                            <tr>
                                <td>Harga Reseller</td>
                                <td>
                                    <input type="number" class="form-control" name="harga_reseller">
                                </td>
                            </tr>
                            <tr>
                                <td>Harga Konsumen</td>
                                <td>
                                    <input type="number" class="form-control" name="harga_konsumen">
                                </td>
                            </tr>
                            <tr>
                                <td>Gambar</td>
                                <td>
                                    <input type="file" class="form-control" name="gambar">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                <input type="submit" name="submit" class="form-control btn btn-info" value="Tambah Data Tas Anyam">
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
