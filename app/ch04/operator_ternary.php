<?php

$age = 20;

$my_age = $age ?: 18; // # $age ? $age : 18;
echo $my_age . "<br/>"; // 20

$age = 0;
$my_age = $age ?: 18;
echo $my_age . "<br/>"; // 18