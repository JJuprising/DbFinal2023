<?php
namespace app\index\controller;

use think\Controller;
use think\Session;

class Depart extends Controller
{
    public function Depart(){
        
        $this->getPatientInfo();
        $this->getDepartDocNo();
        $this->getDate();
        $this->getDocInfo();
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
    public function getDepartDocNo(){
        
        $max = db('departdocument')->order('departNo','desc')->find();
        if(empty($max)){
            $max = '1000001';
        }else{
            $max = $max['departNo']+1;
        }
        session('departNo',$max);
        $this->assign('departNo',$max);
    }
    public function getDate(){
        $date = date('Y-m-d');
        //session('date',$date);
        $this->assign('date',$date);
    }
    public function getDocInfo(){
        if(Session::get('job')=='doctor'){
            $docNo = Session::get('No');//医生编号
        }
        $docInfo = db('doctor')->where('docNo',$docNo)->find();
        if(!empty($docInfo)){
            //session('docInfo',$docInfo);
            $this->assign('docInfo',$docInfo);
            $this->getWardInfo($docInfo);
        }
    }
    public function getWardInfo($docInfo){
        $wards = db('ward')->where('officeNo',$docInfo['officeNo'])->column('wardNo');
        if(!empty($wards)){
            $this->assign('wards',$wards);
            $beds = array();
            foreach ($wards as $ward){
                 $bed = db('bed')->where('wardNo',$ward)->column('bedNo');
                if(!empty($bed)){
                    $beds[$ward]=$bed;
                }
                else{
                    $beds[$ward]=array('000');
                }
            }
            $this->assign('beds',$beds);
        }
    }
    public function dealDepartdoc($wardNo,$bedNo){
        
    }
}

