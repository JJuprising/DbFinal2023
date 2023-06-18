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
        
        if(empty(input('post.doctor-id'))){
            $this->error('工号未填写！');
        }
        else{
            //工号是主码，所以首先用工号来做重复判断
            $rs = db('doctor')->where('docNo', input('post.No'))->find();
            //没有这个医生
            if(empty($rs)){
                
                //开始检查密码
                if(empty(input('post.doctor-password'))){
                    $this->error('尚未确定密码');
                }
                
                //检查姓名
                if(empty(input('post.doctor-name'))){
                    $this->error('用户名未填写');
                }
                
                //检查职称
                if(empty(input('post.doctor-title'))){
                    $this->error('职称未填写');
                }
                
                //检查电话号码
                if(empty(input('post.doctor-phone'))){
                    $this->error('电话号码未填写');
                }
                
                //检查科室号
                if(empty(input('post.department-id'))){
                    $this->error('科室号未填写');
                }
                
                //都有了就提交
                $data = [
                    'docNo' => input('post.doctor-id'),
                    'docPassword' => input('post.doctor-password'),
                    'docName' => input('post.doctor-name'),
                    'sex' => input('post.doctor-gender'),
                    'degree' => input('post.doctor-title'),
                    'telephone' => input('post.doctor-phone'),
                    'officeNo' => input('post.department-id'),
                ];
                db('doctor')->insert($data);//插入数据
                $this->success('成功！');
            }
            //已经有这个医生
            else{
                $this->error('已经存在相同工号的医生了！');
            }
        }
    }
    
    public function update_department_info(){
        
        if(empty(input('department-id'))){
            $this->error('科室号未填写！');
        }
        else{
            //检查是不是有科室号
            $rs = db('office')->where('officeNo', input('post.department-id'))->find();
            //没有这个科室
            if(empty($rs)){
        
                //科室名称
                if(empty(input('post.department-name'))){
                    $this->error('尚未定义科室名称');
                }
        
                //负责医师
                if(empty(input('post.department-doctor'))){
                    $this->error('负责医师未填写');
                }
        
                //科室位置
                if(empty(input('post.department-location'))){
                    $this->error('科室位置未填写');
                }
                
                //都有了就提交
                $data = [
                    'officeNo' => input('department-id'),
                    'officeName' => input('post.department-name'),
                    'telephone' => input('post.department-doctor'),
                    'chiefDoc' => input('post.department-location')
                ];
                db('office')->insert($data);//插入数据
                $this->success('成功！');
            }
            //已经有这个科室
            else{
                $this->error('已经有相同的科室号了！');
            }
        }
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
