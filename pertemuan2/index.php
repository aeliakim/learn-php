<?php
// Pertemuan 2 - PHP Dasar
// Sintaks PHP

// Standar Output
// echo, print
// print_r
// var_dump

// Penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

// Variabel dan tipe data
// Variabel
// tidak boleh diawali dengan angka, tapi boleh mengandung angka
// $nama = "Desiana";
// echo "Halo, nama saya $nama";

// Opeartor
// Operator aritmatika
// + - * / %
// $x = 10;
// $y = 20;
// echo $x * $y;

// penggabung string / concatenation / concat
// .
// $nama_depan = "Desiana";
// $nama_belakang = "Fitria";

// echo $nama_depan . " " . $nama_belakang;

// ASsignment
// = , +=, -=, *=, /=, %=, .=
// $x = 1;
// $x -= 5;
// echo $x;
// $nama = "Desiana";
// $nama .= " ";
// $nama .= "Fitria";
// echo $nama;

// Perbandingan
// <, >, <=, >=, ==, !=
// var_dump(1 == "1");

// Identitas
// ===, !==
// var_dump(1 === "1");

// Logika
// &&, ||, !
$x = 30;
var_dump($x < 20 || $x % 2 == 0);