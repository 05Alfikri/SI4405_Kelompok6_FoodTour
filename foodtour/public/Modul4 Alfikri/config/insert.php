<?php

include 'connector.php';

if(isset($_POST['submit'])){
    $direktori= "../assets/images/uploaded/";
    $file=$_FILES['foto_mobil']['tmp_name'];
    
    mysqli_query($connect, "INSERT INTO showroom_alfikri_table set
    nama_mobil = '$_POST[nama_mobil]',
    pemilik_mobil = '$_POST[pemilik_mobil]',
    merk_mobil = '$_POST[merk_mobil]',
    tanggal_beli = '$_POST[tanggal_beli]',
    deskripsi = '$_POST[deskripsi]',
    status_pembayaran = '$_POST[status_pembayaran]',
    foto_mobil = '$file'");

    move_uploaded_file($_FILES['foto_mobil']['name'],$direktori.$file);
    
    echo "<meta http-equiv=refresh content=2;URL='../pages/ListCar-alfikri.php'>";
}

?>