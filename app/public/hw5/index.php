<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HW5</title>
</head>

<body>

<?php
include 'helpers.php';

# Создать функцию принимающую массив произвольной 
# вложенности и определяющий любой элемент номер которого
# передан параметром во всех вложенных массивах.
function findElement(array $array, string|int $elementKey): array
{
  $result = [];
  foreach ($array as $key => $value) {
    if (is_array($value)) {
      $result = array_merge($result, findElement($value, $elementKey));
    } elseif ($key == $elementKey) {
      $result[] = $value;
    }
  }
  return $result;
}

$array = [
  'a' => 1,
  'b' => 2,
  'c' => [
    'd' => 3,
    'e' => 4,
    'f' => [
      'g' => 5,
      'h' => 6,
      'i' => [
        'j' => 7,
        'k' => 8,
        'l' => 9,
      ],
    ],
  ],
];

$indexed_array = [
  1,
  2,
  [
    3,
    4,
    [
      5,
      6,
      [
        7,
        8,
        9,
      ],
    ],
  ],
];

customDump(findElement($array, 'k'));
customDump(findElement($indexed_array, 1));


# Создать функцию которая считает все буквы b в переданной
# строке, в случае если передается не строка функция должна возвращать false
function countBs($string): int|false
{
  if (!is_string($string)) {
    return false;
  }
  $count = 0;
  for ($i = 0; $i < strlen($string); $i++) {
    if ($string[$i] == 'b') {
      $count++;
    }
  }
  return $count;
}

customDump(countBs('bbbbaaaabbb'));
customDump(countBs('bb'));
customDump(countBs([]));

# Создать функцию которая считает сумму значений
# всех элементов массива произвольной глубины
function sumArray(array $array): int|float
{
  $sum = 0;
  foreach ($array as $value) {
    if (is_array($value)) {
      $sum += sumArray($value);
    } else {
      $sum += is_numeric($value) ? $value : 0;
    }
  }
  return $sum;
}

customDump(sumArray($indexed_array));
customDump(sumArray([1, 1.3, 1, [1, 1]]));
customDump(sumArray([1, 'a', 'b']));

# Создать функцию которая определит сколько квадратов меньшего
# размера можно вписать в квадрат большего размера размер возвращать в float
function countSquares(int|float $bigSquare, int|float $smallSquare): float
{
  $res = 0;
  if ($bigSquare >= $smallSquare && $smallSquare !== 0) {
    $res = $bigSquare / $smallSquare;
  }
  return floatval($res);
}

customDump(countSquares(10, 2));
customDump(countSquares(10, 20));
customDump(countSquares(10, 3));
customDump(countSquares(0, 0));

?>
</body>

</html>
