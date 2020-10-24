<?php
$namaServer = "Localhost";
$username = "root";
$password ="";
$namaDB = "beasiswaupj";

//membuat koneksi
$conn = mysqli_connect($namaServer,$username,$password,$namaDB);
//cek koneksi
if(!$conn){
    die("Koneksi Gagal");
}


?>