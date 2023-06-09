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
        $maxnum=Db::table('bookingform')->max('bookingNo');
        $nownum=$maxnum+1;
        $this->assign('bookNo',$nownum);
        return $this->fetch();//执行完此方法后返回到视图view
    }
    public function postbook(){
        //提交挂号信息
//        echo input('post.bookDate'),input('post.doctor'),session('No');
        if(empty(input('post.bookDate'))){
            $this->error('挂号日期不能为空');
        }
        if(empty(input('post.doctor'))){
            $this->error('接诊医生不能为空');
        }
        $result = Db::execute("INSERT INTO bookingform (bookingNo, bookingTime, docNo, patNo) VALUES(?,?,?,?)"
            ,[null,input('post.bookDate'),input('post.doctor'),session('No')]);
    
        $this->success('挂号成功', url('book/book'));
    }
    public function cancel(){
        //点击取消按钮
        //跳转到主页
        $this->redirect(url('index/index'));
    }
}

