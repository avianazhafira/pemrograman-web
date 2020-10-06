<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Fungsi PHP </h1>

    <?php
        //------------Fungsi --------------

       /* function panggil(){
            echo "--------------";
            echo " sekolah koding";
            echo "--------------";
        }

        function jarak(){
            echo "<br>";
        }

        panggil();
        jarak();
        panggil();
        jarak();
        panggil(); */

        //Parameter

        /* function print_text($text, $angka){
            $text = "Gedung ". $text . " " . $angka;
            echo "-----------";
            echo $text;
            echo "-----------";
        }

        function jarak(){
            echo "<br>";
        }

        print_text("Koding",21);
        jarak();
        print_text("Perawat",21);
        jarak();
        print_text("Mengemudi",213);
        jarak();

        //-----Return Fungsi-----
        function menghitung($x, $y){
            $z = $x + $y;
            return $z;
        }

        $hasil = menghitung(2,5)*10;
        echo "Hasil dari penjumlahan ". $hasil; */

        //------Scope-----
        $a = 20000;
        $b = 3;

        function menghitung(){
            global $a, $b;
            //$c = $GLOBALS['a] + $GLOBALS['b];
            $c = $a + $b;
            return $c;
        }

        echo menghitung();

    ?>
</body>
</html>