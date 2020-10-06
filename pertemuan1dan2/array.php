<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Array PHP </h1>

    <?php 
    //-----------------Tipe data array-----------------
    $hewan = array('Kuda','Bebek','Ikan Paus','Kuda');
    $nama = ['Kenny','Jane','Chris'];
    //print_r($hewan); //Menampilkan semua data array
    //echo $nama[2]; //Menampilkan peritem

    //-----Metode Array-------
    //array_unique, _reverse, Shuffle, count, sort
    //print_r(array_unique($hewan)); 
    //print_r(array_reverse($hewan));
    
    /*shuffle($hewan);
    print_r($hewan);*/

    /*sort($hewan);
    print_r($hewan);*/

    //echo count($nama);

    //-----------Associative array--------
    /*$data = array ("nama"=> "Kenny",
                    "umur"=> "20",
                    "kerja"=> "penulis"
    
                    );

    $data2 = array ("alamat"=> "Kenya",
                    "lulusan"=> "S2",
    
                    ); */

        //print_r($data);
        //$data['nama']="Kenny Roggers"; //untuk mengganti data di array
        //echo "Pekerjaannya adalah " . $data['kerja'];
        
        //--------------methode assosiatif array---------------
        //array_values array_keys array_merge

        // print_r(array_values($data)); //mengubah assosiatif array, key menjadi nomor indeks
        //print_r(array_keys($data)); //untuk mengembalikan kata kunci
        //print_r(array_merge($data, $data2));


        //-------multidimensi array-------------
        $data = array(
                    array("programmer","20","males"),
                    array("penulis","21","rajin"),
                    array("pesulap","35","sangat rajin")

        );
        // 00 01 02
        //10 11 12
        //20 21 22

        //mengganti indeks 
        $data[2][0]="proyek manager";
        echo $data[2][2];



    ?>


</body>
</html>