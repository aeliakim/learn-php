<?php
// array
// variabel yg dapat memiliki banyak nilai
// elemen pada array boleh memiliki tipe data yg berbeda
// pasangan antara key dan value
// key-nya adalah index yang dimulai dari 0

// membuat array
// cara lama
$hari = array("Senin", "Selasa", "Rabu");
// cara baru
$bulan = ["januari", "februari", "maret"];
$arr1 = [123, "tulisan", false];

// Menampilkan array
// var_dump() / print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// Menampilkan 1 elemen pada array
// echo $arr1[0];
// echo "<br>";
// echo $bulan[1];

// Menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jumat";
echo "<br>";
var_dump($hari);
