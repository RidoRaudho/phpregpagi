<h3> data anggota </h3>
<?php
include ("koneksi.php");
session_start();
if(!($_SESSION['username'])){
    echo "<SCRIPT>alert('silahkan login terlebih dahulu');window.location='index.php'</SCRIPT>";
}
$query_view = mysqli_query($koneksi,"select * from anggota");
?>
    </br>
    <?php
    if($_SESSION['level']=="admin"){
    echo '<a href="input_anggota.php" class="btn btn-danger">Tambah anggota</a>';
    }?> <a href="home.php">halaman utama</a>
    <table class="table table-bordered" border="1">
    <tr>
        <td>no</td>
        <td>nama</td>
        <td>alamat</td>
        <td>no telp</td>
        <td colspan="4">Aksi</td>
        <?php if($_SESSION['level']=="admin")?>
    </tr>
    
<?php
$no=1;
while ($tampil = mysqli_fetch_array($query_view)){ ?>
    <tr>
        <td><?php echo $no++;?></td>
        <td><?php echo $tampil['nama'];?></td>
        <td><?php echo $tampil['alamat'];?></td>
        <td><?php echo $tampil['no_telp'];?></td>
        <?php if($_SESSION['level']=="admin"){ echo '<td><a href="edit_anggota.php?id_anggota='.$tampil["id_anggota"].'">Edit</a></td>';
        echo '<td><a href="hapus_anggota.php?id_anggota='.$tampil["id_anggota"].'" onclick="return confirm("yakin keluar?")">Hapus</a></td>';}?>
        
    </tr>
    <?php }?>
</table>