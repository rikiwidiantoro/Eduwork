<?php

// STUDY KASUS 1
// 1 x 1 = 1
// 1 x 2 = 2
// dst..

for ( $angka = 1; $angka <= 10; $angka++ ) {
    $var = 10;
    $total = $angka * $var;
    echo "$var x $angka = $total <br>";
}

echo "<br><hr><br><br>";


// STUDY KASUS 2
// *
// **
// ***
// dst..
for ( $bintang = 1; $bintang <= 10; $bintang++ ) {
    
    for($b = 1; $b < $bintang; $b++) {
        echo "*";
    }
    echo "<br>";
}

echo "<br><hr><br><br>";


// STUDY KASUS 3
// 1 adalah bilangan ganjil
// 2 adalah bilangan genap
// 3 adalah bilangan ganjil
// 4 adalah bilangan genap
// dst..

for( $bil = 1; $bil < 10; $bil++ ) {

    if($bil % 2 == 1 ) {
        $kat = "ganjil";
        echo "$bil adalah bilangan $kat <br>";
    } else if ( $bil % 2 == 0 ) {
        $kat = "genap";
        echo "$bil adalah bilangan $kat <br>";
    }
}


?>