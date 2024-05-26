<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styletable.css">
</head>
</style>
    <div class="sql-database">
        <h1>DATA HOTEL</h1>
    <table class="sql-table">
        <tr>
            <td>nama</td>
            <td>alamat</td>
            <td>no_telp</td>
            <td>id_pemesan</td>
            <td>id_kamar</td>
            <td>cekin</td>
            <td>cekout</td>
            <td>harga</td>
        </tr>
        </div>
   
<?php
include "koneksi.php";
$data=mysqli_query($koneksi, "select * from id_pemesan");
while($tampil=mysqli_fetch_array($data)){
?>

<tr>
    <td><?php echo $tampil['nama'] ?></td>
    <td><?php echo $tampil['alamat'] ?></td>
    <td><?php echo $tampil['no_telp'] ?></td>
    <td><?php echo $tampil['id_pemesan'] ?></td>
    <td><?php echo $tampil['id_kamar'] ?></td>
    <td><?php echo $tampil['cekin'] ?></td>
    <td><?php echo $tampil['cekout'] ?></td>
    <td><?php echo $tampil['harga'] ?></td>

    <td> <a href="hapus-pemesan.php?id=<?php echo $tampil['id_pemesan'];?>">haposs</a>
    <a href="edit-pemesan.php?id=<?php echo $tampil['id_pemesan'];?>">edid</a></td>
</tr>

<?php
}
?>
    </table>
    <a href="input-pemesan.php">tambah data baru</a>
    </html>