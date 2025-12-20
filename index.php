<?php

$text = 'hello';
$text = $text . ' ken';
$text .= '!!';
$text = ucwords($text);
var_dump($text);
var_dump($text[2]); //sõne - string
