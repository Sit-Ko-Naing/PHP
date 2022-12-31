<?php

$name = "mgmg1";

if ($name == "koko") {
    echo "i am koko";
} elseif ($name == "mgmg") {
    echo " i am mgmg";
} else {
    echo " Error 404";
}

echo "<br><br> The End !!";


echo "<br>-----------------------------------------------------------------------------";

// ---------------------------------------------

$car = ["BMW", "TOYOTA", "KIA", "Honda"];

echo count($car);

for ($i = 0; $i < count($car); $i++) {

    echo $car[$i] . "<br>";
}

// -------------------------------------------------------------------

foreach ($car as $item) {
    echo $item . "<br>";
}


// while

$num = 1;

while ($num <= 10) {
    echo $num . "<br>";
    $num++;
}

// ------------------------------------------------------------

// do while
$num = 2;

do {
    echo $num . "<br>";
    $num++;
} while ($num <= 20);

// ---------------------------------------------------------------

// function

function outputMessage($x)
{
    echo 'THis is output Message.';
    echo $x;
}

// outputMessage();
outputMessage("this is varialble passthrough.");

function outputMessage1($x, $y)
{
    echo 'THis is output Message.';
    echo $x + $y;
}

outputMessage1(10, 20);



function outputMessage2($x, $y)
{
    return $x + $y;
}

$ret = outputMessage2(60, 20);
echo $ret;
