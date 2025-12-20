<?php

for($i=0;$i<10;$i++) {
    var_dump($i);
}

for($i=10;$i>0;$i--) {
    var_dump($i);
}


for($i=1;$i<10_000_000;$i*=2) {
    var_dump($i);
}

$time = time();
var_dump($time);
$i = 0;
while($time+3 > time()) {
    $i++;
}
var_dump($i);

while(false) {
    var_dump('WHILE');
}

do {
    var_dump('DO');
} while(false);

$array = ['apple', 'cherry', 'pear'];

foreach($array as $value) {
    var_dump($value);
}

foreach($array as $i => $fruit) {
    var_dump($i, $fruit);
}