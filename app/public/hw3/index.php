<?php

$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];

# посчитать длину массива
var_dump(count($arr));
echo "<BR>";

# переместить первые 4 элемента массива в конец массива
$arr = array_merge(array_slice($arr, 4), array_slice($arr, 0, 4));
var_dump($arr);
echo "<BR>";

# получить сумму 4,5,6 элемента
var_dump(array_sum(array_slice($arr, 3, 3)));
echo "<BR>";

$firstArr = [
  'one' => 1,
  'two' => 2,
  'three' => 3,
  'foure' => 5,
  'five' => 12,
];

$secondArr = [
  'one' => 1,
  'seven' => 22,
  'three' => 32,
  'foure' => 5,
  'five' => 13,
  'six' => 37,
];

# найти все элементы которые отсутствуют в первом массиве и присутствуют во втором
var_dump(array_diff_key($secondArr, $firstArr));
echo "<BR>";

# найти все элементы которые присутствую в первом и отсутствуют во втором
var_dump(array_diff_key($firstArr, $secondArr));
echo "<BR>";

# найти все элементы значения которых совпадают 
$same = array_intersect_assoc($firstArr, $secondArr);
var_dump(array_keys($same));
echo "<BR>";

# найти все элементы значения которых отличаются
$differs = array_diff_assoc($firstArr, $secondArr);
var_dump(array_keys($differs));
echo "<BR>";

$multiArr = [
  'one' => 1,
  'two' => [
    'one' => 1,
    'seven' => 22,
    'three' => 32,
  ],
  'three' => [
    'one' => 1,
    'two' => 2,
  ],
  'foure' => 5,
  'five' => [
    'three' => 32,
    'foure' => 5,
    'five' => 12,
  ],
];

# получить все вторые элементы вложенных массивов
$result = array_reduce($multiArr, function($carry, $item) {
  if (is_array($item)) {
    $keys = array_keys($item);

    if (count($keys) > 1) {
      $carry[] = $item[$keys[1]];
    }
  }
  return $carry;
}, []);
var_dump($result);
echo "<BR>";

# получить общее количество элементов в массиве
var_dump(array_sum(array_map(function($item) {
  return is_array($item) ? count($item) : 1;
}, $multiArr)));
echo "<BR>";
# считая вложенный массив за один элемент
var_dump(count($multiArr, COUNT_RECURSIVE));
echo "<BR>";

# получить сумму всех значений в массиве
var_dump(array_sum(array_reduce($multiArr, function($carry, $item) {
  if (is_array($item)) {
    $carry = array_merge($carry, array_values($item));
  } else {
    $carry[] = $item;
  }
  return $carry;
}, [])));
echo "<BR>";
