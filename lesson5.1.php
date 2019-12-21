<?php
//$arr = [
//    'html',
//    'css',
//    'php',
//    'js',
//    'jq',
//];
//echo '1 .';
//foreach ($arr as $key => $value) {
//    echo '<br>';
//    echo $value;
//}
/////////////////////////////////////////////
//echo '<br>';
//
//$result = 0;
//$arr1 = [1, 2, 3, 4, 5];
//foreach ($arr1 as $key => $value) {
//    $result += $value;
//}
//////////////////////////////////////////////
//echo '<br>';
//echo ' 2 .', $result, '<br>';
//
//$result = 0;
//$arr1 = [1, 2, 3, 4, 5];
//foreach ($arr1 as $key => $value) {
//    $result += $value * $value;
//}
//////////////////////////////////////////////////
//echo '<br>';
//echo ' 3 .', $result, '<br>';
//echo '<br>';
//echo '4.';
//echo '<br>';
//$arr = [
//    'green' => 'зеленый',
//    'blue' => 'голубой',
//    'red' => 'красный',
//];
//foreach ($arr as $key => $value) {
//    echo $key, ' - ';
//    echo $value, '<br>';
//}
///////////////////////////////////////
//echo '<br>';
//echo '5.';
//$arr = ['Коля' => '200', 'Петя' => '300', 'Вася' => '400'];
//foreach ($arr as $item => $value) {
//    echo $item . '- зарплата ' . $value . ' долларов' . '<br>';
//}
//echo '6.';
//echo '<br>';
//for ($i = 1; $i <= 100; $i++) {
//    echo $i, '<br>';
//}
////////////////////////////////////
//echo '<br>';
//echo '7.';
//echo '<br>';
//for ($i = 11; $i <= 33; $i++) {
//    echo $i, '<br>';
//}
////////////////////////////////////
//echo '<br>';
//echo '8.';
//echo '<br>';
//for ($i = 0; $i <= 100; $i += 2) {
//    echo $i, '<br>';
//}
////////////////////////////////////
//echo '<br>';
//echo '9.';
//echo '<br>';
//$sum = 0;
//for ($i = 0; $i <= 100; $i++) {
//    $sum += $i;
//}
//echo $sum;
////////////////////////////////////
//echo '<br>';
//echo '6.1.';
//echo '<br>';
//$i = 1;
//while ($i <= 100) {
//    echo $i, '<br>';
//    $i++;
//
//}
//$i = 11;
//while ($i <= 33) {
//    echo $i, '<br>';
//    $i++;
//}
//$i = 0;
//while ($i <= 100) {
//    echo $i, '<br>';
//    $i += 2;
//}
//$i = 0;
//$sum = 0;
//while ($i <= 100) {
//    $sum += $i;
//    $i++;
//}
//echo $sum;
//echo '<br>';
//echo '10.';
//echo '<br>';
//$arr1 = [2, 5, 9, 15, 0, 4,];
//foreach ($arr1 as $key => $value) {
//    if ($value > 3 && $value < 10) {
//        echo $value, '<br>';
//    }
//}
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