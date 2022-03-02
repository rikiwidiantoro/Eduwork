<?php
    include_once('koneksi.php');

    // mengambil id data
    $id = $_GET['id'];

    // query hapus data
    $hapus = mysqli_query($koneksi, "DELETE FROM gerabah WHERE id_gerabah='$id';");

    // alert jika data gerabah berhasil dihapus lalu di re direct ke halaman utama
    if( $hapus > 0 ) {
        echo "
            <script>
                alert('Data Gerabah berhasil dihapus!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data Gerabah gagal dihapus!');
                document.location.href = 'index.php';
            </script>
        ";
    }

?>