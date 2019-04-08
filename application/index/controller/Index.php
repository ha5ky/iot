<?php
namespace app\index\controller;

use think\Controller;

class Index extends Controller
{
	public function _initialize() {
		echo $this->redirect('Comm/_initialize');

		// echo 111;
		// die();

		echo 111;
		die();

	}

	public function index(){
		return $this->fetch('index/ws');
	}
    public function login(){
    	
    }
}
