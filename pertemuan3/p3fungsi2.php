<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
        /*
            Buat halaman untuk menghitung luas segitiga dimana inputan berasal dari kode program.

            Luas segitiga
            alas = 10
            tinggi = 20
            Luas = 100
        */

            function LuasSegitiga($x, $y){
                $z = 0.5 * $x * $y;
                return $z;
            }

            
            $hasil = LuasSegitiga(10,20);
            echo "Hasil dari luas segitiga adalah ". $hasil;

        ?>
</body>
</html>

