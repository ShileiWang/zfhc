<?php 
namespace Admin\Model;
use Think\Model\ViewModel;
class GroupMemberViewModel extends ViewModel{
	public $viewFields=array(		
		'member'=>array('_table'=>'zfhc_members','uid'=>'mid','username','score'),		
		'groups'=>array('_table'=>'zfhc_auth_group_access','uid','group_id','_on'=>'member.uid=groups.uid')
		);
}
 ?>