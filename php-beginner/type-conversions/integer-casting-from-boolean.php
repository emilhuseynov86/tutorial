<?php

error_reporting(-1);

$boolean = true;
$num = 0;

if (0 + $boolean) {
    $num = $num + 1;
}

echo $num;