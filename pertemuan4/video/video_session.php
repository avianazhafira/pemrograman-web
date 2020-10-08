<?php

session_start();
$user = "Jay";
$password ='123';

if(isset($_POST['submit'])){
        if($_POST['nama']==$user && $_POST['password']==$password){
            
            //session = value dlm bentuk random string ga spt cookie
            $_SESSION['nama_user']=$_POST['nama'];
            //memindahkan halaman
            header('Location: video_profile.php');
        }
        else{
            echo 'login gagal!';
        }
    }
?>

<form action="video_login.php" method="post">
    <input type="text" name="nama">
    <input type="password" name="password">
    <input type="submit" name="submit">
</form>