<?php

error_reporting(-1);

$programmingLanguages = ['HTML', 'CSS', 'PHP', 'JavaScript', 'Java', 9 => 'Go', 10 => 'Rust'];
unset($programmingLanguages[3]);

var_dump($programmingLanguages);