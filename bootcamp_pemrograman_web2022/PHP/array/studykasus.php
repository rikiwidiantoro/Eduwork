<?php

    // $orang = array(
    //     array(
    //         "Nama" => "Riki",
    //         'Umur' => 23,
    //         'Kelas' => 'Javascript'
    //     ),
    //     array(
    //         'Nama' => 'Widi',
    //         'Umur' => 22,
    //         'Kelas' => 'PHP',
    //     ),
    //     array(
    //         'Nama' => 'Anto',
    //         'Umur' => 21,
    //         'Kelas' => 'Java',
    //     ),
    //     array(
    //         'Nama' => 'Toro',
    //         'Umur' => 20,
    //         'Kelas' => 'Golang',
    //     )
    // );


$orang = [
    array(
        "Nama" => "Riki",
        'Umur' => 23,
        'Kelas' => 'Javascript',
    ),
    array(
        'Nama' => 'Widi',
        'Umur' => 22,
        'Kelas' => 'PHP',
    ),
    array(
        'Nama' => 'Anto',
        'Umur' => 21,
        'Kelas' => 'Java',
    ),
    array(
        'Nama' => 'Toro',
        'Umur' => 20,
        'Kelas' => 'Golang',
    )
];

foreach( $orang as $org => $isi ) {
    echo "Nama : ". $isi['Nama'] . ", Umur : ". $isi['Umur'] . ", Kelas : " . $isi['Kelas'];
    echo "<br>";
}
echo "<br><br>";

// mengambil data dari file json
$data = file_get_contents("data.json");
$json = json_decode($data, true);

echo $json[0]['nama'];
echo "<br><br>";

foreach( $json as $jj ) {
    echo "Nama : " . $jj['nama'] . "<br>";
}


?>