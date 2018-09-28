<?php
namespace app\index\model;

use think\Model;

/**
* 
*/
class De extends Model
{
	
	public function istDe($dename,$deopen,$deintro,$thumbpath,$apikey){

		$data = [
			'de_name'	=>	$dename,
			'de_open'	=>	$deopen,
			'de_intro'	=>	$deintro,
			'de_pic'	=>	$thumbpath,
			'de_apikey'	=>	$apikey,
			'de_createtime'	=>	time(),
			'de_ontime'		=>	time(),
			"de_offtime"	=>	time(),
		];
		$this->save($data);
		return $this->getLastInsID();
	}
}