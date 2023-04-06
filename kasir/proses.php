<?php
include 'koneksi.php';
$db_toko_tas= new database();

$aksi = $_GET['aksi'];
//proses tas
if($aksi == "tambahtas"){
    $db_toko_tas->tambahtas($_POST['merk_tas'], $_POST['model'],$_POST['harga']);
    header("location:menutas.php");
}
//proses pelanggan
if($aksi == "tambahpelanggan"){
    $db_toko_tas->tambahpelanggan($_POST['nama_pelanggan'], $_POST['alamat'],$_POST['no_hp']);
    header("location:menupelanggan.php");
}
//proses transaksi
if($aksi == "tambahtransaksi"){
    $db_toko_tas->tambahtransaksi($_POST['id_pelanggan'], $_POST['id_tas'],$_POST['kuantitas'],$_POST['harga'],$_POST['total_harga']);
    header("location:menutransaksi.php");
}
?>