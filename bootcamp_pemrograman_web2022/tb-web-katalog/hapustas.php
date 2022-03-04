<?php
    include_once('koneksi.php');

    // mengambil id data
    $id = $_GET['id'];

    // query hapus data
    $hapus = mysqli_query($koneksi, "DELETE FROM tas_anyam WHERE id_tas='$id';");

    // alert jika data tas berhasil dihapus lalu di re direct ke halaman utama
    if( $hapus > 0 ) {
        echo "
            <script>
                alert('Data Tas Anyam berhasil dihapus!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data Tas Anyam gagal dihapus!');
                document.location.href = 'index.php';
            </script>
        ";
    }

?>