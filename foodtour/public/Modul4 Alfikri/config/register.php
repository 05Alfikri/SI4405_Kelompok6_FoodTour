<?php

$connect = mysqli_connect("localhost","root","","wad_modul4_alfikri");

if($connect == false){
    die('Gagal menghubungkan ke database:'.mysqli_connect_error());
}

?>