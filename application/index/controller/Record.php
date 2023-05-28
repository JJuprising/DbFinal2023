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
        return $this->fetch();
    }
    public function getRecord(){
        $departNo = $_GET['departNo'];
        $rs = db('departrecord')->where('departNo',$departNo)->order('aidNo','desc')->select();
        if(!empty($rs)){
            $this->assign('departrecords',$rs);
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
    }
    
    public function getDepartInfo(){
        $departNo = $_GET['departNo'];
        if(!empty($patNo)){
            $rs = db('departdocument')->where('departNo',$departNo)->find();
            $records = db('departrecord')->where('departNo',$departNo)->order('aidNo','desc')->find();
    
            if(!empty($rs)){
                $this->assign('departdocument',$rs);
            }
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
        return 'success';
    
    }
}

