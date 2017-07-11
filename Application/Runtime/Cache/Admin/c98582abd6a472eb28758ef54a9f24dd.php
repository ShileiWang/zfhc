<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>添加轮播图</title>
	<link rel="stylesheet" href="/TP/Public/bootstrap3/css/bootstrap.min.css" />
	<link rel="stylesheet" href="/TP/Public/bootstrap3/css/bootstrap-theme.min.css" />	
	<link rel="stylesheet" href="/TP/Public/css/default.css" />
	<script src="/TP/Public/bootstrap3/js/jquery.min.js"></script>
	<script src="/TP/Public/bootstrap3/js/bootstrap.min.js"></script>
	
	<style type="text/css">
		body{
			padding-top: 70px;
		}
	</style>
</head>

<body>
	<!--nav导航条-->
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">	
		<div class="container">
			<div class="collapse navbar-collapse">
			    <ul class="nav navbar-nav">
			      <!-- <li class="active"><a href="#">我的面板</a></li> -->
			      <li><a href="<?php echo U('Admin/Index/index');?>">首页</a></li>
<!-- 			      <li><a href="#">设置</a></li>
			      <li><a href="#">模块</a></li>
			      <li><a href="#">内容</a></li>
			      <li><a href="#">用户</a></li>
			      <li><a href="#">界面</a></li>
			      <li><a href="#">扩展</a></li> -->
			    </ul>

			    <ul class="nav navbar-nav navbar-right">
			   		<li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" role="button" href="#"><i class="glyphicon glyphicon-user"></i> <?php echo (session('username')); ?> <i class="caret"></i>
                        </a>
                        <ul class="dropdown-menu">
                          <!--    <li>
                                <a href="#" tabindex="-1"><i class="glyphicon glyphicon-cog"></i>	设置</a>
                            </li> -->
                            <li class="divider"></li>
                            <li>
                                <a href="<?php echo U('Admin/Login/logout');?>" tabindex="-1"><i class="glyphicon glyphicon-off"></i>	退出</a>
                            </li>
                        </ul>
                    </li>
			    </ul>
  			</div><!-- /.navbar-collapse -->
		</div>
	</nav>
	<!--/nav导航条-->
	<div class="container">
		<div class="row">
			
	<div id="sidebar" class="col-sm-3">
	<div class="panel-group" id="accordion">
		<div class="panel panel-primary">
		    <div class="panel-heading">
		     	<h4 class="panel-title">
		       		<a data-toggle="collapse" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><i class="glyphicon glyphicon-user"></i> 会 员 管 理</a>
		      	</h4>
		    </div>
	    	<div id="collapseOne" class="panel-collapse collapse">
		      	<div class="panel-body">
		         	<ul class=" nav nav-pills nav-stacked">
			          	<li><a href="<?php echo U('Admin/Member/memberList');?>">会员列表</a></li>
			      		<li><a href="<?php echo U('Admin/Member/memberAdd');?>">添加会员</a></li>
		      		</ul>
		     	 </div>
	    	</div>
        </div>
	    <div class="panel panel-primary">
	        <div class="panel-heading">
		        <h4 class="panel-title">
			        <a data-toggle="collapse" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><i class="glyphicon glyphicon-list"></i> 权 限 管 理
			        </a>
		     	</h4>
		    </div>
		    <div id="collapseTwo" class="panel-collapse collapse">
		     	<div class="panel-body">
			      	<ul class=" nav nav-pills nav-stacked">
			          	<li><a href="<?php echo U('Admin/Auth/accessList');?>">权限列表</a></li>
			      		<li><a href="<?php echo U('Admin/Auth/accessAdd');?>">添加权限</a></li>
			      		<li><a href="<?php echo U('Admin/Auth/groupList');?>">角色管理</a></li>
			      	</ul>
		      	</div>
		    </div>
	    </div>
	    <div class="panel panel-primary">
	        <div class="panel-heading">
		        <h4 class="panel-title">
			        <a data-toggle="collapse" data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><i class="glyphicon glyphicon-cog"></i> 导 航 栏 管 理
			        </a>
		     	</h4>
		    </div>
		    <div id="collapseThree" class="panel-collapse collapse">
		     	<div class="panel-body">
			      	<ul class=" nav nav-pills nav-stacked">
			          	<li><a href="<?php echo U('Admin/Dhl/dhlList');?>">导航栏列表</a></li>
			      		<li><a href="<?php echo U('Admin/Dhl/dhlAdd');?>">添加导航栏</a></li>
			      	</ul>
		      	</div>
		    </div>
	    </div>

	    <div class="panel panel-primary">
	        <div class="panel-heading">
		        <h4 class="panel-title">
			        <a data-toggle="collapse" data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><i class="glyphicon glyphicon-play-circle"></i> 轮 播 图 管 理
			        </a>
		     	</h4>
		    </div>
		    <div id="collapseFour" class="panel-collapse collapse">
		     	<div class="panel-body">
			      	<ul class=" nav nav-pills nav-stacked">
			          	<li><a href="<?php echo U('Admin/Slideshow/slideshow');?>">轮播图列表</a></li>
			      		<li><a href="<?php echo U('Admin/Slideshow/slideshowAdd');?>">添加轮播图</a></li>
			      	</ul>
		      	</div>
		    </div>
			</div>

			 <div class="panel panel-primary">
	        <div class="panel-heading">
		        <h4 class="panel-title">
			        <a data-toggle="collapse" data-toggle="collapse" data-parent="#accordion" href="#collapseFive"><i class="glyphicon glyphicon-pencil"></i>  企 业 资 讯 管 理
			        </a>
		     	</h4>
		    </div>
		    <div id="collapseFive" class="panel-collapse collapse">
		     	<div class="panel-body">
			      	<ul class=" nav nav-pills nav-stacked">
			          	<li><a href="<?php echo U('Admin/Companynews/companynews');?>">企业资讯列表</a></li>
			      		<li><a href="<?php echo U('Admin/Companynews/companynewsadd');?>">添加资讯</a></li>
			      	</ul>
		      	</div>
		    </div>
			</div>

	</div>
