<?php

class Box {
    public $num;
}

$num1 = 1;
$num2 = &$num1;
$num2 = 2;
var_dump($num1, $num2);

$box1 = new Box();
$box1->num = 1;
$box2 = clone $box1;
$box2->num = 2;
var_dump($box1->num, $box2->num);
var_dump($box1, $box2);

$array = [1,2,3,4,5];

for($i=0;$i<count($array);$i++){
    $num = &$array[$i];
    $num *=2;
}

foreach($array as &$num) {
    $num *=2;
    var_dump($num);
}
var_dump($array);