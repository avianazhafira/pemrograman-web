<?php
//POST = tidak ada parameter dibagian url
// if(isset($_GET['submit'])){
//     echo $_GET['nama'];
// }
if(isset($_POST['submit'])){
        echo $_POST['nama'];
    }
?>

<form action="video_post.php" method="post">
    <input type="text" name="nama">
    <input type="password" name="password">
    <input type="submit" name="submit">
</form>