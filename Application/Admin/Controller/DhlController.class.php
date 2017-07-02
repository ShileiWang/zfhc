<?php 
namespace Admin\Controller;
use Admin\Controller\AdminController;
class DhlController extends AdminController{
	//添加导航栏
	public function addHandle(){	
    	$m=M("dhl");
    	$data['dhl']=I('dhl','','htmlspecialchars');
    	if($data['dhl'] === ''){
    		$this->error('导航栏不能为空');
    	}
    	if($m->add($data)){
    		$this->success('添加成功', U('Dhl/dhlList'));
    	}else{
    		$this->error('添加失败');
    	}
    }

	//导航栏列表
	public function DhlList(){
		$m=M('Dhl');
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

	//显示某一个导航栏
	public function DhlSave(){
		$id = I('id');
		if($id === ''){
			$this->error('格式错误',U('Dhl/dhlList'));
		}
		$m = M('Dhl');
		$data = $m->where('id=%d', $id)->select();
		$this->assign('data', $data);
		$this->display();
	}
	//修改导航栏
	public function DhlSsave(){
		//实例化数据模型
		$m = M('dhl');
		$data['dhl'] = $_POST['dhl'];
		$data['block'] = $_POST['block'];
		// var_dump($_POST['id']);die;
		if($block!=0 && $block != 1){
			$this->error('状态只有显示(1)与隐藏(0)');
		}else{
			// dump($_POST['id']);die;//打印通过post传过来的的id
			$sss = $m->where('id = %d', $_POST['id'])->save($data);
			// dump($sss);die;
			$this->success('修改成功',U('Dhl/dhlList'));
		}
	}

	//删除导航栏
	public function deleteHandle(){
		//dump($_GET);
		$where['id']=I('id');
		$m=M('Dhl');
		$result=$m->where($where)->delete();
		if($result){
			$this->success("导航栏删除成功!");
		}else{
			$this->error('导航栏删除失败!');
		}
	}
}
 ?>