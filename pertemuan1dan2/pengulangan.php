<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Loop PHP </h1>

    <?php
    //-------------Pengulangan------
    //for(variableawal(mulai)); batas(syarat); perubahan)

    /*for($i=0; $i<5; $i++){
        echo "Sekolah koding $1 <br>";
    }*/

    $hewan =['Kuda','Bebek','Domba','Cicak'];

   /* for($i=0; $i<count($hewan); $i++){
        echo "------------------";
        echo $hewan[$i];
        echo "------------------ <br>";
    } */

    //untuk mengeluarkan semua isi yg ada dihewan
    /*foreach($hewan as $h){
        echo "------------------";
        echo $h;
        echo "------------------ <br>";
    } */

    /* $data=['nama'=>'Kenny','umur'=>'21','sifat'=>'malas'];
    foreach($data as $key => $value ){
        echo $value . "<br>";
    } */

    //----------- while and do while ------------

    $i=0;
    //while tdk akan mengeksekusi kl syarat tdk memenuhi
    /*while($i < count($hewan)){
       echo $hewan[$i] . "<br>";
       $i++;
    } */

    //do while mengeksekusi satu kali terlebih dahulu walaupun syarat tdk memenuhi
    do
    {
        echo '-----------';
        echo $hewan[$i] . "<br>";
        $i++; 
    } while($i < count($hewan));


    ?>

</body>
</html>