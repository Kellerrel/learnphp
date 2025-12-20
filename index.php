<?php

$num = 10;
$num = 10.2;
$name = 'Ken';
$num = 'Hello\n$name';
$num = "Hello\n$name";
$num = <<<END
Hello
$name
END;
$num = true;
$num = false;
$num = null;
$num = array(1, 2, 3, 4);
$num = [1, 2, 3, 4];
$num = new stdClass();
var_dump($num);