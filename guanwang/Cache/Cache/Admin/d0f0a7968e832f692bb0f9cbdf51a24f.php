<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo C('DEFAULT_CHARSET');?>" />
<title><?php echo L('welcome');?></title>
<link rel='stylesheet' type='text/css' href='./Public/Css/style.css'>
<base target="main" />
</head>
<body id="main_top" onLoad="reload()" >
<div id="header" class="header">
	<div class="logo"><a href="http://www.yourphp.cn" target="_blank"><img src="./Public/Images/admin_logo.gif"></a></div>

	<div class="nav f_r"><i>|</i> <a href="http://www.yourphp.cn" target="_blank"><?php echo L('org_url');?></a> <i>|</i> <a href="http://www.yourphp.cn/license/" target="_blank"><?php echo L('license');?></a>  <i>|</i> <a href="http://bbs.yourphp.cn" target="_blank"><?php echo L('org_bbs');?></a>  <i>|</i> <a href="http://www.yourphp.cn/help" target="_blank"><?php echo L('help');?></a> <i>|</i> &nbsp;&nbsp;</div>

	<div class="nav">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo L('welcome_user');?><?php echo ($_SESSION['username']); ?>  <i>|</i> [<?php echo ($usergroup); ?>]  <i>|</i> [<a href="<?php echo U('Login/logout');?>" target="_top"><?php echo L('logout');?></a>]  <i>|</i> <a href="<?php echo ($site_url); ?>" target="_blank"><?php echo L('home_index');?></a> </div>

	<div class="topmenu">
		<ul><?php $n=0?>
		<?php if(is_array($menuGroupList)): $i = 0; $__LIST__ = $menuGroupList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tag): ++$i;$mod = ($i % 2 )?><?php if($n==0) $oneurl = U('Main/menu',array(parentid=> $tag[id]));?>
		<li><span><a href="#" onClick="sethighlight(<?php echo ($n); ?>); parent.menu.location='<?php echo U('Main/menu',array(parentid=> $tag[id]));?>';parent.main.location='<?php echo U($tag['model'].'/'.$tag['action'],$tag['data']);?>';return false;"><?php echo ($tag["name"]); ?></a></span></li>
		<?php $n++?><?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div>
</div>
<script><?php $n=0?>
function reload(){
parent.menu.location='<?php echo ($oneurl); ?>';
}
if(self==top){
	window.top.location.href = '<?php echo U("Login/index");?>';
}
function sethighlight(n) {
	var lis = document.getElementsByTagName('span');
	for(var i = 0; i < lis.length; i++) {
		lis[i].className = '';
	}
	lis[n].className = 'current';
}
sethighlight(0);
</script>
</body>
</html>