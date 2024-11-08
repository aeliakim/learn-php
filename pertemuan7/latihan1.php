<?php
// Superglobals
// variabel global milik PHP
// merupakan array associative

// $_GET
$mahasiswa = [
    [
        "nrp" => "5024201023",
        "nama" => "Desiana",
        "email" => "desianadf01@gmail.com",
        "jurusan" => "Teknik Komputer",
        "gambar" => "IMG-20211222-WA0003.jpg"
    ],
    [
        "nama" => "John",
        "nrp" => "5024201046",
        "email" => "john@gmail.com",
        "jurusan" => "Teknik Komputer",
        "gambar" => "IMG-20220610-WA0000.jpg"
    ],

];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>

<body>

    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $mhs): ?>
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>

</body>

</html>