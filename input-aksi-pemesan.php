<?php 
include 'koneksi.php';

$nama = $_POST ['nama'];
$alamat = $_POST ['alamat'];
$no_telp = $_POST ['no_telp'];
$id_kamar = $_POST['kamar'];
$nama222 = $_POST ['cekin'];
$id_peminjam = $_POST ['cekout'];
$harga = $_POST ['harga'];




mysqli_query($koneksi,"insert into id_pemesan values('$nama', '$alamat', '$no_telp', '' , '$id_kamar' , '$nama222' , '$id_peminjam', '$harga' )");
header("location:input-transaksi.php");
?>