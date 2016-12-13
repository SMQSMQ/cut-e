<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo C('DEFAULT_CHARSET');?>" />
<title></title>
<script type="text/javascript" src="./Public/Js/jquery.min.js"></script>
<link rel='stylesheet' type='text/css' href='./Public/Css/style.css'>
<style>
html{overflow-x : hidden;}
</style>
<base target="main" />
</head>
<body id="menu_bg">
<table  class="left_menu" cellpadding=0 cellspacing=0 >
<tr>
	<td>&nbsp;&nbsp;<img SRC="./Public/Images/admin_left_menu.gif"  BORDER="0" ALT="" align="absmiddle">&nbsp;<b><?php if(empty($pname)): ?><?php echo L('admin_index');?><?php endif; ?><?php echo ($pname["name"]); ?></b></td>
</tr>
<?php if(is_array($menu)): $i = 0; $__LIST__ = $menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): ++$i;$mod = ($i % 2 )?><tr>
	<td onclick="seton(<?php echo ($i); ?>);"><span onclick="javascript:gourl('<?php echo U($item['model'].'/'.$item['action'],$item['data']);?>')"><a href="<?php echo U($item['model'].'/'.$item['action'],$item['data']);?>" id="<?php echo ($i); ?>"><?php echo ($item['name']); ?></a><?php if($pname['model']=='Category'): ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo U($item['model'].'/add',$item['data']);?>" id="<?php echo ($i); ?>"><?php echo L("add");?></a><?php endif; ?></span></td>
</tr><?php endforeach; endif; else: echo "" ;endif; ?>

</table>

<script language="JavaScript">
<!--
if(self==top){
	window.top.location.href = '<?php echo U("Login/index");?>';
}
function seton(n) {
	var lis = document.getElementsByTagName('td');
	for(var i = 0; i < lis.length; i++) {
		lis[i].className = '';
	}
	lis[n].className = 'on';
}
seton(1);
function gourl(url){
parent.main.location.href=url;
}
//-->
</script>
</body>
</html>