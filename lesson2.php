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
$spells = [
    'Fire' => [
        'damage' => 250,
        'manacost' => 200,
    ],
    'bolt' => [
        'damage' => 100,
        'manacost' => 50,
    ],
    'meatHook' => [
        'damage' => 400,
        'manacost' => 160,

    ]
    ,
    'iceFreezing' => [
        'damage' => 230,
        'manacost' => 90,
    ],
    'microWave' => ''
];

$spells['microWave'] = [
    'damage' => 300,
    'manacost' => 30,
];

$spells['krit'] = [
    'damage' => 4000,
    'manacost' => 0,
];
$spells['meatHook']['cd'] = 10;


var_dump($spells);
//var_dump($arr1);
//$bolt = ('BOLT, damage 300 , manacost 150' .'<br>');
//$fire = ('Fire, damage 250 , manacost 200'.'<br>');
//$meatHook = ('Meat hook, damage 360 , manacost 300'.'<br>');
//$iceFreezing = ('Ice freezing, damage 150 , manacost 60'.'<br>');
//$microWave = ('Micro wave, damage 300 , manacost 120'.'<br>');
//$spells = array($bolt , $fire , $meatHook, $iceFreezing, $microWave);
//echo $spells[2];
//var_dump($bolt);
//var_dump($spells);
////print_r($spells);
//$value = 1;
