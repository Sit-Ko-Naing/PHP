<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Constant Declaration</h1>
    <hr>

    <?php

        $name = 'Sitkonaing'; // local 
        define("CName","ESRC",false); // local 
        echo CName . "<br>";

        $arr = ['apple','mango','banana'];
        define("AName",$arr,false);
        echo AName[1];
    ?>
</body>
</html>