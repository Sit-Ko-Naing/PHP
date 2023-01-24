<!-- setName and getName -->

<?php

class Name{

    private $name;

    function setName($setname){
        $this->name = $setname;
       
    }

    function getName(){
       
        return $this->name;
    }

}

$result = new Name();

$result->setName('Sit Ko Naing'); //for public
// echo $result->name;

$Gname = $result->getName(); // for private
echo $Gname;

