<?php
namespace app\index\controller;

use think\Controller;

class Depart extends Controller
{
    public function Depart(){
       
        return $this->fetch();//执行完此方法后返回到视图view
    }
}

