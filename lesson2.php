<?php
$count = 1;
for ($i = 0; $count >= 50; $i++) {
    $count = $count + 2;
    echo($count . '<wr>');
}
////////////////////////////////
$a = 1;
if (isset($a)) {
    echo 'Верно <br>';
} else {
    echo 'Не верно <br>';
}
/////////////////////////////////
$a = 1;
if (!isset($a)) {
    echo 'Верно <br>';
} else {
    echo 'Не верно <br>';
}
$data = [];