<?php
namespace app\index\model;

use think\Model;

/**
* 
*/
class User extends Model
{
	public function istUser($name,$pwd,$tel,$account){
		$data = [
			'user_name'			=>	$name,
			'user_pwd'			=>	$pwd,
			'user_tel'			=>	$tel,
			'user_account'		=>	$account,
			'user_createtime'	=>	time(),
		];
		$this->save($data);
		return $this->getLastInsID();
	}

	public function retrieveUser($account,$pwd){
		$where = [
			'user_account' => $account,
			'user_pwd' => $pwd,
		];
		return $this->where($where)->select();
	}
}