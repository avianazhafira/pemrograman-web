<?php
     include_once "koneksi_mk.php";
     if (isset($_POST['nama_mk'])) {
        $kode_mk = $_POST['kode_mk'];
        $nama_mk = $_POST['nama_mk'];
        $kategori_mk = $_POST['kategori_mk'];
        $SKS = $_POST['SKS']; 

         //buat koneksi
        $strsql = "UPDATE matakuliah SET nama_mk='".$nama_mk."', kategori_mk='".$kategori_mk."', SKS='".$SKS."' WHERE kode_mk='".$kode_mk."' ";
        $runSQL = mysqli_query($conn, $strsql);       
        if ($runSQL) {
            header("location: list_mk.php");
        }  
        else {
            die; //tidak sukses;
        }       
    }    
?>