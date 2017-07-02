<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	//实例化导航栏
    	$m = M('dhl');
    	$data = $m->field('dhl')->where('block=1')->order('id')->limit('6')->select();
    	$this->assign('data', $data);
    	// dump($data);die;//打印传入index的数据
        $this->display('index');
    }
    public function test(){
    	$this->display();
    }
}