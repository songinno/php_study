<?php

interface WebApp
{
    public function register($id, $password, $name);

    public function login($id, $password);

    public function logout($id);
}

interface CMS
{
    public function post($subject);
}

class WebSite implements WebApp, CMS
{

    public function register($id, $password, $name)
    {
        echo "사용자 등록 : 아이디 = {$id}, 이름 = {$name} \n";
    }

    public function login($id, $password)
    {
        echo "로그인 : {$id} \n";
    }

    public function logout($id)
    {
        echo "로그아웃 : {$id} \n";
    }

    public function post($subject)
    {
        echo "게시물 등록 : {$subject}";
    }
}

$website = new WebSite();

$id = "hong";
$password = "123";
$name = "홍길동";
$subject = "게시물 제목입니다.";

$website->register($id, $password, $name);
$website->login($id, $password);
$website->post($subject);
$website->logout($id);