<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Tugas Pertemuan ke-2 </h1>
    <h2> Belanja Sepatu </h2>
    <?php 

    $nama = "Fano";
    $uang = 300000;
    $jenis_sepatu = "Sandal";

    if($jenis_sepatu == "Olahraga" ) {
        if($uang>=650000){
            echo "Dengan uang sebesar " . $uang;
            $merk = "Adidas";
            $kualitas = 'Lebih dari Diadora dan Airwalk';
            echo "<br>". $nama . " membeli sepatu " . $merk; 
            echo "<br> Kualitas sepatu tersebut adalah " . $kualitas;
        }
        elseif($uang>=450000){
            echo "Dengan uang sebesar " . $uang;
            $merk = "Diadora";
            $kualitas = "Kurang dari Adidas";
            echo "<br>". $nama . " membeli sepatu " . $merk; 
            echo "<br> Kualitas sepatu tersebut adalah " . $kualitas;
        }
        elseif($uang>=200000){
            echo "Dengan uang sebesar " . $uang;
            $merk = "Airwalk";
            $kualitas = "Kurang dari Adidas dan Diadora";
            echo "<br>". $nama . " membeli sepatu " . $merk; 
            echo "<br> Kualitas sepatu tersebut adalah " . $kualitas;
        }
        else {
            echo 'Uang ' . $nama . ' tidak mencukupi';
        }
    }
    else if($jenis_sepatu == "Sandal" ) {
        if($uang>=500000){
            echo "Dengan uang sebesar " . $uang;
            $merk = "Nike";
            $kualitas = 'Lebih dari Rebook dan Crocks';
            echo "<br>". $nama . " membeli Sandal " . $merk; 
            echo "<br> Kualitas sepatu tersebut adalah " . $kualitas;
        }
        elseif($uang>=350000){
            echo "Dengan uang sebesar " . $uang;
            $merk = "Rebook";
            $kualitas = "Kurang dari Nike";
            echo "<br>". $nama . " membeli Sandal " . $merk; 
            echo "<br> Kualitas sepatu tersebut adalah " . $kualitas;
        }
        elseif($uang>=200000){
            echo "Dengan uang sebesar " . $uang;
            $merk = "Crocks";
            $kualitas = "Kurang dari Nike dan Rebook";
            echo "<br>". $nama . " membeli Sandal " . $merk; 
            echo "<br> Kualitas sepatu tersebut adalah " . $kualitas;
        }
        else {
            echo 'Uang '. $nama .  ' tidak mencukupi';
        }
    }

    else{
        echo'Tidak ada pilihan';
    }


    ?>
</body>
</html>