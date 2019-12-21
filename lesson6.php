<?php
echo '1. ';
$php = 'php';
echo strtoupper($php);
////////////////////////
echo '<br>';
echo '2. ';
$php = 'PHP';
echo strtolower($php);
//////////////////////////////
echo '<br>';
echo '3. ';
$word = 'london';
echo ucfirst($word);
////////////////////////////////
echo '<br>';
echo '4. ';
$word = 'London';
echo lcfirst($word);
/////////////////////////////
echo '<br>';
echo '5. ';
$words = 'london is the capital of great britain';
echo ucwords($words);
//////////////////////////
echo '<br>';
echo '6. ';
$word = 'LONDON';
echo ucfirst(strtolower($word));
//////////////////////////////////
echo '<br>';
echo '7. ';
$word = 'html css php';
echo strlen($word);
/////////////////////////////////
echo '<br>';
echo '8. ';
$password = '1234qwerty';
if (strlen($password) > 5 && strlen($password) < 10) {
    echo 'Пароль подходит';
} else {
    echo 'Пароль не подходит';
}
////////////////////////////////////////
echo '<br>';
$word = 'html css php';
echo '9. ';
echo   substr($word,0,4) , ' ' , substr($word,5,7);
/////////////////////////////////////////////
echo '<br>';
echo '10. ';
$words = 'string ggez';
echo  substr($words,-3);
///////////////////////////////////////////////
echo '<br>';
echo '11. ';
$words = 'http://adsadasdwkill.com';
if (substr($words, 0,7) == 'http://') {
    echo 'Да.';
} else {
    echo 'Нет.';
}
//////////////////////////////////////////////////////
echo '<br>';
echo '12. ';
$words = 'https://vk.com';
if (substr($words, 0,7) == 'http://' || substr($words, 0,8) == 'http://') {
    echo 'Да.';
} else {
    echo 'Нет.';
}
////////////////////////////////////////////////////////////////
echo '<br>';
echo '13. ';
$word = 'https://yandex.png';
if (substr($word,-4) == '.png') {
    echo 'Да.';
} else {
    echo 'Нет.';
}
/////////////////////////////////////////////////////
echo '<br>';
echo '14. ';
$word = 'https://yandex.png';
if (substr($word,-4) == '.jpg' || substr($word,-4) == '.png') {
    echo 'Да.';
} else {
    echo 'Нет.';
}
/////////////////////////////////////////////
echo '<br>';
echo '15. ';
$word = 'gomunkul';
if (strlen($word) > 5) {
    echo substr($word,0,4), '...';
} else {
    echo $word;
}
////////////////////////////////////////////////
echo '<br>';
echo '16. ';
echo str_replace('.','-', '31.12.2013');
//////////////////////////////////////////////////
echo '<br>';
echo '17. ';
$str = 'abubanciban';
echo str_replace(['a', 'b', 'c'], [1, 2, 3], $str);
////////////////////////////////////////////
echo '<br>';
echo '18. ';
$str = '1a2b3c4b5d6e7f8g9h0';
echo str_replace([1,2,3,4,5,6,7,8,9,0],[''], $str );
///////////////////////////////////////////////////////
echo '<br>';
echo '19. ';
$str ='abcbcaabc112c5a2adasbax';
echo strtr($str, ['a' => '1', 'b' => '2', 'c' => '3']), '<br>';
echo '19. ';
echo strtr($str, 'abc', '123');
///////////////////////////////////////
echo '<br>';
echo '20. ';
$str ='abcbcaabc112c5a2adasbax';
echo substr_replace($str, '!!!',3,5);
/////////////////////////////////
echo '<br>';
echo '21. ';
$str = 'abc abc abc';
echo strpos($str,'b');
/////////////////////////////////
echo '<br>';
echo '22. ';
$str = 'abc abc abc';
echo strpos($str,'b',6);
////////////////////////////////////////
echo '<br>';
echo '23. ';
$str = 'abc abc abc';
echo strpos($str,'b',3);
///////////////////////////////////////////
echo '<br>';
echo '24. ';
$str = 'aaa aaa aaa aaa aaa';
echo strpos($str,' ',4);
/////////////////////////////////////////////////
echo '<br>';
echo '25. ';
$str ='dasdw.wqweqwe';
if (strpos($str,'..')) {
    echo 'Да';
} else {
    echo  'Нет';
}
/////////////////////////////////////////////////
echo '<br>';
echo '26. ';
$str ='http://dasdw.wqweqwe';
if (strpos($str,'http://')) {
    echo 'Да';
} else {
    echo  'Нет';
}
//////////////////////////////////////
echo '<br>';
echo '27. ';
$str = 'html css php';
$arr = explode(' ',$str);
var_dump($arr);
///////////////////////////////////
echo '<br>';
echo '28. ';
$arr = ['html', 'css', 'php',];
$str = implode(',', $arr);
echo $str;
///////////////////////////////////////
echo '<br>';
echo '29. ';
$date = '19-12-2019';
$arr = explode('-',$date);
$str = implode('.',$arr);
echo $str;
////////////////////////////////
echo '<br>';
echo '30. ';
$str = '1234567890';
$arr = str_split($str,2);
var_dump($arr);
////////////////////////////////
echo '<br>';
echo '31. ';
$str = '1234567890';
$arr = str_split($str,1);
var_dump($arr);
////////////////////////////////
echo '<br>';
echo '32. ';
$str = '1234567890';
echo implode('-',str_split($str,2));
////////////////////////////////
echo '<br>';
echo '33. ';
$str = ' Hello World ';
echo trim($str);
////////////////////////////////
echo '<br>';
echo '34. ';
$str = '/php';
echo trim($str);
////////////////////////////////
echo '<br>';
echo '35. ';
$str ='слова слова слова';
echo trim($str, '/.'), '.';
////////////////////////////////
echo '<br>';
echo '36. ';
$str = '12345';
echo strrev($str);
////////////////////////////////
echo '<br>';
echo '37. ';
$str = 'палиндромом';
if ($str == strrev($str)) {
    echo 'Да';
} else {
    echo 'Нет';
}
////////////////////////////////
echo '<br>';
echo '38. ';
$str = 'Happy new year!';
echo str_shuffle($str);
////////////////////////////////
echo '<br>';
echo '39. ';
$chars = 'abcdefghijklmnopqrstuvwxyz';
echo substr(str_shuffle($chars),0,5);
////////////////////////////////
echo '<br>';
echo '40. ';
$str = '12345678';
echo number_format($str,0,'',' ');
//////////////////////////////////////////
echo '<br>';
echo '41. <br> ';
$i = 0;
for ($i = 1; $i < 9; $i++) {
    echo str_repeat('x', $i) . '<br>';
}
//////////////////////////////////////////
echo '<br>';
echo '42. <br>';
$i = 0;
for ($i = 1; $i < 9; $i++) {
    echo str_repeat($i, $i) . '<br>';
}
///////////////////////////////////////////////
echo '<br>';
echo '43. ';
echo strip_tags('html, <b>php</b>, js');
///////////////////////////////////////////////
echo '<br>';
echo '44. ';
$str = '<b>forever</b>';
echo strip_tags($str, ['<b></b>']);
///////////////////////////////////////////////
echo '<br>';
echo '45. ';
$str = 'html, <b>php</b>, js';
echo htmlspecialchars($str);
///////////////////////////////////////////////
echo '<br>';
echo '46. ';
echo ord('a'), ' ';
echo ord('b'), ' ';
echo ord('c'), ' ';
echo ord(' ');
///////////////////////////////////////////////
echo '<br>';
echo '47. 97-122';
///////////////////////////////////////////////
echo '<br>';
echo '48. ';
echo chr(33);
///////////////////////////////////////////////
echo '<br>';
echo '49. ';
// 65 - 90
echo $str = chr(mt_rand(65,90));
///////////////////////////////////////////////
echo '<br>';
echo '50. ';
///////////////////////////////////////
echo '<br>';
echo '51. ';
$char = 'a';
if (ord($char) > 64 && ord($char) < 96 ) {
    echo 'Буква большая';
} elseif (ord($char) > 96 && ord($char) < 123 ) {
    echo 'Бква маленькая';
}
///////////////////////////////////////
echo '<br>';
echo '52. ';
$str = 'ab-cd-ef';
echo strchr($str,'-');
//////////////////////////////////
echo '<br>';
echo '53. ';
$str = 'ab-cd-ef';
echo strrchr($str,'-');
//////////////////////////////////
echo '<br>';
echo '54. ';
$str = 'ab--cd--ef';
echo strstr($str,'-');
//////////////////////////////////
echo '<br>';
echo '55. ';
$str = 'var_test_text_hello_world_nigga';
$str = explode('_', $str);
$str = implode(' ', $str);
$str = ucwords($str);
$str = lcfirst($str);
$str = explode(' ', $str);
$str = implode('', $str);
echo $str;
//////////////////////////////////
echo '<br>';
echo '56. ';
echo "# hivaHello" >> README.md;