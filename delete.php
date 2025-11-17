<?php
include 'koneksi.php';

$kode_menu = $_GET['id'];
mysqli_query($koneksi,"DELETE FROM data WHERE kode_menu='$kode_menu'");
header("location:showdata.php");
?>