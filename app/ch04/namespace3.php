<?php

require "yse/Sample.php";

use yse\Sample;

$sample = Sample::factory();
$sample->tell(); // my name is yse and my age is 10

echo "\n";

$sample = new yse\Sample();
$sample->add_age(5)->tell(); // my name is yse and my age is 15