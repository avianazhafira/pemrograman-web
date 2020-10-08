<?php
$user = "Jay";
$password ='123';

if(isset($_POST['submit'])){
        if($_POST['nama']==$user && $_POST['password']==$password){
            //memindahkan halaman
            header('Location: video_profile.php?nama=' . $user);
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