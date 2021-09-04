<?php

namespace app\admin\controller;

use think\Controller;

class Manager extends Controller
{
    //
    public function _initialize()
    {

    }

    //
    public function index()
    {
        return $this->fetch();
    }


    //
    public function quit()
    {
        cookie('id',null);
        $this->success('用户退出','/admin');
    }
}
