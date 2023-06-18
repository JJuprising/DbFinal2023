<?php
namespace app\index\controller;

use think\Controller;
use think\Db;
use think\Session;

class Treat extends Controller
{
    public function treat(){
        
        $this->getPatientList();
        return $this->fetch();//执行完此方法后返回到视图view
    }
    public function recipe(){
        redirect('recipet/recipet');
        //return $this->fetch();
    }
    public function getPatientList(){
        $bookingData = db('bookingform')->order('bookingTime','desc')->where('docNo',Session::get('No'))->select();
        if(!empty($bookingData)){
//             session('bookingData',$bookingData);
//             $this->assign('bookingData',$bookingData);

                $count = 0;
                $info = array();
            foreach ($bookingData as $data){
                $rs = db('patient')->where('patNo',$data['patNo'])->find();
                $info[$count] = $rs+$data;
                $count++;
            }
            $this->assign('patInfo',$info);
        }else{
            $this->error('bookingform表不存在');
        }
    }
    //病人详情页
    public function patinfo(){
        $patNo = $_GET['patNo'];
        if(!empty($patNo)){
            $rs = db('patient')->where('patNo',$patNo)->find();
    
            if(!empty($rs)){
                $this->assign('patInfo',$rs);
                session('patNo',$patNo);
                session('patInfo',$rs);
            }
        }
        return $this->fetch();
    }
}

