<?php
// cek apakah tidak ada data di $_GET
if( !isset($_GET["nama"]) ||
!isset($_GET["nrp"]) ||
!isset($_GET["email"]) ||
!isset($_GET["jurusan"]) ||
!isset($_GET["gambar"]))  {
    // redirect
    header("Location:kendali1.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Detail Mahasiswa</title>
</head>
<body>

   <ul>
   <li><img src="img/<?= $_GET["gambar"]; ?>"width="150px"></li>
   <li><?= $_GET["nama"]; ?></li>
   <li><?=$_GET["nrp"]; ?></li>
   <li><?= $_GET["email"]; ?></li>
   <li><?= $_GET["jurusan"]; ?></li>
   </ul> 

   <a herf="kendali1.php">Kembali ke daftar mahasiswa</a>
</body>
</html>