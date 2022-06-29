<?php

error_reporting(-1);

$boolean = true;
$str = $boolean . ' alma';
echo $str .  '<br>';
echo gettype($str);