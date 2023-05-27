<?php
namespace app\index\controller;

use think\Controller;
use function think\find;

class Departtreat extends Controller
{
    public function Departtreat(){
        $this->getDocumentInfo();
        return $this->fetch();
    }

    public function getDocumentInfo(){
        $document = db('departdocument')
        ->alias('a')
        ->join('patient b','a.patNo = b.patNo')
        ->select();
       /*  $patInfos = array();
        foreach($document as $doc){
            $patNo = $doc['departNo'];
            $patInfo = db('patient')->where('patNo',$patNo)->find();
            $doc['patInfo'] = '123';
            //$patInfos[$patNo]=$patInfo;
            
        }
        //$this->assign('patInfos',$patInfos); */
        $this->assign('document',$document);
    }
}

