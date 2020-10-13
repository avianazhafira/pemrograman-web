<?php
$namaServer = "Localhost";
$username = "root";
$papssword ="";
$namaDB = "weblanjut";

//membuat koneksi
$conn = mysqli_connect($namaServer,$username,$papssword,$namaDB);
//cek koneksi
if(!$conn){
    die("Koneksi Gagal");
}


?>