<?php
namespace app\index\controller;

use think\Controller;
class Book extends Controller
{
    public function book(){
        //         $data=Db::table('doctor')->select();
        //         $this->assign("result",$data);
        return $this->fetch();//执行完此方法后返回到视图view
    }
}

