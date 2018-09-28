<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
use think\Request;

function getAction(){
	$request = Request::instance();
	return $request->action();
}
function displayAways($action_name){
	$menu = [
		'delist',
		'dechat',
		'decontrol',
		'deadd',
		'deget',
	];
	foreach ($menu as $key => $value) {
		if ($action_name == $value) {
			return "display : block;";
		}
	}
}

