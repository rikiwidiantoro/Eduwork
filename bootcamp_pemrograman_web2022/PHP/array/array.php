<?php
    $data = file_get_contents("data.json");
    $konversi = json_decode($data, true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <style>
        body {
            margin: 0;
            font-family: sans-serif;
            font-size: 20px;
        }
        table {
            margin: 40px auto;
        }
        .header {
            background-color: orange;
            padding: 1px 40px;
            font-size: 30px;
        }
        .head {
            background-color: silver;
        }
        table td {
            padding: 10px 20px;
        }
        footer {
            text-align: center;
        }
    </style>
</head>
<body>
    <!-- header -->
    <div class="header">
        <p>Daftar Nilai</p>
    </div>
    <!-- akhir header -->


    <!-- tabel -->
    <table border="2" cellspacing="0">
        <tr class="head">
            <td>No.</td>
            <td>Nama</td>
            <td>Umur</td>
            <td>Alamat</td>
            <td>Kelas</td>
            <td>Nilai</td>
            <td>Hasil</td>
        </tr>
        
            <?php
                $nomor = 1;
                foreach($konversi as $isi => $uwu) {

                    // umur
                    $lalu = new DateTime($uwu['tanggal_lahir']);
                    $sekarang = new DateTime('today');
                    $y = $sekarang->diff($lalu)->y;
                    // akhir umur


                    // kategori penilaian
                    $nilaii = $uwu['nilai'];
    
                    if( $nilaii >= 90 && $nilaii <= 100 ) {
                        $kategori = "A";
                    } else if( $nilaii >= 80 && $nilaii <= 89 ) {
                        $kategori = "B";
                    } else if( $nilaii >= 70 && $nilaii <= 79 ) {
                        $kategori = "C";
                    } else if( $nilaii >= 60 && $nilaii <= 69 ) {
                        $kategori = "D";
                    } else if( $nilaii >= 0 && $nilaii <= 59 ) {
                        $kategori = "E";
                    } else {
                        $kategori = "tidak ada nilai!";
                    }
                
                    switch( $kategori ) {
                        case "A":
                            "A";
                            break;
                        case "B":
                            "B";
                            break;
                        case "C":
                            "C";
                            break;
                        case "D":
                            "D";
                            break;
                        case "E":
                            "E";
                            break;
                        default:
                            "tidak ada nilai!";
                            break;
                    }
                    // akhir kategori penilaian

                    // menampilkan isi tabel
                    echo "<tr>" . 
                            "<td>" . $nomor++ . ".</td>" .
                            "<td>" . $uwu['nama'] . "</td>" .
                            "<td>" . $y . "</td>" .
                            "<td>" . $uwu['alamat'] . "</td>" .
                            "<td>" . $uwu['kelas'] . "</td>" .
                            "<td>" . $uwu['nilai'] . "</td>" .
                            "<td>" . $kategori . "</td>" .
                        "</tr>";
                }
            ?>
    </table>
    <!-- akhir tabel -->


    <br><hr>
    <footer>
        <p>Tugas PHP - array Eduwork | Riki Widiantoro | <a href="https://github.com/rikiwidiantoro" target="_blank"><i class="fab fa-github"> rikiwidiantoro</i></a></p>
    </footer>
</body>
</html>