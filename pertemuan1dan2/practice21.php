<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3> Latihan dari Lesson 2.1 </h3>
    <?php

        /* $first_number = 7;
        $second_number = 21;
            if ($first_number > $second_number){
                echo "$first_number is greater than $second_number";
            }
            else{
            echo "$second_number is greater than $first_number";
            } */

        //---PHP Switch Case----

        $today = "wednesday";
        switch($today){
        case "sunday":
        echo "pray for us sinners.";
        break;
        case "wednesday":
        echo "ladies night, take her out for dinner";
        break;
        case "saturday":
        echo "take care as you go out tonight.";
        break;
        default:
        echo "have a nice day at work";
        break;
        }

    ?>
</body>
</html>