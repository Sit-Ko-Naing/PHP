<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Array Builtin Function 
    <hr>

    <?php

        $arr = ['apple','mango','banana','orange'];
        $arr1 = [1,3,4,65,3,6,8];
        echo count($arr) . '<br>'; // room of array
        echo $arr[0] . $arr[3] . '<br>';
        echo current($arr) . '<br>';
        echo end($arr) . '<br>';
        echo array_rand($arr) . '<br>';
        echo $arr[array_rand($arr)] . '<br>';
        echo array_sum($arr1) . '<br>';

        $number = range(0,20);
        echo "<pre>";
        var_dump($number). '<br>';
        echo array_sum($number). '<br>';
        echo in_array(744,$number) ? "true_number" : "false_number" . '<br>' ; // reply  boolean value // search something in arry with in_array


        $person = [
            'name' => "sitkonaing",
            'job'=>'developer',
            'address'=>'mawlamying'
        ];

        echo array_key_exists('name',$person) ? "true_person" : "false_person" . '<br>';

        var_dump(array_keys($person)) . '<br>';
        var_dump(array_values($person)) . '<br>';

        echo implode("*|*",$number) . '<br>';
        echo join("|\|",$arr) . '<br>';
       
    ?>
</body>
</html>