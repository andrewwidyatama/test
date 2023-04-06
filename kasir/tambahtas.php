<?php
include 'koneksi.php';
$db_toko_tas = new database;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Pesanan</title>
    <link rel="stylesheet" type="text/css" href="../kasir/style.css">
</head>
<body>
    <div class="all">
    <div class="header">
        <h1>Tas</h1>
    </div>

    <div class="nav">
    <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="menutas.php">Menu Tas</a></li>
        <li><a href="menupelanggan.php">Menu pelanggan</a></li>
        <li><a href="menutransaksi.php">Data pesanan</a></li>
        <li><a href="../index.php">Logout</a></li>
    </ul>
</div>
<center>
    <div class="box">
<h2 style="text-align: center; margin-bottom: 20px">Tambah</h2>
<a href="tambahtas.php" style="text-align: center; margin-top: 30px; margin-bottom: 25px">Tambah Tas</a>
<table border="1" cellspacing="0" cellpading="8" border="1" width="100%" style="text-align: center; font-size: 15px; margin-bottom: 20px;">
<form action="proses.php?aksi=tambahtas" method="post">
    <tr>
        <td>Merk Tas : </td>
        <td><input type="text" name="merk_tas"></td>
</tr>
<tr>
        <td>Model : </td>
        <td><input type="text" name="model"></td>
</tr>
<tr>
        <td>Harga : </td>
        <td><input type="text" name="harga"></td>
</tr>
        <td></td>
        <td><input type="submit" name="submit"></td>
</tr>
</form>
</table>
</div>
</body>
</html>