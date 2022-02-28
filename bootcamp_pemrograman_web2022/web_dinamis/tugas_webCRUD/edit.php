<?php
    include_once('koneksi.php');

    // query data
    $id = $_GET['id'];
    $tampil_komik = mysqli_query($koneksi, "SELECT * FROM komik WHERE id_komik='$id';");

    // pengulangan query data
    while( $data_komik = mysqli_fetch_array($tampil_komik) ) {
        $judul = $data_komik['judul'];
        $genre = $data_komik['genre'];
        $tahun = $data_komik['tahun'];
    }

    // mengambil data yg baru di edit
    if( isset($_POST['submit']) ) {
        $id = $_POST['id'];
        $judul = $_POST['judul'];
        $genre = $_POST['genre'];
        $tahun = $_POST['tahun'];

        // query edit data
        $edit = mysqli_query($koneksi, "UPDATE komik SET judul = '$judul', genre = '$genre', tahun = '$tahun' WHERE id_komik = '$id';");

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

        <title>Edit Data</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col text-center my-4">
                    <h3>Edit Data</h3>
                    <hr width="500" style="margin:20px auto; height:1.5px;">
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 offset-2">
                    <form action="edit.php" method="post">
                        <table class="table-bordered" cellpadding="8" width="100%">
                            <tr>
                                <td>ID</td>
                                <td><input type="text" class="form-control" name="id" readonly="" value="<?= $id ?>"></td>
                            </tr>
                            <tr>
                                <td>Judul</td>
                                <td><input type="text" class="form-control" name="judul" value="<?= $judul ?>"></td>
                            </tr>
                            <tr>
                                <td>Genre</td>
                                <td><input type="text" class="form-control" name="genre" value="<?= $genre ?>"></td>
                            </tr>
                            <tr>
                                <td>Tahun</td>
                                <td><input type="number" class="form-control" name="tahun" value="<?= $tahun ?>"></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type="submit" name="submit" class="form-control btn btn-secondary" value="Edit Data Komik">
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
