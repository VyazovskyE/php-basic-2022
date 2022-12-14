<?php
include "../../vendor/autoload.php";
use Core\Hw7\Seventh;
use Core\Hw7\Sixth;

$seventh = new Seventh();
$seventh->setA(2);
$seventh->setB(3);
$seventh->setJ(4);
$seventh->setQ(5);
var_dump($seventh);

echo "<br>";

$sixth = new Sixth();
$sixth->setA(2);
$sixth->setB(3);
$sixth->setQ(4);
$sixth->setH(5);
var_dump($sixth);
