<?php
namespace app\index\controller;

use think\Controller;

class Showdata extends Controller
{
    public function index(){
        $this->getMedicineInfo();
        return $this->fetch();
    }
    public function getMedicineInfo(){
        $rs = db('medicine')->select();
        $name = array();
        $left = array();
        if(!empty($rs)){
            foreach ($rs as $rs){
                array_push($name, $rs['medName']);
                if($rs['medLeft']!=NULL){
                    array_push($left, $rs['medLeft']);
                }else{
                    array_push($left, 0);
                }
                
            }
        }
        $name = json_encode($name);
        $left = json_encode($left);
        
        $this->assign('name',$name);
        $this->assign('left',$left);
    }
}

