


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styleuser.css">
</head>
<body>

<form method ="post" action= "input-aksi-pemesan.php">

    <div class="login-container">
        <h1>DATA HOTEL</h1>
        <h3> Tambah Data pemesan</h3>
    <table class="sql-table">
    <tr>
        <td>type kamar</td>
        <select name="tipe" id="tipe" onchange="updateTotal()">
            <option value="">Pilih kamar:</option>
            <?php
                include "koneksi.php";

                $query = "SELECT id_kamar, tipe, harga FROM kamar";
                $result = mysqli_query($koneksi, $query);
                while ($row = mysqli_fetch_assoc($result)){
                    $id_tipe = $row['id_kamar'];
                    $tipe_kamar = $row['tipe'];
                    $harga = $row['harga'];

                    echo "<option value='$id_tipe' data-harga='$harga'>$tipe_kamar</option>";
                }
            ?>
        </select>
    <tr>
        <td>nama</td>
        <td><input type="text" name="nama"></td>
    </tr>
    <tr>
        <td>alamat</td>
        <td><input type="text" name="alamat"></td>
    </tr>
    <tr>
        <td>no_telp</td>
        <td><input type="number" name="no_telp"></td>
    </tr>

    
    </tr>
    <tr>
        <td>tgl in</td>
        <td><input type="date" name="cekin" id="cekin" onchange="updateTotal()"></td>
    </tr>
    <tr>
        <td>tgl out</td>
        <td><input type="date" name="cekout" id="cekout" onchange="updateTotal()"></td>
    </tr>
    <tr>
    <td>harga</td>
    <td><input type="text" name="harga" id="harga" readonly></td>
    </tr>
    <tr>
        <td><input type="submit" value="SIMPAN"></td>
    </tr>
</table>
</div>
</form>
<script>
        function updateTotal() {
            var tipeKamarSelect = document.getElementById("tipe");
            var selectedOption = tipeKamarSelect.options[tipeKamarSelect.selectedIndex];
            var hargaKamar = selectedOption.getAttribute("data-harga");

            var checkinDate = new Date(document.getElementById("cekin").value);
            var checkoutDate = new Date(document.getElementById("cekout").value);
            var selisihHari = Math.ceil((checkoutDate - checkinDate) / (1000 * 60 * 60 * 24));

            var totalPembayaran = hargaKamar * selisihHari;
            document.getElementById("harga").value = totalPembayaran;
        }

    </script>
</body>
</html>