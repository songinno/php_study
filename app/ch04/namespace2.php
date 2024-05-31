<?php

include "Answerbook/user.php";
include "Answerbook/PHP/user.php";
include "Answerbook/PYTHON/user.php";

$user1 = new \AnswerBook\User();
$user2 = new \AnswerBook\PHP\User();
$user3 = new \AnswerBook\PYTHON\User();

echo $user1->getNamespaceName() . "\n"; // AnswerBook
echo $user2->getNamespaceName() . "\n"; // AnswerBook\PHP
echo $user3->getNamespaceName() . "\n"; // AnswerBook\PYTHON