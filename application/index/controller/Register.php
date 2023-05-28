<?php
namespace app\index\controller;

class Register
{
    public function Register(){
        return view();
    }
    public function doRegister(){
        //判断是否输入信息
        if(empty(input('post.email'))){
            $this->error('email 不能为空');
        }
        $data = db('tb_member')->where('email', input('post.email'))->find();  //使用了db助手
        $result = Db::execute("insert into tb_member(email,password,jifen,ye) values('" . input('post.email') . "','" .md5(input('post.passw1')) . "',0,0)");
        $this->success('注册成功，跳转到主页',url('index/index'));
    }
}

