<?php

spl_autoload_register(function ($class) {
    include $class . '.php';
    echo $class . "\n"; // yse\Sample
});

use yse\Sample;

$sample = Sample::factory();
$sample->tell(); // my name is yse and my age is 10

echo "\n";

$sample = new yse\Sample();
$sample->add_age(5)->tell(); // my name is yse and my age is 15