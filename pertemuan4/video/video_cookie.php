<?php
$user = "Jay";
$password ='123';

if(isset($_POST['submit'])){
        if($_POST['nama']==$user && $_POST['password']==$password){
            
            //cookie=spt get tp bisa melihat nilainya, data sensitif jgn disimpan di cookies
            setcookie('nama_user', $_POST['nama'], time()+120); //kl timenya - maka akan menghilangkan cookie yg td
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