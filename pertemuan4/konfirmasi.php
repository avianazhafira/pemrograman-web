<?php

if (isset($_POST['tombolSubmit'])){
    $nama= $_POST['namadepan'];
    $nama1= $_POST['namabelakang'];
    $email= $_POST['email'];

    echo $nama." ". $nama1;
    echo "<br>". $email;

    
}
else{
    echo "Mohon maaf ... ";
}


?>