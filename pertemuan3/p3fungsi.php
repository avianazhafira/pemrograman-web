<?php
    function fungsiku($namaDepan,$namabBelakang ="Smith"){
        //Smith adalah default
        //kode program fungsi
        echo "Halo fungsi";
        echo "<br> Nama saya ". $namaDepan. " ". $namabBelakang;
    }
    function jarak(){
        echo "<br>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        fungsiku("Aviana" , "Zhafira");
        jarak();
        fungsiku("Aviana");
    ?>
</body>
</html>