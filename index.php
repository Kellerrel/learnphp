<?php

class Box {
    public static $count;
    public $width;
    public static function getCount() {
        var_dump(self::class);
        var_dump(self::$count);
        var_dump(static::class);
        var_dump(static::$count);
        //var_dump($this->width);
    }
    public function getWidth(){
         var_dump(self::class);
        var_dump(self::$count);
        var_dump(static::class);
        var_dump(static::$count);
        var_dump($this->width);
    }
}
class MetalBox extends Box {

}


Box::$count = 1;
Box::$count = 2;
var_dump(Box::$count, Box::$count);
Box::getCount();
var_dump(Box::class);
MetalBox::getCount();
$box1 = new Box();
$box1->getWidth();