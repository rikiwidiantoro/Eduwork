<?php

    include_once('koneksi.php');

    $komiks = mysqli_query($koneksi, "SELECT * FROM komik");

?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>tugas CRUD web dinamis</title>
        <!-- data tables -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
        <!-- font awesome -->
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    </head>
    <body>
        <div class="container">
            <!-- header -->
            <div class="row">
                <div class="col text-center my-4">
                    <h3>Perpustakaan Komik</h3>
                    <hr width="500" style="margin:20px auto; height:1.5px;">
                </div>
            </div>
            <!-- akhir header -->

            <!-- tambah data -->
            <div class="row">
                <div class="col offset-1 pb-3">
                    <a href="tambah.php" class="btn btn-secondary">Tambah Data</a>
                </div>
            </div>

            <!-- tabel -->
            <div class="row">
                <div class="col-md-10 offset-1">
                    <table id="tabel" class="display" style="width:100%">
                        <tr class="text-center">
                            <td>ID</td>
                            <td>Judul</td>
                            <td>Genre</td>
                            <td>Tahun</td>
                            <td>Aksi</td>
                        </tr>
                        <?php
                            foreach($komiks as $komik) {
                                echo "
                                    <tr>
                                        <td>". $komik['id_komik'] ."</td>
                                        <td>". $komik['judul'] ."</td>
                                        <td>". $komik['genre'] ."</td>
                                        <td>". $komik['tahun'] ."</td>
                                        <td>
                                            <a href='edit.php?id=".$komik['id_komik']."' class='btn btn-warning'>Edit</a>
                                            <a href='hapus.php?id=".$komik['id_komik']."' class='btn btn-danger'>Hapus</a>
                                        </td>
                                    </tr>
                                ";
                            }
                        ?>
                    </table>
                </div>
            </div>
            <!-- akhir tabel -->
        </div>
    

        <!-- footer -->
        <br><br><hr>
        <footer class="py-2 text-center">
            <p>Tugas CRUD Web Dinamis Eduwork | Riki Widiantoro | <a href="https://github.com/rikiwidiantoro" target="_blank"><i class="fab fa-github"> rikiwidiantoro</i></a></p>
        </footer>
        <!-- akhir footer -->


        <!-- jquery cdn -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <!-- data table cdn -->
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function() {
                $('#tabel').DataTable();
            });
        </script>
    </body>
</html>
