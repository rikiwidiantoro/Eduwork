<?php

    $localhost = "localhost";
    $username = "root";
    $password = "";
    $db_name = "nana_art";

    $koneksi = mysqli_connect($localhost, $username, $password, $db_name);

    // function upload gambar gerabah
    function uploadGambarGerabah() {
        $namaFile = $_FILES['gambar']['name'];
        $ukuranFile = $_FILES['gambar']['size'];
        $error = $_FILES['gambar']['error'];
        $tmpName = $_FILES['gambar']['tmp_name'];

        // cek apakah tidak ada gambar yang di upload
        if( $error === 4 ) {
            echo "
                <script>
                    alert('pilih gambar terlebih dahulu!');
                </script>
            ";
            return false;
        }

        // cek yg diupload apakah gambar atau bukan
        $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
        $ekstensiGambar = explode('.', $namaFile);
        $ekstensiGambarr = strtolower(end($ekstensiGambar));

        if( !in_array($ekstensiGambarr, $ekstensiGambarValid) ) {
            echo "
                <script>
                    alert('yang Anda upload bukan gambar!');
                </script>
            ";
        }

        // cek jika ukuran gambar terlalu besar
        if( $ukuranFile > 1000000 ) {
            echo "
                <script>
                    alert('ukuran gambar terlalu besar!');
                </script>
            ";
        }

        // lolos pengecekan, gambar siap diupload & generate nama gambar baru
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiGambarr;

        move_uploaded_file($tmpName, 'asset-foto/gerabah/' . $namaFileBaru);
        return $namaFileBaru;

    }
    // function upload gambar tas anyam
    function uploadGambarTas() {
        $namaFile = $_FILES['gambar']['name'];
        $ukuranFile = $_FILES['gambar']['size'];
        $error = $_FILES['gambar']['error'];
        $tmpName = $_FILES['gambar']['tmp_name'];

        // cek apakah tidak ada gambar yang di upload
        if( $error === 4 ) {
            echo "
                <script>
                    alert('pilih gambar terlebih dahulu!');
                </script>
            ";
            return false;
        }

        // cek yg diupload apakah gambar atau bukan
        $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
        $ekstensiGambar = explode('.', $namaFile);
        $ekstensiGambarr = strtolower(end($ekstensiGambar));

        if( !in_array($ekstensiGambarr, $ekstensiGambarValid) ) {
            echo "
                <script>
                    alert('yang Anda upload bukan gambar!');
                </script>
            ";
        }

        // cek jika ukuran gambar terlalu besar
        if( $ukuranFile > 1000000 ) {
            echo "
                <script>
                    alert('ukuran gambar terlalu besar!');
                </script>
            ";
        }

        // lolos pengecekan, gambar siap diupload & generate nama gambar baru
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiGambarr;

        move_uploaded_file($tmpName, 'asset-foto/tas/' . $namaFileBaru);
        return $namaFileBaru;

    }
?>