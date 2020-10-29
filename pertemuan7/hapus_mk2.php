<?php
    error_reporting(0);
    include "koneksi_mk.php";
    if (isset($_POST['delete'])) {
        $pkode_mk = $_POST["delete"];

        $sql = "DELETE from matakuliah where kode_mk='".$pkode_mk."'";
        if (mysqli_query($conn, $sql)) {
            echo "<h3><span class='text-success'>Data Berhasil dihapus ! </span></h3>";
        }else{
            echo "<span class='text-primary'> Terjadi Kesalahan Coba lagi yah! </span>";
        }
    }
?>