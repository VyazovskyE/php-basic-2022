<?php
include "Seventh.php";

function customDump($var): void
{
  echo "<pre>";
  var_dump($var);
  echo "</pre>";
}

$seventh = new Seventh();
$seventh->setA(1);
$seventh->setB(2);
$seventh->setQ(3);
$seventh->setJ(4);

customDump($seventh);
customDump($seventh->pow());
customDump($seventh->devideSub());
