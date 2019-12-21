<?php
$a = 1;
if ($a == 0) {
    echo '1. Верно <br>';
} else {
    echo '1. Не верно <br>';
}
////////////////////
$a = 1;
if ($a > 0) {
    echo '2. Верно <br>';
} else {
    echo '2. Не верно <br>';
}
////////////////////
$a = 1;
if ($a < 0) {
    echo '3. Верно <br>';
} else {
    echo '3. Не верно <br>';
}
////////////////////
$a = 1;
if ($a >= 0) {
    echo '4. Верно <br>';
} else {
    echo '4. Не верно <br>';
}
////////////////////
$a = 1;
if ($a == 0) {
    echo '5. Не Верно <br>';
} else {
    echo '5.  Верно <br>';
}
////////////////////
$a = 1;
if ($a != 0) {
    echo '6.  Верно <br>';
} else {
    echo '6. Не верно <br>';
}
////////////////////
$a = 'test';
if ($a == 'test') {
    echo '7. Верно <br>';
} else {
    echo '7. Не верно <br>';
}
///////////////////////////////
$a = '1';
if (gettype($a) == 'string' && $a == 1) {
    echo '8.  Верно <br>';
} else {
    echo '8.  Не верно <br>';
}
////////////////////////
$a = '';
if (!empty($a)) {
    echo '9. Переменная пустая <br>';
} else {
    echo '9. Переменная не пустая <br>';
}
//////////////////////////////////////
$a = '2';
if (!empty($a)) {
    echo '10. Верно <br>';
} else {
    echo '10. Не верно <br>';
}
//////////////////////////////////////////
$var = true;
if ($var) {
    echo '13. Верно <br>';
} else {
    echo '13. Не верно <br>';
}
$var > 0 ? $b = 'Верно' : $b = 'Не верно';
echo $b;
echo 'Число ' . ($var ? 'Верно' : 'Не верно');
/////////////////////////////////////////////
$var = false;
if (!$var) {
    echo '14.  Верно <br>';
} else {
    echo '14. Не Верно <br>';
}
////////////////////////////////////////////////
$a = -3;
if ($a > 0 && $a < 5) {
    echo '15.  Верно <br>';
} else {
    echo '15. Не верно <br>';
}
//////////////////////////////////////////////
$a = -1;
if ($a == 0 || $a == 2) {
    echo '16. ' . $a = $a + 7 . ' <br>';
} else {
    echo '16. ' . $a = $a / 10 . '<br>';
}
/////////////////////////////////////////////////////////
$a = 3;
$b = 5;
if ($a <= 1 && $b >= 3) {
    echo '17. ' . $a = $a + $b . ' <br>';
} else {
    echo '17. ' . $a = $a - $b . '<br>';
}
////////////////////////////////////////////////////////////
$a = 3;
$b = 5;
if (($a > 2 && $a < 11) || ($b >= 6 && $b < 14)) {
    echo '18. Верно <br>';
} else {
    echo '18. Не верно <br>';
}
////////////////////////////////////////////////////////////
$num = 4;
switch ($num) {
    case 1:
        $result = 'Зима';
        break;
    case 2:
        $result = 'Весна';
        break;
    case 3:
        $result = 'Лето';
        break;
    case 4:
        $result = 'Осень';
        break;
}
echo '19. ' . $result . ' <br>';
///////////////////////////////////////////////////////////////////
$day = 30;
if ($day < 11) {
    echo '20. 1<br>';
} elseif ($day > 10 && $day < 21) {
    echo '20. 2<br>';
} elseif ($day > 20 && $day < 31) {
    echo '20. 3<br>';
}
///////////////////////////////////////////////////////////////////
$month = 1;
if ($month == 1 || $month == 2 || $month == 12) {
    echo '21. Зима<br>';
} elseif ($month == 3 || $month == 4 || $month == 5) {
    echo '21. Весна<br>';
} elseif ($month == 6 || $month == 7 || $month == 8) {
    echo '21. Лето<br>';
} elseif ($month == 9 || $month == 10 || $month == 11) {
    echo '21. Осень<br>';
}
/////////////////////////////////////////////////////////////////////////
$a = '796976';
if ($a[0] + $a[1] + $a[2] == $a[3] + $a[4] + $a[5]) {
    echo '26. Верно <br>';
} else {
    echo '26. Не верно <br>';
}
$year = 1700;
if (($year % 4 == 0) && ($year % 100 != 0) || ($year % 400 == 0)) {
    echo '22. Год високосный <br>';
} else {
    echo '22. Год не високосный';
}
$arr = [
    'html',
    'css',
    'php',
    'js',
    'jq',
];
echo '1 .';
foreach ($arr as $key => $value) {
    echo '<br>';
    echo $value;
}
///////////////////////////////////////////
echo '<br>';

