<?php

namespace app\admin\controller;

use think\Controller;

class Index extends Controller
{
    //
    public function index()
    {
        return $this->fetch();
    }
    public function login()
    {
        $pass=input("post.pass");
        if(isset($pass))
        {
            $user=\app\admin\model\User::get(1);
            if($pass==$user->pass&&$user->group==1&&$user->tag=='*')
            {
                cookie('id',$user->Id);
                $this->success('登录成功','/admin/manager');
            }
            else
            {
                $this->error('密码错误','/admin');
            }
        }
    }
}
