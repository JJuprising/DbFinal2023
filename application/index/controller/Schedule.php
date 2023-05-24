<?php
namespace app\index\controller;

use think\Controller;
use think\Db;

class Schedule extends Controller
{

    public function schedule()
    {
        // $data=Db::table('doctor')->select();
        // $this->assign("result",$data);
        // 1判断是否登录
        if (empty(session('No'))) {
            $this->error('请先登录!', 'login/login');
        }
        // 2查找所有医生排班的信息
        // $data = Db::table('schedule')->where('docNo',session('No'))->select();
        $schedata = Db::table('schedule')->select();
        $this->assign('result', $schedata);
        $docdata = Db::table('doctor')->select();
        $this->assign('docdata', $docdata);
        return $this->fetch(); // 执行完此方法后返回到视图view
    }

    public function setschedule()
    {
        
        // 排班
        if (empty(input('post.doctorNo'))) {
            $this->error('工号不能为空');
        }
        if (empty(input('post.date'))) {
            $this->error('日期不能为空');
        }
        if (empty(input('post.shift'))) {
            $this->error('日期不能为空');
        }
        
        if (empty(input('post.room'))) {
            $this->error('诊室号不能为空');
        }
        
        // 插入schedule表
        $result = Db::execute("INSERT INTO schedule (docNo, officeNo, dutyDate, dutyShift, RoomNo) VALUES (?, ?, ?, ?, ?)", [
            input('post.doctorNo'),
            input('post.doctorOffice'),
            input('post.date'),
            input('post.shift'),
            input('post.room')
        ]);
        
        $this->success('添加排班成功', url('schedule/schedule'));
    }
}

