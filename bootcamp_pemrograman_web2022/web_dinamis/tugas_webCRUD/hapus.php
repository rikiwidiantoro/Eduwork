<?php
    include_once('koneksi.php');

    // mengambil id data
    $id = $_GET['id'];

    // query hapus data
    $hapus = mysqli_query($koneksi, "DELETE FROM komik WHERE id_komik='$id';");

    // alert jika data komik berhasil dihapus lalu di re direct ke halaman utama
    if( $hapus > 0 ) {
        echo "
            <script>
                alert('Data Komik berhasil dihapus!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data Komik gagal dihapus!');
                document.location.href = 'index.php';
            </script>
        ";
    }

?>