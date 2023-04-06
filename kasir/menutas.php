<?php
require 'koneksi.php';
$sql = "SELECT * FROM tas";
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
        <h1>Daftar Tas</h1>
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
    <table class="i">
        <tr>
            <th>No</th>
            <th>Merk tas</th>
            <th>model</th>
            <th>harga</th>
           
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)):?>
            <tr>
                <td><?=$row['id_tas'] ?></td>
                <td><?=$row['merk_tas'] ?></td>
                <td><?=$row['model'] ?></td>
                <td><?=$row['harga'] ?></td>
                
                
        </tr>
        <?php endwhile ?>



</body>
</html>