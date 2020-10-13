
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Konfirmasi Mata Kuliah</title>
</head>
<body>
<?php
    include_once "koneksi.php";
    if (isset($_POST['tombolSubmit'])) {
        $kode_mk = $_POST['kode_mk'];
        $nama_mk = $_POST['nama_mk'];
        $kategori_mk = $_POST['kategori_mk'];
        $SKS = $_POST['SKS'];
    
        $sql = "INSERT INTO matakuliah (kode_mk, nama_mk, kategori_mk, SKS)
        VALUES ('$kode_mk','$nama_mk','$kategori_mk','$SKS')";

        if(mysqli_query($conn, $sql)){
            echo "Data berhasil diinput";
        }
        else {
            echo "Data tidak berhasil diinput pada string sql: <br> $sql <br>, dg error:".mysqli_error($conn);
        }

?>
    username: <?php echo $kode_mk ?>
    <br>
    nama matakuliah: <?php echo $nama_mk ?>
    <br>
    kategori matakuliah: <?php echo $kategori_mk ?>
    <br>
    SKS: <?php echo $SKS ?>
<?php
   }
   else{
    echo "Mohon maaf konfirmasi tidak bs diakses langsung";
   }
?>
</body>
</html>