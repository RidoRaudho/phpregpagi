<?php
include("koneksi.php");
if(isset($_POST['save'])){
$query_edit=mysqli_query($koneksi,"update barang set
    nama='".$_POST['nama']."',
    harga='".$_POST['harga']."'
    WHERE id_barang ='".$_POST['id_barang']."'");
if($query_edit){
header("location:view_barang.php");
}else{
    echo mysqli_error();
}
}
$tampil=mysqli_query($koneksi,"select * from barang where id_barang='".$_GET['id_barang']."'");
$hasil_data=mysqli_fetch_array($tampil);
?>
<form method="POST">
<table class="table table_bordered" border="1 px">
<input type="hidden" name="id_barang" value="<?php echo $hasil_data['id_barang'];?>">
    <tr>
        <td>nama</td>
        <td><input type="text" name="nama" class="form-control" value="<?php echo $hasil_data['nama'];?>"></td>
    </tr>
    <tr>
        <td>harga</td>
        <td><input type="text" name="harga" class="form-control" value="<?php echo $hasil_data['harga'];?>"></td>
    </tr>
    <tr>
    <td><input type="submit" value="rubah data" name="save"></td>
    </tr>
</table>
</form>