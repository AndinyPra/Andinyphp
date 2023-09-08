<?php
// $_GET
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
 "email" =>"andinypp@gmail.com",
 "jurusan" =>"Teknik Informatika",
 "gambar" =>"foto2.jpeg"
    ]
    ];
?>

<!DOCTYPE html>
<html> 
<head>
   <title>GET</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<ul>
<?php foreach($mahasiswa as $mhs) : ?>
     <li>
        <a href="kendali2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?=$mhs["email"];?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"];?>"><?= $mhs["nama"]; ?></a>
     </li> 
<?php endforeach; ?>
</ul>

</body>
</html>
