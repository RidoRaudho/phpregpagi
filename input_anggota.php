<?php
include ("koneksi1.php");

if(isset($_POST['save'])) {
$query_input=mysqli_query($koneksi,"insert into anggota(nama,alamat,no_telp)
values (
'".$_POST['nama']."',
'".$_POST['alamat']."',
'".$_POST['no_telp']."')");

if($query_input){
header('location:view_anggota.php');
}else{
    echo mysqli_error();
}
}
?>
<form method="POST">
<table class="table table-bordered" border="1">
    <tr>
        <td>nama</td>
        <td><input type="text" name="nama" class="form-control"></td>
    </tr>
    <tr>
        <td>alamat</td>
        <td><input type="text" name="alamat" class="form-control"></td>
    </tr>
    <tr>
        <td>no_telp</td>
        <td><input type="text" name="no_telp" class="form-control"></td>
    </tr>
    <tr>
        <td><input type="submit" name="save" class="btn btn-danger"></td>
    </tr>
</table>
</form>