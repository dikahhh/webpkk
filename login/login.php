<?php
session_start();
 
// menghubungkan php dengan koneksi database
include 'koneksi.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){ 
 
  $data = mysqli_fetch_assoc($login);



// $users = [
//     ['username' => 'admin', 'password' => 'admin123', 'level' => 'admin'],
//     ['username' => 'user', 'password' => 'user123', 'level' => 'user']
// ];

if ($data['level'] === "admin") {
    $_SESSION['username']= $username;
    $_SESSION['level']= "admin";
    header('Location: http://localhost/hotel/ADMIN/tampilan-admin.html');
    exit;
    }
    elseif($data['level']=="user"){
        $_SESSION['username']= $username;
        $_SESSION['level']= "user";
        header('Location: http://localhost/hotel/tampilan%20-%20Copy.html');
        exit;
    }
    } else {

        // Jika tidak ada data pengguna yang cocok
        echo 'Invalid username or password';
    }
?>

<?php 
include 'koneksi.php';

$id       = $_POST ['id'];
$username2 = $_POST ['username'];
$password2 = $_POST ['password'];
$level2 = $_POST ['level'];


mysqli_query($koneksi,"insert into user values('$id', '$username2','$password2', 'user')");
header("location: http://localhost/hotel/input-pemesan.php'");
?>