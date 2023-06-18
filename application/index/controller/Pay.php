<?php
namespace app\index\controller;
use think\Request;
use app\index\model\Payment;
use think\Controller;
use think\Db;
class Pay extends Controller
{
    public function pay(){
        //         $data=Db::table('doctor')->select();
        //         $this->assign("result",$data);
        $paydata=Db::table('payment')->where('patNo',session('No'))->select();//获取缴费单
        $this->assign('payment',$paydata);
        return $this->fetch();//执行完此方法后返回到视图view
    }
    public function getpay(){
        $orderID = input('get.id');
        $order = Payment::get($orderID);
        $order->paymentState='已缴费';
        $order->paymentDate = date("Y-m-d H:i:s");
        $order->save();
        $this->redirect('pay/pay');
    }
    public function delete()
    {
        // 事务处理开始
        Db::transaction(function () {
            $orderID = input('post.orderID');
            $order = Payment::get($orderID);
            $order->delete();
        });
            return "success";
    }
    //评价界面
    public function evaluate(){
        $docNo = input('get.docNo');
        $data = Db::table('doctor')->where('docNo', $docNo)->select();
        $this->assign('results', $data);
        $paymentNo=input('get.paymentNo');
        $this->assign('evapaymentNo',$paymentNo);
        return $this->fetch();
    }
    //提交评价
    public function doEvaluate(Request $request){
//        $orderID = input('post.orderID/d');
//         $datas = Shoplist::where('orderID', $orderID)->select();
//         foreach ($datas as $shoplist) {
//             $SLID=$shoplist->SLID;
//             $shoplist->email = session('email');
//             $shoplist->pjstar = $request->param('pjstar'.$SLID);
//             $shoplist->pjcontent = $request->param('pjcontent'.$SLID);
//             $shoplist->pjip = $request->ip();
//             $shoplist->pjtime = date('Y-m-d H:i:s');
//             $shoplist->save();
//         }

//         $paymentNo = input('post.orderID');
//         $order = Db::table('payment')->where('paymentNo', $paymentNo)->select();
        $orderID = input('post.orderID');
        $order = Payment::get($orderID);
        $order->status = '已评价';
        //$order->cltime = date('Y-m-d H:i:s');
        $order->save();
        $this->redirect('pay/pay');
    }
}

