<h3>edit data pemesan</h3>

<?php 
include 'koneksi.php';
$id= $_GET['id'];
$data = mysqli_query ($koneksi,"select * from id_pemesan where id_pemesan='$id'");
while($tampil=mysqli_fetch_array($data)){
?>
<form method="post" action ="edit-aksi-pemesan.php">
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
        <td>nama</td>
        <td><input type="text" name="nama" value="<?php echo $tampil ['nama'];?>"></td>
    </tr>
    
    <tr>
        <td>alamat</td>
        <td><input type="text" name="alamat" value="<?php echo $tampil ['alamat'];?>"></td>
    </tr>

    <tr>
        <td>no_telp</td>
        <td><input type="number" name="no_telp" value="<?php echo $tampil ['no_telp'];?>"></td>
    </tr>

    <tr>
        <td>id_kamar</td>
        <td><input type="number" name="id_kamar" value="<?php echo $tampil ['id_kamar'];?>"></td>
    </tr>
    <tr>
        <td>tgl in</td>
        <td><input type="date" name="cekin" value="<?php echo $tampil ['cekin'];?>"></td>
    </tr>
    <tr>
        <td>tgl out</td>
        <td><input type="date" name="cekout" value="<?php echo $tampil ['cekout'];?>"></td>
    </tr>
    <tr>
        <td>harga</td>
        <td><input type="number" name="harga" value="<?php echo $tampil ['harga'];?>"></td>
    </tr>

    <tr>
        <td><input type="submit" value="SIMPAN"></td>
    </tr>
</table>
</div>
</form>
<?php
}
?>