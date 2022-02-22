<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas looping 2</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <style>
        div {
            border: 2px solid black;
            padding: 5px;
        }
        thead td {
            padding: 3px;
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>
<body>
    
    <table border="4" cellspacing="0" cellpadding="0">
        <thead>
            <tr>
                <td>No</td>
                <td>Nama</td>
                <td>Kelas</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                <?php
                    for( $no=1; $no<=10; $no++ ) {
                        echo "<div> $no </div>";
                    }
                ?>
                </td>
                <td>
                <?php
                    for( $nama=1; $nama<=10; $nama++ ) {
                        echo "<div> Nama ke $nama </div>";
                    }
                ?>
                </td>
                <td>
                <?php
                    for( $kelas=10; $kelas>=1; $kelas-- ) {
                        echo "<div> Kelas ke $kelas </div>";
                    }
                ?>
                </td>
            </tr>
        </tbody>
    </table>

    <footer>
        <p>Tugas PHP - perulangan/looping Eduwork | Riki Widiantoro | <a href="https://github.com/rikiwidiantoro" target="_blank"><i class="fab fa-github"> rikiwidiantoro</i></a></p>
    </footer>

</body>
</html>
