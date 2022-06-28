<?php

error_reporting(-1);

$number = 10;
$float = 10.2;
$string = 'PHP';
$bool = false;
$array = [1, 2, 3];
$x = null;

echo gettype($number) . '<br>'; // integer
echo gettype($float) . '<br>'; // double
echo gettype($string) . '<br>'; // string
echo gettype($bool) . '<br>'; // boolean
echo gettype($array) . '<br>'; // array
echo gettype($x) . '<br>'; // NULL