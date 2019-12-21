<?php
$name = 'Никита ';
$surname = 'Хивицкий';
$middleName = 'Андреевич';
$age = 18;
$time = 24;
$wait = 0;

//echo('Меня зовут: ' . $name . '<br>');
//echo('Моя фамилия: ' . $surname . '<br>');
//echo('Моё отчество: ' . $middleName . '<br>');
//echo('Мой возраст: ' . $age . '<br>');
//echo('Время: ' . $time . '<br>');


if ($time < 8 || $time > 24) {
    $wait = 8 - $time;
}

if ($age >= 18) {
    if ($wait > 0) {
        echo('приходи через' . $wait . 'часов');
    } else {
        echo($name . 'бухой');
    }
} else {
    $age = 18 - $age;
    if ($wait > 0) {
        echo('приходи через ' . $age . 'лет и' . $time . 'часов');
    } else {
        echo('приходи через ' . $age . ' лет');
    }
}

//
//if ($age >= 18 && $time < 24 && $time > 8) {
//    echo($name . 'будет пьяный');
//} else {
//    if ($age >= 18 && $time > 24 || $time < 8) {
//        $time = 8 - $time;
//        echo('приходите через' . $time);
//    } elseif ($age < 18 && $time > 24 || $time < 8) {
//        $age = 18 - $age;
//        echo('приходите через ' . $age . 'лет');
//    } elseif ($age < 18 && $time < 24 || $time < 8) {
//            $age = 18 - $age;
//            $time = 8 - $time;
//            echo('Приходите через' . $age . 'лет и ' . $time . 'часов');
//        }
//
//
//}
