<?php
//$mahasiswa = ["Andiny Prameswari Putri", "01080623", "andinyprameswari@unpas.ac.id", "Teknik Informatika";],
//["Andre Putra Renaldy", "02090623", "andreputra@gmail.com", "Teknik Informatika";]
//];

// Array Associative
// definisinya sama seperti array numerik,kecuali
//key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
"nama" =>"Andiny Prameswari Putri",
 "nrp" =>"01080623",
 "email" =>"andinyprameswari@unpas.ac.id",
 "jurusan" =>"Teknik Informatika",
 "gambar" =>"foto1.jpeg"
    ],
    [
"nama" =>"Andre Putra Renaldy",
 "nrp" =>"01080623",
 "email" =>"andreputra@gmail.com",
 "jurusan" =>"Teknik Informatika",
 "gambar" =>"foto2.jpeg"
    ]
    ];
    echo $mahasiswa[1]["email"]
 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
    </head>
    <body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach($mahasiswa as $mhs) : ?>
    <ul>
    <li>
        <img src="img/<?= $mhs ["gambar"]; ?>" width="150px">
    </li>
        
    <li>Nama : <?= $mhs["nama"]; ?></li>
    <li>NRP : <?= $mhs["nrp"]; ?></li>
    <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
    <li>Email : <?= $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>
    </body>
    </html>