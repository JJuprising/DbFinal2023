<?php
namespace app\index\controller;

use think\Controller;
use think\Request;
class Manage extends Controller
{
    public function Manage(){
        
        $this->getMedicineInfo();
        return $this->fetch();
    }
    
    public function update_doctor_info(){
        
    }
    
    public function update_department_info(){
        
    }
    
    public function getMedicineInfo(){
        $rs = db('medicine')->select();
        if(!empty($rs)){
            $this->assign('medicInfo',$rs);
        }
    }
    public function deleteMedicine($id){
        
        if(db('medicine')->where('medicineNo',$id)->delete()){
            return 'success';
        }else{
            return 'fail';
        }
    }
    public function  newmedicine(){
        return $this->fetch();
    }
    public function  submitMedicine(Request $request){
        
         $file = $request->file('file');
         $savename = '';
 
        if ($file) {
            $info = $file->validate(['ext'=>'jpg,png'])->rule(function ($file) {
            // 使用自定义的文件保存规则
            return $file->getInfo('type').uniqid();
            })->move(ROOT_PATH . 'public' . DS . 'static' . DS . 'picture',input('post.medicineNo'));

            if ($info) {
                $filename = $info->getSaveName();
                $savename=$filename;
            } else {
                // 文件上传失败的操作
                return $this->error($file->getError());
            }
        } else {
            return $this->error('上传文件不能为空');
        }
        
        
        $data = [
            'medicineNo' => input('post.medicineNo'),
            'medName' => input('post.medName'),
            'price' => input('post.price'),
            'medLeft' => input('post.medLeft'),
            'medUsage' => input('post.medUsage'),
            'medDesc' => input('post.medDesc'),
            'medIngr' => input('post.medIngr'),
            'medPic' => $savename
        ];
         db('medicine')->insert($data);//插入数据
         $this->success('添加成功');
         
    }
}