$result = 0;
$arr1 = [1, 2, 3, 4, 5];
foreach ($arr1 as $key => $value) {
    $result += $value;
}
////////////////////////////////////////////
echo '<br>';
echo ' 2 .', $result, '<br>';

$result = 0;
$arr1 = [1, 2, 3, 4, 5];
foreach ($arr1 as $key => $value) {
    $result += $value * $value;
}
////////////////////////////////////////////////
echo '<br>';
echo ' 3 .', $result, '<br>';
echo '<br>';
echo '4.';
echo '<br>';
$arr = [
    'green' => 'зеленый',
    'blue' => 'голубой',
    'red' => 'красный',
];
foreach ($arr as $key => $value) {
    echo $key, ' - ';
    echo $value, '<br>';
}
/////////////////////////////////////
echo '<br>';
echo '5.';
$arr = ['Коля' => '200', 'Петя' => '300', 'Вася' => '400'];
foreach ($arr as $item => $value) {
    echo $item . '- зарплата ' . $value . ' долларов' . '<br>';
}
echo '6.';
echo '<br>';
for ($i = 1; $i <= 100; $i++) {
    echo $i, '<br>';
}
//////////////////////////////////
echo '<br>';
echo '7.';
echo '<br>';
for ($i = 11; $i <= 33; $i++) {
    echo $i, '<br>';
}
//////////////////////////////////
echo '<br>';
echo '8.';
echo '<br>';
for ($i = 0; $i <= 100; $i += 2) {
    echo $i, '<br>';
}
//////////////////////////////////
echo '<br>';
echo '9.';
echo '<br>';
$sum = 0;
for ($i = 0; $i <= 100; $i++) {
    $sum += $i;
}
echo $sum;
//////////////////////////////////
echo '<br>';
echo '6.1.';
echo '<br>';
$i = 1;
while ($i <= 100) {
    echo $i, '<br>';
    $i++;

}
$i = 11;
while ($i <= 33) {
    echo $i, '<br>';
    $i++;
}
$i = 0;
while ($i <= 100) {
    echo $i, '<br>';
    $i += 2;
}
$i = 0;
$sum = 0;
while ($i <= 100) {
    $sum += $i;
    $i++;
}
echo $sum;
echo '<br>';
echo '10.';
echo '<br>';
$arr1 = [2, 5, 9, 15, 0, 4,];
foreach ($arr1 as $key => $value) {
    if ($value > 3 && $value < 10) {
        echo $value, '<br>';
    }
}
echo '<br>';
echo '11.';
echo '<br>';
$sum = 0;
$arr1 = [2, 5, -9, 15, 0, 4,];
foreach ($arr1 as $key => $value) {
    if ($value > 0) {
        $sum += $value;
    }
}
echo $sum, '<br>';

echo '<br>';
echo '12.';
echo '<br>';

$arr1 = [1, 2, 5, 9, 4, 13, 4, 10,];
foreach ($arr1 as $key => $value) {
    if ($value == 4) {
        echo 'Есть!';
        echo '<br>';
        break;
    }
}

echo '<br>';
echo '13.';
echo '<br>';
$arr1 = ['10', '20', '50', '90', '47', '136', '412', '1056',];
foreach ($arr1 as $key => $value) {
    if ($value[0] == 1 || $value[0] == 2 || $value[0] == 5) {
        echo $value, '<br>';
    }
}
echo '<br>';
echo '14.';
echo '<br>';
$arr1 = [1, 2, 3, 4, 5, 6, 7, 8, 9,];
foreach ($arr1 as $key => $value) {
    if ($value == 9) {
        echo '-', $value. '-';
    } else {
        echo '-', $value;
    }
}
echo '<br>';
echo '<br>';
echo '15.';
echo '<br>';

