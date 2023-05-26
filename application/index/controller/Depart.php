<?php
namespace app\index\controller;

use think\Controller;
use think\Session;

class Depart extends Controller
{
    public function Depart(){
        
        $this->getPatientInfo();
        return $this->fetch();//执行完此方法后返回到视图view
    }
    public function getPatientInfo(){
        $info = Session::get("patInfo");
        if(!empty($info)){
            $this->assign('patInfo',$info);
        }else{
            return $this->redirect('treat/treat');
        }
        
    }
}

