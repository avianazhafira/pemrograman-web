
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
<?php
    include_once "koneksi1.php";
    if (isset($_POST['tombolSubmit'])) {
        $namadepan = $_POST['namadepan'];
        $namabelakang = $_POST['namabelakang'];
        $email = $_POST['email'];
    
        $sql = "INSERT INTO form (namadepan, namabelakang, email)
        VALUES ('$namadepan','$namabelakang','$email')";

        if(mysqli_query($conn, $sql)){
            echo "Data berhasil diinput";
        }
        else {
            echo "Data tidak berhasil diinput pada string sql: <br> $sql <br>, dg error:".mysqli_error($conn);
        }

?>

<?php
   }
   else{
    echo "Mohon maaf konfirmasi tidak bs diakses langsung";
   }
?>
</body>
</html>