<?php

function hello() {
    var_dump('hello');
}

hello();

function helloName($name = 'Nameless') {
    var_dump("Hello $name!");
}

helloName('Ken');
helloName('Martin');
helloName(); //kui lahter jäetakse tühjaks, siis default väärtus


function sum($a, $b) {
    return $a+$b; //peale returni midagi edasi ei tehta sellest kohas
}

$answer = sum(2,4);
var_dump($answer);

function values(...$values) {
    var_dump(...$values); //... prindib eraldi int() numbrid välja mitte array enam
}

values(1, 2, 3, 4, 5, 6);

function name(string $name):string { //string lõpus viitab tagastus tüübile
    return ucwords($name);
}

// name(['toomas']);

function recursive($i) {
    var_dump($i);
    if($i < 10){
        recursive($i+1);
    }
}

recursive(0);