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
    public function querylist()
    {        

       //采集某页面所有的图片
       $data = QueryList::get('https://yj1.ceea3a8ea1f.pw/pw/html_data/14/2109/5525443.html')->find('img')->attrs('src');


       //打印结果
       print_r($data->all());



    }
}
