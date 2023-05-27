<?php
namespace app\index\controller;

use think\Controller;
use think\Db;
class Pay extends Controller
{
    public function pay(){
        //         $data=Db::table('doctor')->select();
        //         $this->assign("result",$data);
        $paydata=Db::table('payment')->where('patNo',session('No'))->select();//获取缴费单
        $this->assign('payment',$paydata);
        return $this->fetch();//执行完此方法后返回到视图view
    }
}

