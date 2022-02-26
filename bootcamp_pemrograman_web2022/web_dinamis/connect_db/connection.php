<?php

// variabel koneksi
$localhost = "localhost";
$username = "root";
$password = "";
$database_name = "db_perpus_komik";

// membuat koneksi
$koneksi = new mysqli($localhost, $username, $password, $database_name);

// menampilkan data dari database
$sql = "SELECT * FROM komik";
$result = $koneksi->query($sql);

if( $result->num_rows > 0 ) {
    while($row = $result->fetch_assoc()) {
        echo "Komik: " . $row['judul'] . "<br> Genre: " . $row['genre'] . "<br><br>";
    }
} else {
    echo "0 result";
}

$koneksi->close();


?>