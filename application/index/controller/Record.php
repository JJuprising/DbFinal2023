<?php
namespace app\index\controller;

use think\Controller;

class Record extends Controller
{
    public function  Record(){
        return $this->fetch();
    }
}

