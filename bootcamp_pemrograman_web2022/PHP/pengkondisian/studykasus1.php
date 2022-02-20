<?php

    $nama = "Riki Widiantoro";
    $gender = "pria";
    $thn_lhr = 1998;
    $umur = date('Y') - $thn_lhr;

    if ( $gender === "pria" ) {
        echo "Selamat pagi, tuan $nama <br> Anda sekarang berumur $umur tahun.";
    } else {
        echo "Selamat pagi, nyonya $nama <br> Anda sekarang berumur $umur tahun.";
    }


?>