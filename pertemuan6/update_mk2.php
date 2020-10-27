<?php
    include_once "koneksi.php";
    if (isset($_POST["kode"])) {
        $kode_mk = $_POST["kode"];
        $nama_mk = $_POST["nama"];
        $kategori_mk = $_POST["kategori"];
        $SKS = $_POST["sks"];
        $id = $_POST["id"];
        
        $sql = "UPDATE matakuliah SET kode='".$kode_mk."', nama='".$nama_mk."', kategori='".$kategori_mk."', sks='".$SKS."' WHERE id='".$id."'";

        $runSQL = mysqli_query($conn, $sql);
        if ($runSQL) {
            header("location: edit_mk.php?suksesedit");
        }
        else {
            header("location: edit_mk.php?gagaledit");
        }
    }
?>