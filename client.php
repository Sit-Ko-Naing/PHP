<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Client Site</h1>
    <h3>get method | post method</h3>

    <!-- GET =>  <a href=""></a>
    POST => <form action="" method="post/get"></form> -->

    <a href="./server.php?name=sitkonaing&job=programmer&address=mawlamyine">Send</a>


    <form action="./server.php" method="post" enctype="multipart/form-data">
        First Name<input type="text" name="FSName" id="">
        Second Name <input type="text" name="SCName" id="">
        <br>

        <select name="gender" id="">
            <option value="M">Male</option>
             <option value="F">Female</option>
        </select>

        <br>

        <input type="file" name = "myImage">
        <button type="submit">Click to Send</button>
    </form>
    <?php  
        
       
    
    
    ?>
</body>
</html>