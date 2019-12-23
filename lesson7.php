<?php
echo '1. ';
$arr = ['a','b','c','d','e',1,2,3];
echo count($arr);
///////////////////////
echo '<br>';
echo '2. ';
$arr = ['a','b','c','d','e',1,2,3];
echo $arr[count($arr) - 1];
///////////////////////
echo '<br>';
echo '3. ';
$arr = ['a','b','c','d','e',1,2,3];
var_dump(in_array(3,$arr));
///////////////////////
echo '<br>';
echo '4. ';
$arr = [1,2,3,4,5];
echo array_sum($arr);
///////////////////////
echo '<br>';
echo '5. ';
$arr = [1,2,3,4,5];
echo array_product($arr);
////////////////////////////////
echo '<br>';
echo '6. ';
$arr = [1,2,3,4,5];
echo array_sum($arr) / count($arr);
////////////////////////////////
echo '<br>';
echo '7. ';
$arr = range(1,100);
//var_dump($arr);
////////////////////////////////
echo '<br>';
echo '8. ';
$arr = range('a','z');
//var_dump($arr);
////////////////////////////////
echo '<br>';
echo '9. ';
$arr = range(1,100);
$arr = range('1','9',);
echo implode('-', $arr);
////////////////////////////////
echo '<br>';
echo '10. ';
$arr = range(1,100);
echo array_sum($arr);
////////////////////////////////
echo '<br>';
echo '11. ';
$arr = range(1,10);
echo array_product($arr);
///////////////////////////////
echo '<br>';
echo '12. ';
$arr = [1,2,3];
$arr1 = ['a', 'b', 'c'];
//var_dump(array_merge($arr,$arr1));
/////////////////////////////////
echo '<br>';
echo '13. ';
$arr = [1,2,3,4,5];
$result = array_slice($arr,1,3);
//var_dump($result);
///////////////////////////////
echo '<br>';
echo '14. ';
array_splice($arr,1,2);
//var_dump($arr);
///////////////////////////////
echo '<br>';
echo '15. ';
$arr = [1,2,3,4,5];
array_splice($arr,5,0, [2,3,4]);
//var_dump($arr);
///////////////////////////////
echo '<br>';
echo '16. ';
$arr = [1,2,3,4,5];
array_splice($arr,2,0, ['a','b','c']);
//var_dump($arr);
///////////////////////////////
echo '<br>';
echo '17. ';
$arr = [1,2,3,4,5];
array_splice($arr,1,0, ['a','b']);
array_splice($arr,6,0, ['c']);
array_splice($arr,8,0, ['e']);
//var_dump($arr);
///////////////////////////////
echo '<br>';
echo '18. ';
$arr = [
    'a'=>1,
    'b'=>2,
    'c'=>3,
];
$keys = (array_keys($arr));
$values = (array_values($arr));
///////////////////////////////
echo '<br>';
echo '19. ';
$keys = [1,2,3,4,5];
$values = ['a','b','c','d','e'];
$arr = array_combine($keys,$values);
//var_dump($arr);
///////////////////////////////
echo '<br>';
echo '20. ';
$arr = [
    'a'=>1,
    'b'=>2,
    'c'=>3,
];
array_flip($arr);
//var_dump($arr);
///////////////////////////////
echo '<br>';
echo '21. ';
$arr = [1,2,3,4,5];
$arr = array_reverse($arr);
//var_dump($arr);
///////////////////////////////
echo '<br>';
echo '22. ';
$arr = ['a', '-', 'b', '-', 'c', '-', 'd'];
echo array_search($arr,'-');