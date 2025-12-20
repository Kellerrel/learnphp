<?php
$num = 11;
if($num > 10) {
    var_dump('Bigger than 10');
} else if ($num === 10) {
    var_dump('Equal to 10');
} else {
    var_dump('Smaller than 10');
}

$day = (int) date('N', strtotime('19.12.2025'));
var_dump($day);

if($day === 1) {
    var_dump('Monday');
} else if($day === 2) {
    var_dump('Tuesday');
}  else if($day === 3) {
    var_dump('Wednesday');
}  else if($day === 4) {
    var_dump('Thursday');
}  else if($day === 5 || $day === 6) {
    var_dump('Partyday');
}   else if($day === 7) {
    var_dump('Sunday');
} else {
    var_dump('Weirdday');
}

switch($day) {
    case 1:
        var_dump('Monday');
        break;
    case 2:
        var_dump('Tuesday');
        break;
    case 3:
        var_dump('Wednesday');
        break;
    case 4:
        var_dump('Thursday');
        break;
    case 5:
        var_dump('Friday friday friday....');
    case 6:
        var_dump('Partyday');
        break;
    case 7:
        var_dump('Sunday');
        break;
    default:
        var_dump('Weirdday');
}