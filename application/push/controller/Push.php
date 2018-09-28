<?php
namespace app\push\controller;

use think\Controller;
use 

class Push extends Controller
{

    public function index() {
        Gateway::sendToClient($client_id, "Hello $client_id\r\n");;
    }
   
    public function hello () {
        $uid = $_POST['uid'];
        session('uid', $uid);
        echo session('uid');die();
        // $view = new View;
        return $this->fetch('index@index/index');
    }

    public function BindClientId () {
        
        $uid = $_POST['uid'];
        session('uid', $uid);
        $client_id = $_POST['client_id'];
        // 设置GatewayWorker服务的Register服务ip和端口，请根据实际情况改成实际值
        Gateway::$registerAddress = '127.0.0.1:8282';

        $bindUid = session('uid');
        // 假设用户已经登录，用户uid和群组id在session中
        // client_id与uid绑定
        Gateway::bindUid($client_id, $bindUid);
        // 加入某个群组（可调用多次加入多个群组）
        // Gateway::joinGroup($client_id, $group_id);
        // $uid = $_POST['uid'];
        // session('uid', $uid);
        echo 111;
    }

    public function AjaxSendMessage () {
        $message = $_POST['message'];
        // 设置GatewayWorker服务的Register服务ip和端口，请根据实际情况改成实际值
        Gateway::$registerAddress = '127.0.0.1:1238';

        GateWay::sendToAll($message);
    }
}