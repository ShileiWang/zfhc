<?php
	namespace Home\Controller;
	use Think\Controller;
	class QcController extends Controller{
		public function index(){
			$this->display('qc');
		}
	}