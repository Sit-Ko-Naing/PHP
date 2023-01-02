<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    pow(x,y) <br>
    sqrt(x) <br>
    abs(x) <br>
    ceil() <br>
    floor(x) <br>
    rand(strat,end) <br>
    max() <br>
    min() <br>

    <hr>

    <?php

        echo pow(2,3) . "<br>"; 
        echo sqrt(9) . "<br>";
        echo abs(-9) . "<br>";
        echo ceil(3.1) . "<br>";
        echo floor(3.1) . "<br>";
        echo rand(1,20) . "<br>";
        echo round(5.4) . "<br>";
         echo round(5.6) . "<br>";

         
        $arr = [2,5,7,3,9,23,46,43,121,231,323,3] ;
        echo max($arr) . "<br>";
        echo min($arr) . "<br>";

    ?>
</body>
</html>