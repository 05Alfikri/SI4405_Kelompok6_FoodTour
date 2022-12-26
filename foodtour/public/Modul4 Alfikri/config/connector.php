<?php

$connect = mysqli_connect("localhost","root","","modul3_alfikri");

if($connect == false){
    die('Gagal menghubungkan ke database:'.mysqli_connect_error());
}

?>