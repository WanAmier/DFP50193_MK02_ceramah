<?php
$harga_seunit = 250;

$nama     = $_POST['nama'];
$email    = $_POST['email'];
$telefon  = $_POST['telefon'];
$kategori = $_POST['kategori'];
$slot     = $_POST['slot'];

$jumlah = $harga_seunit * $slot;
?>

<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <title>Pengesahan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Pendaftaran Berjaya!</h1>

    <p><b>Nama:</b> <?= htmlspecialchars($nama) ?></p>
    <p><b>Email:</b> <?= htmlspecialchars($email) ?></p>
    <p><b>Telefon:</b> <?= htmlspecialchars($telefon) ?></p>
    <p><b>Kategori:</b> <?= htmlspecialchars($kategori) ?></p>
    <p><b>Bilangan Slot:</b> <?= $slot ?></p>
    <p><b>Harga Seunit:</b> RM 250</p>
    <h2>Jumlah Yuran: RM <?= $jumlah ?></h2>

</div>

</body>
</html>
