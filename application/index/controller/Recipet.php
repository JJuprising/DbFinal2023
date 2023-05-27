<?php
namespace app\index\controller;

use think\Controller;
use think\Session;
class Recipet extends Controller
{
    
    public function recipet(){
        $this->getRecipetNo();
        $this->getPatInfo();
        $this->getMedicineInfo();
        return $this->fetch();//执行完此方法后返回到视图view
    }
    public function getPatInfo(){
        $patNo = $_GET['patNo'];
        if(!empty($patNo)){
            $rs = db('patient')->where('patNo',$patNo)->find();
            
            if(!empty($rs)){
                $this->assign('patInfo',$rs);
                session('patNo',$patNo);
                session('patInfo',$rs);
            }
        }
    }
    public function getRecipetNo(){
        $max = db('recipe')->order('recipeNo','desc')->find();
        if(empty($max)){
            $max = '1000000';
        }else{
            $max = $max['recipeNo']+1;
        }
        session('recipeNo',$max);
        $this->assign('recipeNo',$max);
    }
    public function getMedicineInfo(){
        $rs = db('medicine')->select();
        if(!empty($rs)){
            $this->assign('medicInfo',$rs);
        }
    }
    
    public function dealRecipe($medicineList,$symptom){ 
        
        if(Session::get('job')=='doctor'){
            $docNo = Session::get('No');//医生编号
        }
        $patNo = Session::get('patNo');//病人编号
        $recipeNo = Session::get('recipeNo');//处方编号
        if(empty($docNo)||empty($patNo)||empty($recipeNo)){//三者缺一不可
            return 'dataMissing';
        }
         $medicineList = json_decode($medicineList,true);//json转数组
         
         
         $docInfo = db('doctor')->where('docNo',$docNo)->find();//找医生信息
         if(!empty($docInfo)){
             $degree = $docInfo['degree'];//找职称
             $charge = db('charge')->where('degree',$degree)->find();//找诊疗价格
             if(!empty($charge)){
                 $money = $charge['price'];
             }else{
                 $money = 5;
                 return 'No chargeInfo';
             }
         }else{
             $money = 5;
             return 'No docInfo';
         }
         
          foreach ($medicineList as $key =>$value){//键值对为 药品编号 - 数量
             /* $medicine = db('medicine')->where('medicineNo',$key)->find();//算药品价格
             if(!empty($medicine)){
                 $money+=$medicine['price']*$value;
             } */
             $data = [
                    'recipeNo' => $recipeNo,
                    'medicineNo' => $key,
                    'medQuantity' => $value
                    ];
             db('medicationlist')->insert($data);//插入数据
         }
         
         $data = [
                'recipeNo' => $recipeNo,
                'symptom' => $symptom,
                'money' => $money,
                'docNo' => $docNo,
                'patNo' => $patNo
                 ];
         
         db('recipe')->insert($data);//插入数据
         return 'success'; 
    }

}

