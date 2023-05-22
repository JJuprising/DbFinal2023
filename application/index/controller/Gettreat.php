<?php
namespace app\index\controller;

use think\Controller;
class Gettreat extends Controller
{
    public function gettreat(){
        //         $data=Db::table('doctor')->select();
        //         $this->assign("result",$data);
        return $this->fetch();//执行完此方法后返回到视图view
    }
}

