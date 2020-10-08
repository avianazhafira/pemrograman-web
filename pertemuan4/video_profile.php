<?php

session_start();
    //untuk video login pake yg bawah ini
    //echo 'ini halaman profile'.$_GET['nama'];

    //untuk cookie pake yg bawah ini
    //echo 'ini halaman profile';

    //untuk membuktikan bahwa cookie sdh tersimpan blm
    //echo 'ini halaman profile'. $_COOKIE['nama_user'];

    //session
    echo 'ini halaman profile'. $_SESSION['nama_user'];

?>