<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styletable.css">
    <style>
        .sql-database {
    margin: 20px;
    padding: 20px;
    border: 1px solid #ffffff;
    border-radius: 5px;
}

.sql-database h1 {
    font-size: 24px;
    text-align: center;
    margin-bottom: 20px;
    color: white 0,5;
}

.sql-table {
    width: 100%;
    border-collapse: collapse;
}

.sql-table tr, .sql-table td {
    padding: 15px;
    text-align: left;
    color: #000000;
    
}

.sql-table tbody tr:hover {
    background-color: #00c8ff;
}

</style>
    <div class="sql-database">
        <h1>DATA HOTEL</h1>
    <table class="sql-table">
        <tr>
            <td>id kamar</td>
            <td>idkamar</td>
            <td>nomerkamar</td>
            <td>edit</td>
        </tr>
        </div>
   
<?php
include "koneksi.php";
$data=mysqli_query($koneksi, "select * from nokamar");
while($tampil=mysqli_fetch_array($data)){
?>

<tr>
    <td><?php echo $tampil['idnomer'] ?></td>
    <td><?php echo $tampil['nomerkamar'] ?></td>
    <td><?php echo $tampil['id_kamar'] ?></td>
    <td> <a href="hapus-nokamar.php?id=<?php echo $tampil['idnomer'];?>">haposs</a>
    <a href="edit-nokamar.php?id=<?php echo $tampil['idnomer'];?>">edid</a></td>
</tr>

<?php
}
?>
    </table>
    <a href="input-nokamar.php">tambah data baru</a>
    </html>