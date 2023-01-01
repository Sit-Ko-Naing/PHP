<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    strlen()<br>
    str_word_count()<br>
    strrev()<br>
    str_shuffle()<br>
    strpos(str,search)<br>
    substr(str,start,end)<br>
    strtoupper()<br>
    str_lower<br>
    strip_tags()<br>
    str_replace()<br>
    trim()<br>
    str_split()<br>
    explode()<br>

    <hr>
 
    <?php

        $name = "sit ko naing";
        $test = "<h1>This is Header!</h1>";
        echo $name."<br>";
        echo strlen ($name) . "<br>";
        echo str_word_count($name)."<br>";
        echo strrev ($name) ."<br>";
        echo str_shuffle($name) . "<br>";
        echo strpos($name,"o"). "<br>";
        echo substr($name,0,7) . "<br>";
        echo strtoupper($name) . "<br>";
        echo strtolower($name) . "<br>";
        echo ucfirst($name) . "<br>";
        echo ucwords($name) . "<br>";
        echo strip_tags($test). "<br>";
        echo str_replace("ko","shwe",  $name). "<br>";
        echo "<pre>";
        var_dump(str_split($name)); // stirng to array
        var_dump(str_split($name,3));
        var_dump(explode( " ", $name));
         var_dump(explode( " ", $test,3));
          var_dump(explode( " ", $name,2));






    ?>

</body>
</html>