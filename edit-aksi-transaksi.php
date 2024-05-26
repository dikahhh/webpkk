<?php 
include'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$status = $_POST['status'];

mysqli_query($koneksi,"update tabel_transaksi set id_transaksi='$id', jumlah='$nama' , status='$status' where id_transaksi='$id'");

header("location: transaksi1.php");
?>