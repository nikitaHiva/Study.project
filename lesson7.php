<?php
echo '1. ';
$arr = ['a', 'b', 'c', 'd', 'e', 1, 2, 3];
echo count($arr);
///////////////////////
echo '<br>';
echo '2. ';
$arr = ['a', 'b', 'c', 'd', 'e', 1, 2, 3];
echo $arr[count($arr) - 1];
///////////////////////
echo '<br>';
echo '3. ';
$arr = ['a', 'b', 'c', 'd', 'e', 1, 2, 3];
echo(in_array(3, $arr));
///////////////////////
echo '<br>';
echo '4. ';
$arr = [1, 2, 3, 4, 5];
echo array_sum($arr);
///////////////////////
echo '<br>';
echo '5. ';
$arr = [1, 2, 3, 4, 5];
echo array_product($arr);
////////////////////////////////
echo '<br>';
echo '6. ';
$arr = [1, 2, 3, 4, 5];
echo array_sum($arr) / count($arr);
////////////////////////////////
echo '<br>';
echo '7. ';
$arr = range(1, 100);
//var_dump($arr);
////////////////////////////////
echo '<br>';
echo '8. ';
$arr = range('a', 'z');
//var_dump($arr);
////////////////////////////////
echo '<br>';
echo '9. ';
$arr = range(1, 9,);
echo implode('-', $arr);
////////////////////////////////
echo '<br>';
echo '10. ';
$arr = range(1, 100);
echo array_sum($arr);
////////////////////////////////
echo '<br>';
echo '11. ';
$arr = range(1, 10);
echo array_product($arr);
///////////////////////////////
echo '<br>';
echo '12. ';
$arr = [1, 2, 3];
$arr1 = ['a', 'b', 'c'];
//var_dump(array_merge($arr,$arr1));
/////////////////////////////////
echo '<br>';
echo '13. ';
$arr = [1, 2, 3, 4, 5];
$result = array_slice($arr, 1, 3);
//var_dump($result);
///////////////////////////////
echo '<br>';
echo '14. ';
array_splice($arr, 1, 2);
//var_dump($arr);
///////////////////////////////
echo '<br>';
echo '15. ';
$arr = [1, 2, 3, 4, 5];
$result = array_splice($arr, 1, 3, );
var_dump($result);
///////////////////////////////
echo '<br>';
echo '16. ';
$arr = [1, 2, 3, 4, 5];
array_splice($arr, 2, 0, ['a', 'b', 'c']);
//var_dump($arr);
///////////////////////////////
echo '<br>';
echo '17. ';
$arr = [1, 2, 3, 4, 5];
array_splice($arr, 1, 0, ['a', 'b']);
array_splice($arr, 6, 0, ['c']);
array_splice($arr, 8, 0, ['e']);
//var_dump($arr);
///////////////////////////////
echo '<br>';
echo '18. ';
$arr = [
    'a' => 1,
    'b' => 2,
    'c' => 3,
];
$keys = (array_keys($arr));
$values = (array_values($arr));
///////////////////////////////
echo '<br>';
echo '19. ';
$keys = [1, 2, 3, 4, 5];
$values = ['a', 'b', 'c', 'd', 'e'];
$arr = array_combine($keys, $values);
//var_dump($arr);
///////////////////////////////
echo '<br>';
echo '20. ';
$arr = [
    'a' => 1,
    'b' => 2,
    'c' => 3,
];
array_flip($arr);
//var_dump($arr);
///////////////////////////////
echo '<br>';
echo '21. ';
$arr = [1, 2, 3, 4, 5];
$arr = array_reverse($arr);
//var_dump($arr);
///////////////////////////////
echo '<br>';
echo '22. ';
$arr = ['a', '-', 'b', '-', 'c', '-', 'd'];
echo array_search('-', $arr);
///////////////////////////////
echo '<br>';
echo '23. ';
$arr = ['a', '-', 'b', '-', 'c', '-', 'd'];
array_splice($arr, array_search('-', $arr), 1);
//var_dump($arr);
///////////////////////////////
echo '<br>';
echo '24. ';
$arr = ['a', 'b', 'c', 'd', 'e'];
$arr = array_replace($arr, [0 => '!', 3 => '!!']);
//var_dump($arr);
////////////////////////////////////
echo '<br>';
echo '25. ';
$arr = ['3' => 'a', '1' => 'c', '2' => 'e', '4' => 'b'];
sort($arr);
//var_dump($arr);
////////////////////////////////////
echo '<br>';
echo '26. ';
$arr = [
    'a' => 1,
    'b' => 2,
    'c' => 3,
];
$key = array_rand($arr);
echo $key;
///////////////////////////////
echo '<br>';
echo '27. ';
$arr = [
    'a' => 1,
    'b' => 2,
    'c' => 3,
];
$key = array_rand($arr);
echo($arr[$key]);
////////////////////////////////////
echo '<br>';
echo '28. ';
$arr = ['a', 'b', 'c', 'd', 'e', 1, 2, 3];
shuffle($arr);
//var_dump($arr);
////////////////////////////////////
echo '<br>';
echo '29. ';
$arr = range(1, 25);
shuffle($arr);
//var_dump($arr);
////////////////////////////////////
echo '<br>';
echo '30. ';
$arr = range('a', 'z');
shuffle($arr);
//var_dump($arr);
/////////////////////////////////////////
echo '<br>';
echo '31. ';
$arr = range('a', 'z');
shuffle($arr);
echo implode(array_splice($arr, 0, 6));
/////////////////////////////////////////
echo '<br>';
echo '32. ';
$arr = ['a', 'b', 'c', 'b', 'a'];
$arr = array_unique($arr);
//var_dump($arr);
/////////////////////////////////////////
echo '<br>';
echo '33. ';
$arr = [1, 2, 3, 4, 5];
echo array_shift($arr), ' ', array_pop($arr);
//var_dump($arr);
/////////////////////////////////////////
echo '<br>';
echo '34. ';
$arr = [1, 2, 3, 4, 5];
array_unshift($arr, 0);
array_push($arr, 6);
//var_dump($arr);
/////////////////////////////////////////
echo '<br>';
echo '35. ';
$arr = [1, 2, 3, 4, 5, 6, 7, 8];
foreach ($arr as $key => $value) {
    echo array_shift($arr);
    echo array_pop($arr);
}
/////////////////////////////////////////
echo '<br>';
echo '36. ';
$arr = ['a', 'b', 'c'];
$arr = array_pad($arr, 6, '-');
//var_dump($arr);
///////////////////////////////////////////////
echo '<br>';
echo '37. ';
$arr = [];
$arr = array_pad($arr, 10, 'x');
//var_dump($arr);
///////////////////////////////////////////////
echo '<br>';
echo '38. ';
$arr = range(1,20);
//var_dump(array_chunk($arr,4));
///////////////////////////////////////////////
echo '<br>';
echo '39. ';
$arr = ['a', 'b', 'c', 'b', 'a'];
$arr = array_count_values($arr);
//var_dump($arr);
///////////////////////////////////////////////
echo '<br>';
echo '40. ';
$arr = [1, 2, 3, 4, 5];
$result = array_map('sqrt', $arr);
//var_dump($result);
///////////////////////////////////////////////
echo '<br>';
echo '41. ';
$arr = ['<b>php</b>', '<i>html</i>'];
$result = array_map('strip_tags', $arr);
//var_dump($result);
///////////////////////////////////////////////
echo '<br>';
echo '42. ';
$arr = [' a ', ' b ', ' c '];
$result = array_map('trim', $arr);
//var_dump($result);
///////////////////////////////////////////////
echo '<br>';
echo '43. ';
$arr = [1, 2, 3, 4, 5];
$arr1 = [3, 4, 5, 6, 7];
$result = array_intersect($arr,$arr1);
var_dump($result);
///////////////////////////////////////////////
echo '<br>';
echo '44. ';
$arr = [1, 2, 3, 4, 5];
$arr1 = [3, 4, 5, 6, 7];
$result = array_diff($arr,$arr1);
///////////////////////////////////////////////
echo '<br>';
echo '45. ';
$string = '1234567890';
$arr = str_split($string);
echo array_sum($arr);
///////////////////////////////////////////////
echo '<br>';
echo '46. ';
$value = range(1, 26);
$key = range('a', 'z');
$arr = array_combine($key, $value);
var_dump($arr);
///////////////////////////////////////////////
echo '<br>';
echo '47. ';
$arr = range(1, 9);
var_dump(array_chunk($arr,3));
///////////////////////////////////////////////
echo '<br>';
echo '48. ';
$arr = [1, 2, 4, 5, 5];
$arr = array_unique($arr);
sort($arr);
array_pop($arr);
echo $arr[count($arr) - 1];

