<?php

    // mendeklarasikan variabel untuk koneksi ke database
    $localhost = "localhost";
    $username = "root";
    $password = "";
    $database_name = "perpus";

    // membuat koneksi
    $koneksi = new mysqli($localhost, $username, $password, $database_name);

    // cek koneksi
    // if( !$koneksi ) {
    //     echo(mysqli_connect_error());
    // } else {
    //     echo 'Koneksi berhasil!';
    // }

    // menampilkan data dari database
    $sql = "SELECt * FROM buku";
    $result = $koneksi->query($sql);

    if( $result->num_rows > 0 ) {
        while($row = $result->fetch_assoc()) {
            echo "Buku: " . $row['isbn'] . ", judul: " . $row['judul'] . "<br>";
        }
    } else {
        echo "0 result";
    }

    $koneksi->close();

?>