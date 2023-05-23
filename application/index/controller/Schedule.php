<?php
namespace app\index\controller;

use think\Controller;
use think\Db;
class Schedule extends Controller
{
    public function schedule(){
        //         $data=Db::table('doctor')->select();
        //         $this->assign("result",$data);
                //1判断是否登录
        if(empty(session('No'))){
            $this->error('请先登录!','login/login');
        }
        //2查找所有医生排班的信息
//         $data = Db::table('schedule')->where('docNo',session('No'))->select();
        $data = Db::table('schedule')->select();
        $this->assign('result',$data);

        return $this->fetch();//执行完此方法后返回到视图view
    }
}

