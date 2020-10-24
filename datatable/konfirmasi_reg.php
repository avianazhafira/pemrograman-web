
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Konfirmasi Registrasi</title>
</head>
<body>
<?php
    include_once "koneksi.php";
    if (isset($_POST['tombolSubmit'])) {
        $nama_mhs = $_POST['nama_mhs'];
        $email_mhs = $_POST['email_mhs'];
        $prodi_mhs = $_POST['prodi_mhs'];
        $nim = $_POST['nim'];
        $password_mhs = $_POST['password_mhs'];
    
        $sql = "INSERT INTO registrasi_mhs (nim, nama_mhs, prodi_mhs, email_mhs, password_mhs)
        VALUES ('$nim','$nama_mhs','$prodi_mhs','$email_mhs','$password_mhs')";

        if(mysqli_query($conn, $sql)){
            echo "Data berhasil diinput";
        }
        else {
            echo "Data tidak berhasil diinput pada string sql: <br> $sql <br>, dg error:".mysqli_error($conn);
        }

?>
    <h2>Thank You <?php echo $_POST['nama_mhs']; ?> </h2>

    <p>You have been registered as
        <?php echo $_POST['nama_mhs']; ?>
    </p>

    <p>Go <a href="/pemrograman-web/datatable/list_pendaftar.php">back</a> to Login</p>
<?php
   }
   else{
    echo "Mohon maaf konfirmasi tidak bs diakses langsung";
   }
?>
</body>
</html>