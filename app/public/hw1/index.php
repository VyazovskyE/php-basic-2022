<?php
# 1. Получить остаток деления 7 на 3
var_dump(7 % 3);
echo "<BR>";

# 2. Получить целую часть сложения 7 и 7,15
var_dump(intval(7 + 7.15));
echo "<BR>";

# 3. Получить корень из 25
var_dump(sqrt(25));
echo "<BR>";

# 4. Получить 4-е слово из фразы
$str4 = "Десять негритят пошли купаться в море.";
var_dump(explode(" ", $str4)[3]);
echo "<BR>";

var_dump(mb_substr($str4, 22, 8, "UTF-8"));
echo "<BR>";

# 5. Получить 17-й символ из фразы
var_dump(mb_substr($str4, 16, 1, "UTF-8"));
echo "<BR>";

# 6. Сделать заглавной первую букву во всех словах фразы
var_dump(mb_convert_case($str4, MB_CASE_TITLE, "UTF-8"));
echo "<BR>";

# 7. Посчитать длину строки
var_dump(mb_strlen($str4, "UTF-8"));
echo "<BR>";

# 8. Правильно ли утверждение true равно 1
var_dump(true == 1);
echo "<BR>";

# 9. Правильно ли утверждение false тождественно 0
var_dump(false === 0);
echo "<BR>";

# 10. Какая строка длиннее three - три
$str10_1 = "three";
$str10_2 = "три";
var_dump(mb_strlen($str10_1, "UTF-8") > mb_strlen($str10_2, "UTF-8"));
echo "<BR>";

# 11. Какое число больше 125 умножить на 13 плюс 7 или 223 плюс 28 умножить 2
var_dump((125 * 13 + 7) > (223 + 28 * 2));
?>
