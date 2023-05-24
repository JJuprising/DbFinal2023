<?php
namespace app\index\controller;

use think\Controller;
class Recipet extends Controller
{
    public function recipet(){
        //         $data=Db::table('doctor')->select();
        //         $this->assign("result",$data);
        $this->getPatInfo();
        $this->getMedicineInfo();
        return $this->fetch();//执行完此方法后返回到视图view
    }
    public function getPatInfo(){
        $patNo = $_GET['patNo'];
        if(!empty($patNo)){
            $rs = db('patient')->where('patNo',$patNo)->find();
            if(!empty($patNo)){
                $this->assign('patInfo',$rs);
            }
        }
    }
    public function getMedicineInfo(){
        $rs = db('medicine')->select();
        if(!empty($rs)){
            $this->assign('medicInfo',$rs);
        }
    }
    
    public function addCart(){

        $id = input('post.No');
        $this->recipet();
    }
    
    public function dealMedicList($data){
        return $data;
    }
}

