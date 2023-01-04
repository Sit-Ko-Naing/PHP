<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <h1>Encrypt | Decrypt</h1>
    <hr>

    <?php

        $name = "SitKoNaing";
        $encName = md5($name);
        $secencName = sha1($name);
        $encName3 = crypt($name,"SN");
        echo $encName;
        echo "<br>";    
        echo $secencName;
        echo "<br>";
        echo $encName3;
    ?>

    <hr>
    <h3>Password Hash</h3>
    <hr>

    <?php

        $password = "password123";

        $hashPassword =  password_hash($password,PASSWORD_DEFAULT);
        echo $hashPassword;
        echo "<br>";
        echo password_hash($password,PASSWORD_BCRYPT);
        echo "<br>";
        var_dump( password_verify("password123",$hashPassword));
       var_dump( password_verify($password,$hashPassword));
    ?>
</body>
</html>