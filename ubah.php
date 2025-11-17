<?php
include 'koneksi.php';

$kode_menu = $_POST['kode_menu'];
$nama_menu = $_POST['nama_menu'];
$kategori = $_POST['kategori'];
$harga = $_POST['harga'];
$status_ketersediaan = $_POST['status_ketersediaan'];
$deskripsi = $_POST['deskripsi'];

mysqli_query($koneksi,"UPDATE data SET kode_menu='$kode_menu', nama_menu='$nama_menu', kategori='$kategori', harga='$harga',status_ketersediaan='$status_ketersediaan', deskripsi='$deskripsi' WHERE kode_menu='$kode_menu'");
header("location:showdata.php");
?>