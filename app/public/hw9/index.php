<?php
# 1. Создать скрипт который генерирует массив с
# рандомными числами. Длина массива 50 элементов.

$array = [];
for ($i = 0; $i < 50; $i++) {
	$array[] = rand(1, 100);
}

echo "<pre>";
print_r($array);
echo "</pre>";

# 2. Посчитать сумму элементов массива
# с помощью функции php и без.

$sum1 = array_sum($array);

echo "Сумма элементов массива: $sum1 <br>";

$sum2 = 0;
foreach ($array as $value) {
	$sum2 += $value;
}

echo "Сумма элементов массива: $sum2 <br>";

# 3. Посчитать произведение элементов массива
# с помощью функции и без.

$mult1 = array_product($array);

echo "Произведение элементов массива: $mult1 <br>";

$mult2 = 1;
foreach ($array as $value) {
	$mult2 *= $value;
}

echo "Произведение элементов массива: $mult2 <br>";

# 4. Достать минимальное число с массива.

$min1 = min($array);

echo "Минимальное число массива: $min1 <br>";

$min2 = $array[0];
foreach ($array as $value) {
	if ($value < $min2) {
		$min2 = $value;
	}
}

echo "Минимальное число массива: $min2 <br>";

# 5. Достать максимальное число с массива.

$max1 = max($array);

echo "Максимальное число массива: $max1 <br>";

$max2 = $array[0];
foreach ($array as $value) {
	if ($value > $max2) {
		$max2 = $value;
	}
}

echo "Максимальное число массива: $max2 <br>";

# 6. Разделить массив на два массива, один будет
# содержать только четные числа, второй только нечетные.

$evenArray = [];
$oddArray = [];

foreach ($array as $value) {
	if ($value % 2 == 0) {
		$array1[] = $value;
	} else {
		$array2[] = $value;
	}
}

echo "<pre>";
print_r($array1);
echo "</pre>";
echo "<pre>";
print_r($array2);
echo "</pre>";

