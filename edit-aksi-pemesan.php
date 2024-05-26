<?php 
include'koneksi.php';

$id2 = $_POST['nama'];
$nama2 = $_POST['alamat'];
$lahir2 = $_POST['no_telp'];
$pesan2 = $_POST['id_pemesan'];
$kamar = $_POST['id_kamar'];
$cekin = $_POST['cekin'];
$cekout = $_POST['cekout'];
$harga = $_POST['harga'];

mysqli_query($koneksi,"update id_pemesan set nama='$id2', alamat='$nama2', no_telp='$lahir2', id_pemesan='$pesan2', id_kamar='$kamar', cekin='$cekin', cekout='$cekout' where nama='$id2'");

header("location: hotel1.php");
?>