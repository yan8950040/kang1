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
    public function user()
    {
        $list=\app\admin\model\User::all();
        $this->assign('userlist',$list);
        return $this->fetch();
    }
    public function user_add()
    {

    }
    public function user_do()
    {

    }
    public function user_select($id)
    {
        
    }
    //
    public function quit()
    {
        cookie('id',null);
        $this->success('用户退出','/admin');
    }
}
