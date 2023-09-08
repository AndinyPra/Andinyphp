<?php
$mahasiswa = [
    ["Andiny Prameswari", "01080623", "Teknik Informatika", "andinyprameswari@unpas.ac.id"],
    ["Andiny Putri", "02090723", "Teknik Informatika", "putri@yaho.com"],
    ["Prameswari Putri", "03100723", "Teknik Informatika", "andin@gmail.com"]
];

?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiswa</hi>
<?php foreach( $mahasiswa as $mhs ) : ?>
<ul>
   <li>Nama : <?php echo $mhs[0]; ?></li>
   <li>NRP : <?php echo $mhs[1]; ?></li>
   <li>Jurusan : <?php echo $mhs[2]; ?></li>
   <li>Email : <?php echo $mhs[3]; ?></li>
</ul>   
<?php endforeach; ?> 
</body>
</html>
