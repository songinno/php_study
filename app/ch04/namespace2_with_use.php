<?php

include "Answerbook/user.php";
include "Answerbook/PHP/user.php";
include "Answerbook/PYTHON/user.php";

use AnswerBook\User as User;
use AnswerBook\PHP\User as PhpUser;
use AnswerBook\PYTHON\User as PythonUser;

$user1 = new User();
$user2 = new PhpUser();
$user3 = new PythonUser();

echo $user1->getNamespaceName() . "\n"; // AnswerBook
echo $user2->getNamespaceName() . "\n"; // AnswerBook\PHP
echo $user3->getNamespaceName() . "\n"; // AnswerBook\PYTHON