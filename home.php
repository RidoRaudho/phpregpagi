<?php
include 'koneksi.php';

//mengaktifkan session
session_start();

//cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['level'] == ""){
    echo "<SCRIPT>alert('silahkan login terlebih dahulu');window.location='index.php'</SCRIPT>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>
<body>
<div class="kolom">
    <div>
        <?php echo "hai, selamat datang <b>".$_SESSION['username']."</b>";
        ?>
    <ul>
        <li><a href="view_anggota.php">Daftar Anggota</a></li>
        <li><a href="view_barang.php">Daftar Barang</a></li>
        <li><a href="view_kategori.php">Daftar kategor</a></li>
    </ul>
    
    <br/>
    <a href="logout.php" onclick="return confirm('yakin keluar?')">keluar</a>
</div>
</body>
</body>