<?php
// $mahasiswa = [
//     ["Desiana", "5024201023", "Teknik Komputer", "desianadf01@gmail.com"],
//     ["John", "5024201046", "Teknik Komputer", "john@gmail.com"],
//     ["Jane", "5024201001", "Teknik Komputer", "jane@gmail.com"],
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang dibuat sendiri
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
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs): ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>" alt="">
            </li>
            <li>Nama: <?= $mhs["nama"]; ?> </li>
            <li>NRP: <?= $mhs["nrp"]; ?> </li>
            <li>Jurusan: <?= $mhs["jurusan"]; ?> </li>
            <li>Email: <?= $mhs["email"]; ?> </li>
        </ul>
    <?php endforeach ?>
</body>

</html>