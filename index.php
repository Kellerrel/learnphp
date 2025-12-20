<?php

$array = [1, 2, 3];
var_dump($array[1]);
$array[] = 4;
$array[2] = 22;
$array = [
    'name' => 'Kaspar',
    'age' => 32,
];
var_dump($array['name']);
$array = [
    1,
    'hello' => 'world',
    2,
    3,
    'cool' => 'stuff',
    '4',
    true,
    [1, 2, 3],
];
var_dump($array[5][1]);
$array = [
  [1,2,3],
  [4,5,6],
  [7,8,9],
];
var_dump($array[1][2]);
$array = [
  [[1,2,3],
  [4,5,6],
  [7,8,9],[1,2,3],
  [4,5,6],
  [7,8,9],[1,2,3],
  [4,5,6],
  [7,8,9],],
  [[1,2,3],
  [4,5,6],
  [7,8,9],[1,2,3],
  [4,5,6],
  [7,8,9],[1,2,3],
  [4,5,6],
  [7,8,9],],
  [[1,2,3],
  [4,5,6],
  [7,8,9],[1,2,3],
  [4,5,6],
  [7,8,9],[1,2,3],
  [4,5,6],
  [7,8,9]],
];
var_dump($array[2][2][2]);
$array = [[[[[[1]]]]]];

var_dump($array[0][0][0][0][0][0]);
$array = ['apple', 'cherry', 'banana'];
$text = implode(',', $array);
var_dump($text);