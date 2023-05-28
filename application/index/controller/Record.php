<?php
namespace app\index\controller;

use think\Controller;
use think\Session;

class Record extends Controller
{
    public function  Record(){
        $this->getRecordID();
        $this->getRecord();
        $this->getDepartInfo();
        $this->getDocInfo();
        return $this->fetch();
    }
    public function getRecord(){
        $departNo = $_GET['departNo'];
        $rs = db('departrecord')->where('departNo',$departNo)->order('aidNo','desc')->select();
        if(!empty($rs)){
            $this->assign('departrecords',$rs);
        }
        $aidPlans = db('aidplan')->select();
        if(!empty($aidPlans)){
            $this->assign('aidPlans',$aidPlans);
        }
    }
    public function getRecordID(){
        $departNo = $_GET['departNo'];
        session('departNo',$departNo);
        $max = db('departrecord')->where('departNo',$departNo)->order('aidNo','desc')->find();
        if(empty($max)){
            $max = '001';
        }else{
            $max = $max['aidNo']+1;
        }
        $this->assign('aidNo',$max);
        session('aidNo',$max);
    }
    
    public function getDepartInfo(){
        $departNo = $_GET['departNo'];  
        if(!empty($departNo)){
            $rs = db('departdocument')
            ->alias('a')
            ->join('patient b','a.patNo = b.patNo')
            ->where('departNo',$departNo)
            ->find();
            if(!empty($rs)){
                $this->assign('data',$rs);
                $records = db('departrecord')
                ->alias('a')
                ->join('aidplan c','a.aidPlan=c.planNo')
                ->where('departNo',$departNo)->order('aidNo','asc')
                ->select();
                if(!empty($records)){
                    $this->assign('records',$records);
                }
            }
        }
    }
    public function getDocInfo(){
        if(Session::get('job')=='doctor'){
            $docNo = Session::get('No');//医生编号
        }
        $docInfo = db('doctor')->where('docNo',$docNo)->find();
        if(!empty($docInfo)){
            //session('docInfo',$docInfo);
            $this->assign('docInfo',$docInfo);
            
        }
    }
    public function dealRecord($planNo,$patSymptom){
        $departNo = Session::get('departNo');
        $aidNo = Session::get('aidNo');
        $data = [
            'departNo' => $departNo,
            'aidNo' => $aidNo,
            'aidPlan' => $planNo,
            'patSymptom' => $patSymptom
        ];
         
        db('departrecord')->insert($data);//插入数据 
        return $planNo;
    
    }
    public function outDepart(){
        $departNo = Session::get('departNo');
        db('departdocument')
        ->where('departNo',$departNo)
        ->where('outdepartDate',NULL)
        ->setField('outdepartDate',date('Y-m-d'));
    }
}

