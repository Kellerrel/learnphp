<?php

$bool= true;
$bool = false;
$bool = true && false;
$bool = true && true; //
$bool = true || false; //false kui kõik on false
$bool = !true;
$bool = !false;
$bool = 10 == 10;
$bool = 10 == '10';
$bool = 10 === '10'; //kontrollib tüüpe
$bool = 10 != '10';
$bool = 10 !== '10';
$bool = 10 < 2;
$bool = 10 > 2;
$bool = 10 >= 10;
$bool = 10 <= 10;
$bool = (true && false) || !(true || !false);


var_dump($bool);
false && var_dump('bla');