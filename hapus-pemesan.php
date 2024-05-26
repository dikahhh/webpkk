<?php
include 'koneksi.php';

$id= $_GET['id'];
mysqli_query($koneksi,"delete from id_pemesan where id_pemesan = '$id'");

header("location: hotel1.php");
?>