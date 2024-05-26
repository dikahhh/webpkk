<html>
    <table border = "1">
        <tr>
            <td>id_pegawai</td>
            <td>nama_pegawai</td>
            <td>edit</td>
        </tr>
   
<?php
include "koneksi.php";
$data=mysqli_query($koneksi, "select * from tabel_pegawai");
while($tampil=mysqli_fetch_array($data)){
?>

<tr>
    <td><?php echo $tampil['id_pegawai'] ?></td>
    <td><?php echo $tampil['nama_pegawai'] ?></td>
    <td> <a href="hapus-pegawai.php?id=<?php echo $tampil['id_pegawai'];?>">haposs</a>
    <a href="edit-pegawai.php?id=<?php echo $tampil['id_pegawai'];?>">edid</a></td>
</tr>

<?php
}
?>
    </table>
    <a href="input-pegawai.php">tambah data baru</a>
    </html>