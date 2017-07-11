<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller {
    public function base(){
    	//实例化导航栏
    	$m = M('dhl');
    	$data = $m->field('dhl')->where('block=1')->order('id')->limit('6')->cache(ture)->select();
    	$this->assign('data', $data);
    	// dump($data);die;//打印传入base的数据
        // $this->display('base');
        $this->show($this->fetch('base'));
    }
}