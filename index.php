<?php

class Box {
    public $width;
    public $height;
    public $length;

    public function volume() {
        return $this->width * $this->height * $this->length;
    }
}

class MetalBox extends Box { //extends võtab boxi aluseks
    public $weightPerUnit;

    public function weight() {
        return $this->volume() * $this->weightPerUnit;
    }
}

$metal1 = new MetalBox();
$metal1->width = 10;
$metal1->height = 10;
$metal1->length = 10;
$metal1->weightPerUnit = 2;
var_dump($metal1);
var_dump($metal1->volume());
var_dump($metal1->weight());

