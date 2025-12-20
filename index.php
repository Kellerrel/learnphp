<?php

class Box {
    public int $width;
    protected $height;
    private $length;

    public function __construct($width, $height, $length) {
        $this->height = $height;
        $this->length = $length;
        $this->width = $width;

        var_dump('Object created');
    }
    
    public function __destruct()
    {
        var_dump('Object destroyed');
    }

    public function __toString()
    {
        return 'some box';
    }

    public function __get($name){
        var_dump($name);
        return 'some value';
    }

    public function __set($name, $value){
        var_dump($name, $value);
    }

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
    use HasSmell;
    public $weightPerUnit;

    public function weight() {
        return $this->volume() * $this->weightPerUnit;
    }
}

trait HasSmell {
    public $smell;

    public function sniff(){
        var_dump($this->smell);
    }
}

function makeBox() {
    $metal1 = new MetalBox(10, 10, 10);
    var_dump($metal1);
}
makeBox();
$metal1 = new MetalBox(10, 10, 10);
var_dump($metal1);
echo $metal1;
var_dump($metal1->coolbeans);
$metal1->catlitter = 'asdasdasd';

var_dump('end');