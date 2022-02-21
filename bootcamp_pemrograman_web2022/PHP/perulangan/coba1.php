<?php

// for = digunakan untuk yg sudah jelas
// increment
for ( $i = 1; $i <= 10; $i++ ) {
    echo "for ke $i <br>";
}

// decrement
for ( $i = 10; $i > 0; $i-- ) {
    echo "for ke $i <br>";
}


// white = digunakan untuk yg belum jelas perulangannya
$ulang = 1;
while ( $ulang <= 10 ) {
    echo "while ke $ulang <br>";
    $ulang++;
}


// do while = while
$do = 1;
do {
    echo "do while ke $do <br>";
    $do++;
} while ( $do <= 10 );


// foreach = untuk looping yg mempunyai data
$skills = [
    "HTML",
    "CSS",
    "Javascript",
    "PHP",
    "MySQL"
];

echo "<h5>saya mempunyai skill : </h5>";
echo "<ol>";
    foreach ( $skills as $skill ) {
        echo "<li>$skill</li>";
    }
echo "</ol>";

?>