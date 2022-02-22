<?php

function tampilkan_nama($nama = 'Tuan', $umur = 23) {
    echo "Nama saya $nama dan saya berumur $umur";
}

tampilkan_nama('Riki Widiantoro', 30);

echo "<br><br>";

function penjumlahan($angka1, $angka2) {
    $hasil = $angka1 + $angka2;
    echo "$angka1 + $angka2 = $hasil";
}

penjumlahan(2,3);

?>