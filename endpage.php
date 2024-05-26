<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
include "koneksi.php";
$data=mysqli_query($koneksi, "select * from id_pemesan");
while($tampil=mysqli_fetch_array($data)){
?>
<body>
    <p>selamat telah berhasil boking</p>

</body>
</html>