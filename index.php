<?php

class Box {
    public $width; //väärtust saab kirjutada ja lugeda kõikjal
    protected $height; //väärtust saab lugeda klasssi sees, väljapool ei saa, subclassis saab ka lugeda
    private $length; //ainult klassi sees kus see sätitud on

    public function setLength(int $length) {
        if($length<0){
            throw new Exception('You are stupid');
       }
        $this->length = $length;
    }

    public function volume() {
        return $this->width * $this->height * $this->length;
    }
}

class MetalBox extends Box {
    public $weightPerUnit;

    public function weight() {
        return $this->volume() * $this->weightPerUnit;
    }
}

$metal1 = new MetalBox();
$metal1->width = 10;
//$metal1->height = 10;
$metal1->setLength(-123);
var_dump($metal1);