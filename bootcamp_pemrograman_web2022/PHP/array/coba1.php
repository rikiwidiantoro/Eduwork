<?php

// array dimulai dari angka 0
$buah = ['semangka', 'jeruk', 'apel', 'nanas'];

echo $buah[0];
echo "<br><br>";


// array dengan string
$motor['Honda'] = "Beat";
$motor['Yamaha'] = "Vixion";
$motor['Kawasaki'] = "Ninja";
$motor['Suzuki'] = "Smash";

echo $motor['Yamaha'];
echo "<br><br>";


// looping for array
// Fungsi count() mengembalikan jumlah elemen dalam sebuah array.
for( $i=0; $i<count($buah); $i++ ) {
    echo "Looping ke $i adalah ".$buah[$i]."<br>";
}


?>