<?php

error_reporting(-1);

$integer = 5;
$float = 15.5;
$str1 = $integer . ' alma';
$str2 = $float . ' sm';

echo $str1 .  '<br>';
echo $str2 .  '<br>';
echo gettype($str1) . '<br>';
echo gettype($str2) . '<br>';