<?php 
namespace Admin\Controller;
use Admin\Controller\AdminController;
class CompanynewsController extends AdminController{
	//添加导航栏
	public function Companynews(){
		$m=M('Companynews');
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
	public function CompanynewsAdd(){

		$this->display();
	}
	    
	//保存ueditor中传来的数据
    public function SaveInfo(){
		//执行数据添加
		$data['savePath'] = $_POST['savePath'];
		dump($data['savePath']);die;
		if(M('Companynews') -> add($_POST)){
			$this -> success('添加成功', U('Companynews'));
			//echo '0';
		}else{
			$this -> error('添加失败', U('Companynewsadd'));
		}
    }

	//删除企业资讯
	public function deleteHandle(){
		//dump($_GET);
		$where['id']=I('id');
		$m=M('Companynews');
		$result = $m->where($where)->delete();
		if($result){
			$this->success("企业资讯删除成功!");
		}else{
			$this->error('企业资讯删除失败!');
		}
	}
}
 ?>