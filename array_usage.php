<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php
         $arr = ['apple','mango','banana','orange',1,8,6,3,2,7,9];

        
        //  array_push($arr,"'sugar'"); // add back
        //  array_unshift($arr,"salt");// add forward
        //  array_pop($arr); // remove back
        //  array_shift($arr); // remove front


         echo "<pre>";
         sort($arr);
         var_dump($arr); // sortong alphabet
        

         rsort($arr);
         var_dump($arr); // reverse sorting alphabet


         $person = [
            'e.name' => "a.sitkonaing",
            'f.job' => "b.web designer",
            "d.address" => "c.mawlamying"
         ];

         asort($person);
         var_dump($person);  // sorting values 

         ksort($person);
          var_dump($person); // reverse sorting key

        arsort($person);
        var_dump($person); // sorting values

        krsort($person);
        var_dump($person); // resverse sorting key 

        shuffle($person);
        var_dump($person);

        shuffle($person);
        var_dump($person);


        



         

        

    ?>
</body>
</html>