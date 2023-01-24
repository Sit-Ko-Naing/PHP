<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation-1</title>

        <!-- Font Awesome -->
        <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        rel="stylesheet"
        />
        <!-- Google Fonts -->
        <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
        rel="stylesheet"
        />
        <!-- MDB -->
        <link
        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css"
        rel="stylesheet"
        />
</head>
<body>

    <?php
        $errorName = $errorEmail = $errorPhone = $errorAddress = "";
        $name=$email=$phone=$address="";
        if(isset($_POST['btnsave'])){
            if($_POST['name'] == null || $_POST['name'] == "" || empty($_POST['name'])){
                $errorName = "Please fill your name...";
            }else{
                $name = $_POST['name'];
            }

            if($_POST['email'] == null || $_POST['email'] == "" || empty($_POST['email'])){
                $errorEmail = "Please fill your email...";
            }else{
                $email = $_POST['email'];
            }

            if($_POST['phone'] == null || $_POST['phone'] == "" || empty($_POST['phone'])){
                $errorPhone = "Please fill your phone...";
            }else{
                $phone = $_POST['phone'];
            }

              if($_POST['address'] == null || $_POST['address'] == "" || empty($_POST['address'])){
                $errorAddress = "Please fill your address...";
            }else{
                $address = $_POST['address'];
            }

            if ($name != "" && $email != "" && $address !="" && $phone != "") {
                echo $name ."<br>";
                 echo $email ."<br>";
                  echo $address ."<br>";
                   echo $phone ."<br>";

            }
            
        }
    ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-6 offset-3 rounded border-lg shadow-lg ">
                <form action="" method="post">
                    <div class="my-3 px-4">
                    <label for="" class="mb-2 fs-5 "> Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter your name">
                    <span class="text-danger fs-10 fw-normal "><?php echo $errorName ?></span>
                </div>
                
                <div class="my-3 px-4">
                    <label for="" class="mb-2 fs-5 "> Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Enter your email ">
                     <span class="text-danger fs-10 fw-normal "><?php echo $errorEmail ?></span>
                </div>

                <div class="my-3 px-4">
                    <label for="" class="mb-2 fs-5 "> Phone</label>
                    <input type="number" name="phone" class="form-control" placeholder="+95  ">
                     <span class="text-danger fs-10 fw-normal "><?php echo $errorPhone ?></span>
                </div>

                <div class="my-3 px-4">
                    <label for="" class="mb-2 fs-5 "> Address</label>
                    <textarea name="address" id="" cols="30" rows="10" placeholder="Enter your address " class="form-control"></textarea>
                     <span class="text-danger fs-10 fw-normal "><?php echo $errorAddress ?></span>
                </div>

                 <div class="my-3 px-4 float-end">
                    <input type="submit" name="btnsave" id="" value="Save" class="btn bg-dark text-white">
                </div>
                </form>

            </div>
        </div>
    
    
    </div>

   
</body>
</html>