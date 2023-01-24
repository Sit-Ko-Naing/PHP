<?php

class Car
{
    // properties

    public $name = "BMW";
    public $price = "12000$"; 

    private $myaddress;
    private $myadd;

    // methods

    function getCarName($userName = '404'){
        $this->getUName = $userName;
        echo $this->getUName;

    }

    function getCarPrice($userPrice = '404'){
        $this->getUPrice = $userPrice;
        echo $this->getUPrice;
    }

    function getCarPrice1($userPrice1 = '404'){
         $this->userPrice1 = $userPrice1;
         return $this->userPrice1;
    }

    function getAddress($address = '404 error'){
        $this->myaddress = $address;
        return $this->myaddress * 3;

    }

    function getAdd($add = '404 add'){
        $this->myadd = $add;
        
    }



}

$result = new Car(); //object create



echo $result->name;
echo "<br>";
echo $result->price;
echo "<br>";
$result->getCarName('KIA');
echo "<br>";
$result->getCarPrice('this is void function');
echo "<br>";

$name2 = $result->getCarPrice1('this is type function');
echo $name2;
echo "<br>";
$name3 = $result->getAddress(35);
echo $name3;

echo "<br>";
$result->getAdd('this is add function');
echo $result->myadd;