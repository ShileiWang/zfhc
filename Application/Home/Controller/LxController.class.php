<?php
	namespace Home\Controller;
	use Think\Controller;
	class LxController extends Controller{
		public function index(){
			$this->display('lx');
		}
	}