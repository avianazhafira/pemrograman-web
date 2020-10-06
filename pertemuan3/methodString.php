<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //String Method

       /* $text = "Halo Semua";
        echo strlen($text);    */

        /* $text = "Halo Semua";
        echo str_word_count($text); */

        /* $text = "Halo Semua";
        echo str_replace("Halo","Hai", $text); */
        
        /* $text = "Halo Semua";
        echo str_repeat("Halo ", 10); */

        $text = "Halo Semua";
        echo str_repeat (str_replace("Halo", "Hai" , $text),10); 

        ?>

</body>
</html>