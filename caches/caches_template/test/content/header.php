<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>show</title>
	<link rel="stylesheet" href="<?php echo BS_PATH;?>css/bootstrap.css">
	<script src="<?php echo BS_PATH;?>js/jquery.js"></script>
	<script src="<?php echo BS_PATH;?>js/bootstrao.js"></script>
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>test.css">
</head>
<body>
<div class="container" >
	<div class="header">
		<ul class="nav nav-pills">
			<li><img src="<?php echo IMG_PATH;?>admin_img/logo_1.gif" alt=""></li>
			<li><a href="?m=content&c=index&a=init">首页</a></li>
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f1096699cd8296ad477846bb203fa4ff&action=category&siteid=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('siteid'=>'1','limit'=>'20',));}?>
			<?php $n=1;if(is_array($data)) foreach($data AS $row) { ?>
			<li><a href="<?php echo $row['url'];?>"><?php echo $row['catname'];?></a></li>
			<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			<li><a href="">人才招聘</a></li>
			<li><a href="">企业介绍</a></li>
		</ul>
	</div>