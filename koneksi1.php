<?php

    $koneksi=mysqli_connect("localhost", "root", "", "phpregpagi");

    if($koneksi){
        echo "koneksi sukses.";
    }else{
        echo "koneksi gagal.";
    }
    
?>
