<?php
namespace app\index\controller;

use think\Controller;
use think\Db;
use think\captcha\Captcha;
use think\Url;

class Login extends Controller
{
    public function Login(){
//         $data=Db::table('doctor')->select();
//         $this->assign("result",$data);
        return $this->fetch();//执行完此方法后返回到视图view
    }
    public function dologin(){
        //判断是否输入验证码
        if(empty(input('post.Code'))){
            $this->error('请输入验证码');
        }else{
            $this->check(input('post.Code'));
        }
        //判断是否输入登录信息
        if(empty(input('post.No'))){
            $this->error('账号 不能为空');
        }
        //判断用户类型
        if (input('post.job')=="doctor"){
            //查询doctor表
            //查找数据库，看输入的账号是否存在
            $rs = db('doctor')->where('docNo', input('post.No'))->find();
            if(empty($rs)){
                $this->error('账号错误');
            }
            //如果 工号 存在，则判断密码是否匹配
            if($rs['docPassword'] != md5(input('post.Password'))){
                $this->error('密码错误');
            }
            session('No',$rs['docNo']);
        }else if (input('post.job')=="patient"){
            //查询patient表
            $rs = db('patient')->where('patNo', input('post.No'))->find();
            if(empty($rs)){
                $this->error('账号错误');
            }
            //如果 工号 存在，则判断密码是否匹配
            if($rs['patPassword'] != md5(input('post.Password'))){
                $this->error('密码错误');
            }
            session('No',$rs['patNo']);
        }else if (input('post.job')=="manage"){
            //查询administrator表
            $rs = db('manage')->where('manNo', input('post.No'))->find();
            if(empty($rs)){
                $this->error('账号错误');
            }
            //如果 工号 存在，则判断密码是否匹配
            if($rs['manPassword'] != md5(input('post.Password'))){
                $this->error('密码错误');
            }
            session('No',$rs['manNo']);
           // $this->redirect(url('manage/manage'));
        }
        
        //如果用户名和密码正确，则将登录的工号存入 session
        
        session('job',input('post.job'));
        
        //跳转到主页
        $this->redirect(url('index/index'));   
//         return view('index/index',[
//             'No'=>$rs['docNo'],
//             'job'=>input('post.job'),
//         ]);
    }
    public function logOut(){
        session('No',null);
        session('job',null);
        //跳转到主页
        $this->redirect(url('index/index'));
    }
    public function check($code='')
    {
        $captcha=new Captcha();
        if(!$captcha->check($code))	{
            $this->error('验证码错误');
        }
        //         else	{
        //             $this->success('验证码正确');
        //         }
    }
}

