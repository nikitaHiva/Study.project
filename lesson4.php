<?php
$word = 'hello';
echo('Задание 1. Ответ :' . ' ' . $word[0] . ' ' . $word[1] . ' ' . $word[4] . '<br>');

echo('Задание 2. Ответ : ' . 24 * 60 * 60 . '<br>');

$var = 1;
$var += 12;
$var -= 14;
$var *= 5;
$var /= 7;
$var++;
$var--;
$var *= $var;
echo('Задание 3. Ответ : ' . $var . '<br>');

$name = 'Nekita';
$name[1] = 'i';
echo('Задание 4. Ответ : ' . $name . '<br>');

$newSum = 0;
$sum = '123';
for ($i = 0; $i < strlen($sum); $i++) {

    $newSum = $newSum + $sum[$i];
}
echo('Задание 5. Ответ : ' . $newSum . '<br>');

$arr = [
    'Привет, ',
    'мир',
    '!',
];
echo 'Задание 6. Ответ : ' . $arr[0] . $arr[1] . $arr[2] . '<br>';
$workMoney = [
    'Коля' => 1000,
    'Петя' => 500,
    'Олег' => 100,
];
echo 'Задание 7. Ответ : ' . $workMoney['Коля'] . ' ' . $workMoney['Петя'];

$newCount = [1, 2, 3, 4, 5];
$count[] = 1;
$count[] = 2;
$count[] = 3;
$count[] = 4;
$count[] = 5;
var_dump($count);
var_dump($newCount);

$green = [
    'cms'=>['joomla', 'wordpress', 'drupal'],
    'colors'=>['blue'=>'голубой', 'red'=>'красный', 'green'=>'зеленый']
];
var_dump($green);
echo 'Задание 8. Ответ : ' . $green['cms'][0] . ' ' . $green['cms'][2] . ' ' . $green['colors']['green'] . ' ' . $green['colors']['red'];

var_dump(array_reverse($count));
$count = array_reverse($count);
for ($j = 0; $j < count($count);$j++){
  echo $count[$j];
}
echo '<br>';
foreach ($count as $pizda => $huy) {
    echo $huy . ' ';
    echo $pizda . ' ';
    echo '<br>';
}