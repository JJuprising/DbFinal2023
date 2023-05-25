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
            session('patNo',$patNo);
            if(!empty($rs)){
                $this->assign('patInfo',$rs);
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
    }
    public function getMedicineInfo(){
        $rs = db('medicine')->select();
        if(!empty($rs)){
            $this->assign('medicInfo',$rs);
        }
    }
    
    public function dealRecipe($medicineList,$symptom){ 
        
        if(Session::get('job')=='doctor'){
            $docNo = Session::get('No');
        }
        $patNo = Session::get('patNo');
        $recipeNo = Session::get('recipeNo');
        if(empty($docNo)||empty($patNo)||empty($recipeNo)){
            return 'dataMissing';
        }
         $medicineList = json_decode($medicineList,true);
         $money = 0;
          foreach ($medicineList as $key =>$value){
             $medicine = db('medicine')->where('medicineNo',$key)->find();
             if(!empty($medicine)){
                 $money+=$medicine['price']*$value;
             }
             $data = [
                    'recipeNo' => $recipeNo,
                    'medicineNo' => $key,
                    'medQuantity' => $value
                    ];
             db('medicationlist')->insert($data);
         }
         
         $data = [
                'recipeNo' => $recipeNo,
                'symptom' => $symptom,
                'money' => $money,
                'docNo' => $docNo,
                'patNo' => $patNo
                 ];
         
         db('recipe')->insert($data);
/*          return 'success'; */   
    }
}

