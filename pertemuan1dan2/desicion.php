<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Logika di PHP </h1>

    <?php
    //tipe data boolean
    //$hasil1=true;
    //$hasil2= false;

    //-------------if and else-------
   /* $password = '123';

    if($password=='123'){
        echo 'Anda berhasil masuk!';
    }
    else {
        echo 'Gagal! Password salah';
    }
*/

    //=======Operator logika == === >= <=

   /* $uang_progammer = 1000;
    $keyboard       = 2000;
    $uang_penulis   = 4000;

    if ($uang_progammer > $keyboard){
        echo 'dibeli!';
    }
    elseif($uang_penulis >= $keyboard*2){
        echo 'dibeli duakali oleh penulis';
    }
    else{
        echo 'tidak cukup';
    } */

    //--------Switch Case-----------

    $nama = "Kenny";
    
    switch($nama){
        case 'Endy' : 
            echo 'namanya Endy';
        break;
        case 'dy' : 
            echo 'namanya dy';
        break;
        case 'En' : 
            echo 'namanya En';
        break;
        default :
        echo 'tidak ada yang benar';
    }

    ?>
</body>
</html>