<?php

class Box {
    public $width;
    public $height;
    public $length;

    public function volume() {
        return $this->width * $this->height * $this->length;
    }
};

$box1 = new Box();
$box1->width = 10;
$box1->height = 10;
$box1->length = 10;
var_dump($box1->volume());
var_dump($box1);

$box2 = new Box();
$box2->width = 20;
$box2->height = 20;
$box2->length = 20;
var_dump($box2->volume());
var_dump($box2);

var_dump($box1); //box2 tegemine box1 väärtusi ei muuda