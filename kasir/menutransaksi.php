<?php
require 'koneksi.php';
$sql = "SELECT transaksi.id_transaksi, transaksi.kuantitas, transaksi.harga, transaksi.total_harga, pelanggan.id_pelanggan,pelanggan.nama_pelanggan, tas.id_tas, tas.merk_tas FROM pelanggan INNER JOIN transaksi on pelanggan.id_pelanggan = transaksi.id_pelanggan INNER JOIN tas on tas.id_tas = transaksi.id_tas ORDER BY id_transaksi";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Pelanggan</title>
    <style type="text/css">
        .i {
          width: 100%;
          margin: auto;
          border-collapse: collapse;
        }
        th, td {
          border: 1px solid black;
        }
        </style>
</head>
<link rel="stylesheet" type="text/css" href="../kasir/style.css">
<body>
    <div class="all">
    <div class="header">
        <h1>Transaksi</h1>
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
<a href="tambahtransaksi.php" style="text-align: center; margin-top: 30px; margin-bottom: 25px">Tambah Transaksi</a>
<table border="1" cellspacing="0" cellpading="8" border="1" width="100%" style="text-align: center; font-size: 15px; margin-bottom: 20px;">
    <table class="i">
        <tr>
            <th>No</th>
            <th>Pelanggan</th>
            <th>merk tas</th>
            <th>kuantitas</th>
            <th>harga</th>
            <th>total harga</th>
           
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)):?>
            <tr>
                <td><?=$row['id_transaksi'] ?></td>
                <td><?=$row['nama_pelanggan'] ?></td>
                <td><?=$row['merk_tas'] ?></td>
                <td><?=$row['kuantitas'] ?></td>
                <td><?=$row['harga'] ?></td>
                <td><?=$row['total_harga'] ?></td>
        </tr>
        <?php endwhile ?>


        
</body>
</html>  