<?php

    // menu :
    // 1. penjumlahan
    // 2. pengurangan
    // 3. perkalian
    // 4. pembagian

    $menu = 4;
    $bil1 = 100;
    $bil2 = 50;

    if ( $menu == 1 ) {
        echo $bil1 + $bil2;
    } else if ( $menu == 2 ) {
        echo $bil1 - $bil2;
    } else if ( $menu == 3 ) {
        echo $bil1 * $bil2;
    } else {
        echo $bil1 / $bil2;
    }


?>