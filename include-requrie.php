<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Include | Require</h1>
    <hr>

    <?php
        include("./header.php");
        include("./DLH_home.php");
         include("./header.php");
        include("./DLH_home.php");

        include_once("./header.php");
        include_once("C:\Users\Huawei Matebook 15\OneDrive\Desktop\My Portfolio\index.html");

        require("C:\Users\Huawei Matebook 15\OneDrive\Desktop\My Portfolio\index.html");
        require_once("C:\Users\Huawei Matebook 15\OneDrive\Desktop\My Portfolio\index.html");
    ?>
</body>
</html>