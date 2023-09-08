<?php
// array
// variabel yang dapat memiliki banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda

// pasangan antara key dan value
// key-nya adalah index, yang dimulai dari 0

// membuat array
// cara lama

$hari = array("senin", "Selasa", "Rabu");
// cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arrl = [123, "tulisan", false];

// Menampilkan Array
// var_dump() / print_r()
var_dump($hari);
echo"<br>";
print_r($bulan);

// Menampilkan 1 elemen pada array
// echo $bulan[0];
// echo "<br>";
// echo $bulan[1]

// menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "kamis";
$hari[] = "jum'at";
echo "<br>";
var_dump($hari);

