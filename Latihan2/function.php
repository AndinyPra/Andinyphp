<?php
function salam($waktu = "Datang", $nama = "Admin") {
    return "Selamat $waktu, $nama!";
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>Latihan Funcation</title>
</head>
<body>
  <h1><?= salam("Pagi"); ?></h1>
  </body>
  </html>  