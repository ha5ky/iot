<?php
namespace app\index\controller;

use think\Controller;
use think\Request;
use app\index\Model\De;
use think\Paginatoer;
use think\Config;

/**
* 
*/
class Main extends Controller
{
	
	public function index(){
		$de = model('de');
		$list = $de->where('user_id',session('userid'))->paginate(5,false,['type' => 'bootstrap']);
		$count = $de->where('user_id',session('userid'))->count();
		$this->assign('list',$list);
		$this->assign('count', $count);
		return $this->fetch('index/index');
	}
	public function dechat(){
		if ($this->request->isPost()) {
			$name = input('targetname');
			$commond = input('commond');
			
		}else{
			return $this->fetch('intelde/chat');
		}
	}

	public function delist(){
		
		$de = model('de');
		$list = $de->select();
		$this->assign('list',$list);
		return $this->fetch('intelde/list');
	}

	public function deadd(){
		if ($this->request->isPost()) {
			$dename = input('dename');
			$deopen = input('deopen');
			$deintro = input('deintro');
			$str="1234567890qwertyuiopasdfghjklzxcvbnm";
			$apikey  =	str_shuffle(substr($str, 4, 8));
			if ($dename&&$deopen&&$deintro) {
				// echo ROOT_PATH;die();
				$file = request()->file('img');
				$info = $file->validate(['size' => 10240000 , 'ext' => 'jpg,png'])->move(ROOT_PATH . 'public' . DS . 'upload'. DS . 'pic');
				if($info){
					// $img = new Image();
					$newid = new De();
					$path = $info->getSaveName();
					$picpath = ROOT_PATH . 'public' . DS . 'upload' . DS . 'pic' . $path;
					$thumb = \think\Image::open('./upload/pic/' . $path);
					$picname = 'thumb' . mt_rand(0,99) . '.png';
					$tpath = '/upload/thumb/' . $picname;
					$thumbpath = $thumb->thumb(150,150)->save( ROOT_PATH . 'public' . DS . 'upload' . '/thumb/' . $picname);
					// echo $thumbpath;die();
					if ($id = $newid->istDe($dename,$deopen,$deintro,$tpath,$apikey)) {
						$this->success('设备新建成功');
					}
				}else{
					echo $file->getError();
				}
			}
		}else{
			return $this->fetch('intelde/add');
		}
	}
	// public function upload(){
	// 	echo ROOT_PATH;die();
	// 	$file = request()->file('img');
	// 	$info = $file->validate(['size' => 102400 , 'ext' => 'jpg,png'])->move(ROOT_PATH . );
	// }
}