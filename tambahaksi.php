<?php
//koneksi database
include 'koneksi.php';

$kode_menu = $_POST['kode_menu'];
$nama_menu = $_POST['nama_menu'];
$kategori = $_POST['kategori'];
$harga = $_POST['harga'];
$status_ketersediaan = $_POST['status_ketersediaan'];
$deskripsi = $_POST['deskripsi'];

mysqli_query($koneksi,"INSERT INTO data (kode_menu, nama_menu, kategori, harga, status_ketersediaan, deskripsi) VALUES('$kode_menu','$nama_menu','$kategori','$harga','$status_ketersediaan','$deskripsi')");

//mengalihkan halaman kembali ke index.php
header("location:showdata.php");

?>