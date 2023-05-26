<?php
namespace app\index\controller;

use think\Controller;
use think\Db;
class Gettreat extends Controller
{
    public function gettreat(){
          // 获取用户ID
    $userId = session('No');

    // 根据用户ID查询处方表中匹配的处方单号
    $recipeNos = Db::table('recipe')
        ->where('patNo', $userId)
        ->column('recipeNo');

    // 根据处方单号查询清单表中的数据
    $medicationList = Db::table('medicationlist')
        ->whereIn('recipeNo', $recipeNos)
        ->select();

     //获取药品信息
     $medicine= Db::table('medicine')->select();
    // 将数据传递到视图
    $this->assign('medicationList', $medicationList); //用药清单表
    $this->assign('medicinetable',$medicine);//药品表
    $this->assign('prevRecipeNo', 1);//用于前端存放上一个处方表单号
    // 渲染视图
    return $this->fetch();
    }
    //处方单号
    public function getrecipe(){
        //         $data=Db::table('doctor')->select();
        //         $this->assign("result",$data);
        return $this->fetch();//执行完此方法后返回到视图view
    }
    //用药清单
    public function getmedication(){
        //         $data=Db::table('doctor')->select();
        //         $this->assign("result",$data);
        return $this->fetch();//执行完此方法后返回到视图view
    }
}

