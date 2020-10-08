<?php
//GET
if(isset($_GET['submit'])){
    echo $_GET['nama'];
}
?>

<form action="video_get.php" method="get">
    <input type="text" name="nama">
    <input type="password" name="password">
    <input type="submit" name="submit">
</form>