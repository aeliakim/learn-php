<?php
$mahasiswa = [
    ["Desiana", "5024201023", "Teknik Komputer", "desianadf01@gmail.com"],
    ["John", "5024201046", "Teknik Komputer", "john@gmail.com"],
    ["Jane", "5024201001", "Teknik Komputer", "jane@gmail.com"],
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
            <li>Nama: <?= $mhs[0] ?></li>
            <li>NRP: <?= $mhs[1] ?></li>
            <li>Jurusan: <?= $mhs[2] ?></li>
            <li>Email: <?= $mhs[3] ?></li>
        </ul>
    <?php endforeach ?>
</body>

</html>