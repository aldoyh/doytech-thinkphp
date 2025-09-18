<?php

namespace app\controller;

use app\BaseController;

class Index extends BaseController
{
    public function index()
    {
        return 'مرحبا بك في ThinkPHP8';
    }

    public function hello($name = 'ThinkPHP8')
    {
        return 'مرحبا بك,   ' . $name;
    }
}