$week = [
    'Mon',
    'Th',
    'Thr',
    'Fh',
    'Fr',
    'Sn',
    'Str',
];
foreach ($week as $key => $value) {
    if ($key == 5 || $key == 6) {
        echo '<b>' . $value . '</b><br>';
    } else {
        echo $value, '<br>';
    }
}

echo '<br>';
echo '16.';
echo '<br>';
$day = 6;
$week = [
    'Mon',
    'Th',
    'Thr',
    'Fh',
    'Fr',
    'Sn',
    'Str',
];
foreach ($week as $key => $value) {
    if ($key == $day - 1) {
        echo '<i>' . $value . '</i><br>';
    } else {
        echo  $value, '<br>';
    }
}
$arr = [];
echo '<br>';
echo '17.';
echo '<br>';
for ($i = 1; $i <= 100; $i++) {
    $arr[] = $i;
}
var_dump($arr);

echo '<br>';
echo '19.';
echo '<br>';
$num = 1000;
$i = 0;
while ($num > 50) {
    $num = $num / 2;
    $i++;
}
echo $i, ' ' . $num;

$en = [];
$ru = [];
$arr = ['green'=>'зеленый', 'red'=>'красный', 'blue'=>'голубой'];
foreach ($arr as $key => $value) {
    $en[] = $key;
    $ru[] = $value;

}
var_dump($en);
var_dump($ru);
$a = 10;
$b = 3;
$c = $a % $b;
echo '1. ', $c;
///////////////////////////////////////
echo '<br>';
$a = 15;
$b = 7;
if ($a % $b == 0) {
    echo '2. Делится без остатка. Ответ: ', $a / $b;
} else {
    echo '2. Делится с остатком. Остаток: ', $a % $b;
}
echo '<br>';
///////////////////////////////////////////
$st = pow(2, 10);
echo '3.', $st;
echo '<br>';
///////////////////////////////////////////////
$a = sqrt(245);
echo '4.', $a;
echo '<br>';
////////////////////////////////////
$a = 0;
$arr = [4, 2, 5, 19, 13, 0, 10,];
foreach ($arr as $key => $value) {
    $a = $a + $value * $value;
}
$a = sqrt($a);
echo '5.', $a;
echo '<br>';
///////////////////////////////
echo '<br>';
$a = sqrt(379);
echo $a, '<br>';
echo '6. ', round($a), ' ', round($a,2), ' ', round($a,1);
echo '<br>';
////////////////////////////////////////
echo '7.';
$a = sqrt(587);
$arr = [
    'floor' => floor($a),
    'ceil' => ceil($a),
];
var_dump($arr);
echo '<br>';
////////////////////////////////////////////////////
echo '8.';
echo min(4, -2, 5, 19, -130, 0, 10), ' <br>';
echo max(4, -2, 5, 19, -130, 0, 10), ' <br>';
///////////////////////////////////////////////////////////
echo '<br>';
echo '9.', mt_rand(1, 100);
echo '<br>';
echo '10. ';
$arr = [];
$i = 0;
While ($i <= 10) {
    $arr[] = mt_rand(1, 100);
    $i++;
}
var_dump($arr);
echo '<br>';
//////////////////////////////////////////
$a = 5;
$b = 12;
$c = abs($a - $b);
echo '11. ', $c;
echo '<br>';
///////////////////////////////////////////
echo '13.';
$a = 777;
$arr = [];
$i = 1;
while ($i <= $a) {
    if ($a % $i == 0) {
        $arr[] = $i;
    }
    $i++;
}
var_dump($arr);
echo '<br>';
/////////////////////////////////////////////
$a = 0;
$i = 1;
$b = 0;
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10,];
foreach ($arr as $key => $value) {
    $a += $value;
    if ($a > 10) {
        break;
    }
    $i++;
}
echo '14. ', $i;

$arr1 = [1, 2, -3, 4, -5, ];
foreach ($arr1 as $key => $value) {
    if ($value < 0) {
        $arr1[$key] = abs($value);
    }
}
var_dump($arr1);