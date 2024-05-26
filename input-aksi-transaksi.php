<?php 
include 'koneksi.php';

$id_peminjam = $_POST ['id_transaksi'];
$jumlah = $_POST ['jumlah'];
$status = $_POST ['status'];


mysqli_query($koneksi,"insert into tabel_transaksi values('','$jumlah', '')");
header("location:tampilan.html");
?>