<?php
namespace app\index\controller;

use think\Controller;
use think\Session;
use app\index\Model\User;

/**
* 
*/
class Register extends Controller
{
	
	public function register(){
		if ($this->request->isPost()) {
			$name = input('username');
			$pwd =  input('password');
			$tel =  input('usertel');
			$account = input('useraccount');
			$user = new User();
			if (!empty($name&&$pwd&&$tel&&$account)) {
				if ($id = $user->istUser($name,$pwd,$tel,$account)) {
				
				// echo Session::get('userid');
				$this->success('注册成功','index/Login/index');
				}else{
					$this->error('注册失败','Comm/register');
				}
			}else{
				$this->error('注册失败,请重新注册');
			}
		}else{
			return $this->fetch('login/register');
		}
	}
}