<?php 
namespace Admin\Controller;
use Admin\Controller\AdminController;
class SlideshowController extends AdminController{
	//添加导航栏
	public function Slideshow(){
		$m=M('Slideshow');
		//总记录数
		$count=$m->count();
		//每页显示多少条记录
		$page=new \Think\Page($count,8);
		//分页栏每页显示的页数
		$page->rollPage='9';
		//设置显示排列样式,默认是不显示总记数,也就是%HEADER%
		$page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
		$show=$page->show();
		$data=$m->field('password',true)->limit($page->firstRow.','.$page->listRows)->order('id desc')->select();
		$this->assign('data',$data);
		// dump($data);die;
		$this->assign('num',$page->firstRow);
		$this->assign('page',$show);
		$this->display();
	}

	//添加导航栏
	public function SlideshowAdd(){

		$this->display();
	}
	//图片上传
	public function upload(){
		$m = M('Slideshow');
	    $upload = new \Think\Upload();// 实例化上传类
	    $upload -> maxSize =  3145728 ;// 设置附件上传大小
	    $upload -> exts  =  array('jpg', 'gif', 'png', 'jpeg','bmp');
	    // 设置附件上传类型
	    $upload -> rootPath = './Public/';
	    $upload -> savePath = '/Uploads/'; // 设置附件上传目录
	    $upload -> autoSub = false;
	    // 上传文件
	    $info = $upload -> upload();
	    // dump($info);die;//打印上传的图片信息
	    if($info) {
	    	// 上传成功
	    	foreach($info as $file){
	    	$m -> photo = $file['savename'];
	    	}
	    }
	    $m -> create_time = date('Y-m-d H:i:s', time()); 
	    $m -> name = $_POST['name'];
	    $m -> url = $_POST['url'];
	    $m -> describe = $_POST['describe'];
	    $m -> sort = $_POST['sort'];
	    $m -> belong = $_POST['belong'];

	    $lastId = $m -> add();
	    if($lastId){
	    	$this -> success('发布成功', U('Slideshow/Slideshow'));
	    }else{
	    	$this -> error('发布失败');
	    } 
	}

	//添加导航栏
	public function Addhandle(){
		// dump($_POST);//打印post提交的内容
		//实例化数据库
		$m = M('Slideshow');
    	if($data['name'] === ''){
    		$this->error('导航栏名字不能为空');
    	}
    	if($m->add($_POST)){
    		$this->success('添加成功', U('Slideshow/slideshow'));
    	}else{
    		$this->error('添加失败');
    	}
	}

	//删除轮播图
	public function deleteHandle(){
		//dump($_GET);
		$where['id']=I('id');
		$m=M('Slideshow');
		$result = $m->where($where)->delete();
		if($result){
			$this->success("轮播图删除成功!");
		}else{
			$this->error('轮播图删除失败!');
		}
	}
}
 ?>