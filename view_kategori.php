<h3> data kategori </h3>
<?php
include "koneksi.php"; 
session_start();
if(!($_SESSION['username'])){
    echo "<SCRIPT>alert('silahkan login terlebih dahulu !');window.location='index.php'</SCRIPT>";
}
$query_view = mysqli_query($koneksi,"select * from kategori");
?>
    </br>
    <?php
    if($_SESSION['level']=="admin"){
    echo '<a href="input_kategori.php" class="btn btn-danger">Tambah kategori</a>';
    }?> <a href="home.php">halaman utama</a>
    <table class="table table-bordered" border="1">
    <tr>
        <td>no</td>
        <td>nama</td>
        <td colspan="4">Aksi</td>
        <?php if($_SESSION['level']=="admin")?>
    </tr>
<?php
$no=1;
while ($tampil = mysqli_fetch_array($query_view)){ ?>
    <tr>
        <td><?php echo $no++;?></td>
        <td><?php echo $tampil['nama'];?></td>
        <?php if($_SESSION['level']=="admin"){ echo '<td><a href="edit_kategori.php?id_kategori='.$tampil['id_kategori'].'">Edit</a></td>';
        echo '<td><a href="hapus_kategori.php?id_kategori='.$tampil['id_kategori'].'" onclick="return confirm("yakin keluar?")">Hapus</a></td>';}?>
    </tr>
    <?php }?>
</table>