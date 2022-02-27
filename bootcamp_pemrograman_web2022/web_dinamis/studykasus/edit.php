<?php
    include_once('koneksi.php');
    $data_katalog = mysqli_query($koneksi, "SELECT * FROM katalog");
    $data_penerbit = mysqli_query($koneksi, "SELECT * FROM penerbit");
    $data_pengarang = mysqli_query($koneksi, "SELECT * FROM pengarang");

    $isbn = $_GET['isbn'];
    $buku = mysqli_query($koneksi, "SELECT * FROM buku WHERE isbn='$isbn';");

    while( $data_buku = mysqli_fetch_array($buku) ) {
        $judul = $data_buku['judul'];
        $tahun = $data_buku['tahun'];
        $penerbitt = $data_buku['id_penerbit'];
        $pengarangg = $data_buku['id_pengarang'];
        $katalogg = $data_buku['id_katalog'];
        $stok = $data_buku['qty_stok'];
        $harga_pinjam = $data_buku['harga_pinjam'];
    }

    if( isset($_POST['submit']) ) {
        $isbn = $_POST['isbn'];
        $judul = $_POST['judul'];
        $tahun = $_POST['tahun'];
        $katalog = $_POST['katalog'];
        $penerbit = $_POST['penerbit'];
        $pengarang = $_POST['pengarang'];
        $stok = $_POST['qty_stok'];
        $harga_pinjam = $_POST['harga_pinjam'];

        $edit = mysqli_query($koneksi, "UPDATE buku SET judul = '$judul', tahun = '$tahun', id_penerbit = '$penerbit', id_pengarang = '$pengarang', id_katalog = '$katalog', qty_stok = '$stok', harga_pinjam = '$harga_pinjam' WHERE isbn = '$isbn';");

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

        <title>Edit Buku</title>
    </head>
    <body>

        <div class="container">
            <div class="row text-center m-4">
                <div class="col-md-12">
                    <h3>Edit Buku</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 offset-2">
                    <form action="edit.php?isbn=<?= $isbn; ?>" method="post" name="formedit">
                        <table class="table-bordered" width="100%" cellpadding="10">
                            <tr>
                                <td>ISBN</td>
                                <td><input type="text" readonly="" class="form-control" name="isbn" value="<?= $isbn ?>"></td>
                            </tr>
                            <tr>
                                <td>Judul</td>
                                <td><input type="text" class="form-control" name="judul" value="<?= $judul ?>"></td>
                            </tr>
                            <tr>
                                <td>Tahun</td>
                                <td><input type="text" class="form-control" name="tahun" value="<?= $tahun ?>"></td>
                            </tr>
                            <tr>
                                <td>Katalog</td>
                                <td>
                                    <select name="katalog" class="form-control">
                                        <?php
                                            while( $katalog = mysqli_fetch_array($data_katalog) ) {
                                                echo "
                                                    <option ". ($katalog['id_katalog'] == $katalogg ? 'selected' : '') ." value=". $katalog['id_katalog'] .">". $katalog['nama'] ."</option>
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
                                                    <option ". ($penerbit['id_penerbit'] == $penerbitt ? 'selected' : '') ." value=". $penerbit['id_penerbit'] .">". $penerbit['nama_penerbit'] ."</option>
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
                                                    <option ". ($pengarang['id_pengarang'] == $pengarangg ? 'selected' : '') ." value=". $pengarang['id_pengarang'] .">". $pengarang['nama_pengarang'] ."</option>
                                                ";
                                            }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Stok</td>
                                <td><input type="text" class="form-control" name="qty_stok" value="<?= $stok ?>"></td>
                            </tr>
                            <tr>
                                <td>Harga Pinjam</td>
                                <td><input type="text" class="form-control" name="harga_pinjam" value="<?= $harga_pinjam ?>"></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type="submit" class="form-control btn btn-primary" name="submit" value="Edit Data Buku">
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

<?php
    
?>