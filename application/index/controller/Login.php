<?php
namespace app\index\controller;

use think\Controller;
use app\index\Model\User;
use think\Session;
use think\View;
use think\Request;

/**
* 
*/
class Login extends Controller
{
	
	public function index(){
		return $this->fetch('login/login');
	}

	public function login(){
		if ($this->request->isPost()) {
			$user = new User();
			$view = new View();
			$account = input('useraccount');
			$pwd     = input('password');
			// echo $account;
			if (!empty($user&&$pwd)) {
				if ($info = $user->retrieveUser($account,$pwd)) {
					Session::set('userid',$info[0]['user_id']);
					Session::set('username',$info[0]['user_name']);
					dump($info);die();
					echo session('username');die();
					$view->assign('name',Session::get('username'));
					$this->success('登录成功','index/Main/index');
				}else{
					$this->error('登录失败');
				}
			}else{
				$this->error('请输入账户密码');
			}
		}

	}

	public function logout(){
		Session::delete('userid');
		Session::delete('username');
		$this->success('退出成功','index/Login/index');
	}
}