<?php

namespace app\test\controller;

use think\Controller;
use QL\QueryList;
class Index extends Controller
{
    //
    public function index()
    {
        return $this->fetch();
    }
    public function wang()
    {
        return $this->fetch();
    }
}
