<?php
namespace Home\Controller;
use Think\Controller;
use CommonComtroller;
class IndexController extends Controller {
    public function index(){
        $this->display('index');
    }
    public function test(){
    	$this->display();
    }
}