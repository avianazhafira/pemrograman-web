<!DOCTYPE html>
<html>
<head> 
<?php
//value utk style paragraf
	$warna = "blue";
    $posisi = "right";

    //value utk data biodata
    $nim="2018071030";
    $namaDepan="Aviana";
    $namaBelakang="Zhafira";
    /* ini adalah komentar lebih dr satu baru
    */
?>
<style>
    p.center {
        text-align: <?php echo $posisi ?>;
        color: <?php echo $warna ?>;
    }
    p.large{
        font-size:300%
    }
</style>
</head>
<body>  
    <p class="center large">Biodata Saya</p>
    <p align="justify">
    NIM : <?php echo $nim ?>
    <br>
    Nama: <?php echo $namaDepan." ".$namaBelakang; ?>
    
    
    <p align="justify">
        Selamat Datang, <?php echo "$namaDepan $namaBelakang" ?>
        <br>
        di perkuliahan pemograman web.
    </p>
    
    
    <p align="justify">
        <?php echo "Selamat Datang, $namaDepan $namaBelakang,
         <br>
         di perkuliahan pemograman web";
         ?>    
    </p>
    
    <?php
    echo "
    <p align='justify'>
        Selamat Datang, $namaDepan $namaBelakang
         <br>
         di perkuliahan pemograman web
        
    </p>";
    ?>

</body>
</html>