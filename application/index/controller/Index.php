<?php
namespace app\index\controller;

use think\Controller;
use think\Db;
//首页下方的主题内容，除掉导航栏
class Index extends Controller
{
    public function index()
    {
        return $this->fetch();
    }
}
