<?php
namespace app\index\controller;

use think\Controller;
use think\Session;

/**
* 
*/
class Comm extends Controller
{
	
	public function _initialize(){
		if (Session::get('userid')) {
			$this->success("用户已登录",'Main/index');
		}else{
			$this->error("请登录",'login/index');
		}
	}	
}