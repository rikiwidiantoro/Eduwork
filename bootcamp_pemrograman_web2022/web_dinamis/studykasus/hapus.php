<?php

include_once('koneksi.php');

$isbn = $_GET['isbn'];

$hapus = mysqli_query($koneksi, "DELETE FROM buku WHERE isbn='$isbn';");
// header('Location: index.php');
if($hapus > 0) {
    echo "<script>
        alert('Data buku berhasil dihapus!');
        document.location.href = 'index.php';
    </script>";
} else {
    echo "<script>
        alert('Data buku gagal dihapus!');
        document.location.href = 'index.php';
    </script>";
}


?>