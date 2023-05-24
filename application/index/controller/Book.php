<?php
namespace app\index\controller;

use think\Controller;
use think\Db;
class Book extends Controller
{
    public function book(){
        //         $data=Db::table('doctor')->select();
        //         $this->assign("result",$data);
        //获取病人数据
        $data = Db::table('patient')->where('patNo',session('No'))->find();
        $this->assign('patInfo',$data);
        return $this->fetch();//执行完此方法后返回到视图view
    }
    public function postbook(){
        //提交挂号信息
        
    }
}