</div>	

			
		<div id="content" class="col-sm-8">
		 	<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title"><i class="glyphicon glyphicon-header"></i> 添	加	轮  播  图</h4>
				</div>

				<div class="panel-body">
					<form class="form-horizontal" action="<?php echo U('Admin/Slideshow/Upload');?>" method='post' enctype="multipart/form-data">

						<div class="form-group">
							<label for="name" class="col-sm-2 control-label">轮播图名字:</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" placeholder="轮播图名字" name="name" id="name" />
								
							</div>
							<label class="col-sm-2 control-label"></label>
						</div>

						<div class="form-group">
							<label for="photo" class="col-sm-2 control-label">缩略图:</label>
							<div class="col-sm-5">
								<input type="file" class="form-control" placeholder="缩略图" name="photo" id="photo" onchange='PreviewImg(this)' />
								
							</div>
							<label class="col-sm-2 control-label"></label>
						</div>

						<div class="form-group">
							<label for="url" class="col-sm-2 control-label">URL:</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" placeholder="跳转页" name="url" id="url" />
								
							</div>
							<label class="col-sm-2 control-label"></label>
						</div>

						<div class="form-group">
							<label for="describe" class="col-sm-2 control-label">描述:</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" placeholder="描述" name="describe" id="describe" />
								
							</div>
							<label class="col-sm-2 control-label"></label>
						</div>

						<div class="form-group">
							<label for="sort" class="col-sm-2 control-label">排序:</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" placeholder="排序" name="sort" id="sort" />
								
							</div>
							<label class="col-sm-2 control-label"></label>
						</div>

						<div class="form-group">
							<label for="belong" class="col-sm-2 control-label">页面:</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" placeholder="属于页面" name="belong" id="belong" />
								
							</div>
							<label class="col-sm-2 control-label"></label>
						</div>							

						<div class="form-group">
							<label class="col-sm-2 control-label"></label>
							<div class="col-sm-5">
								<button type="submit" class="btn btn-success btn-add" id='button'>添加</button>
								
							</div>
							
						</div>

					</form>
				</div>

			</div>
		</div> 
	<script type='text/javascript'>
	$(document).ready(function(){
		alert('111');
		$('#belong').blur(function(){
			var $ur = $('#belong').val();
			if($ur == ''){
				$("#belong").val('属于页面不能为空');
			}
			    // alert('hello world');
			});

			$('#name').blur(function(){
			    var $name = $("#name").val();
			    if($name == ''){
			        $('#name').attr('type','text');
			        $("#name").val('名字不能为空');
			    }
			    // alert('hello world');
			});

			$('#url').blur(function(){
			    var $url = $("#url").val();
			    if($url == ''){
			        $("#url").val('跳转页不能为空');
			    }
			    // alert('hello world');
			});
			$('#describe').blur(function(){
			    var $describe = $("#describe").val();
			    if($describe == ''){
			        $("#describe").val('描述不能为空');
			    }
			    // alert('hello world');
			});
			$('#sort').blur(function(){
			    var $sort = $("#sort").val();
			    if($sort == ''){
			        $("#sort").val('排序不能为空');
			    }
			    // alert('hello world');
			});
			$('#submitId').click,function(){
				$.ajaxFileUpload({
					url:"<?php echo U('Upload/yes');?>", //你处理上传文件的服务端
					secureuri:false,//是否启用安全机制
					fileElementId:'file1',//file的id
					dataType: 'application/json',//返回的类型
					success: function (data) {
						alert('上传成功');
					}

				});
			function PreviewImg(imgFile) {
			  var filextension = imgFile.value.substring(imgFile.value
			    .lastIndexOf("."), imgFile.value.length);
			  filextension = filextension.toLowerCase();
			  if ((filextension != '.jpg') && (filextension != '.gif')
			    && (filextension != '.jpeg') && (filextension != '.png')
			    && (filextension != '.bmp')) {
			   alert("对不起，系统仅支持标准格式的照片，请您调整格式后重新上传，谢谢 !");
			   imgFile.focus();
			  } else {
			   var path;
			   if (document.all)//IE
			   {
			    imgFile.select();
			    path = document.selection.createRange().text;
			    document.getElementById("photo_info").innerHTML = "";
			    document.getElementById("photo_info").style.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(enabled='true',sizingMethod='scale',src=\""
			      + path + "\")";//使用滤镜效果  
			   } else//FF
			   {
			    path = window.URL.createObjectURL(imgFile.files[0]);// FF 7.0以上
			    //path = imgFile.files[0].getAsDataURL();// FF 3.0
			    document.getElementById("photo_info").innerHTML = "<img id='img1' width='120px' height='100px' src='"+path+"'/>";
			    //document.getElementById("img1").src = path;
			   }
			  }
			 }
		});
	</script>

		</div>
	</div>


</body>
</html>