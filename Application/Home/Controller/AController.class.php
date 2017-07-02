<?php
	namespace Home\Controller;
	use Think\Controller;
	class AController extends Controller{
		public function index(){
			$this->display('a');
		}
	}