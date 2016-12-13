<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo C('DEFAULT_CHARSET');?>" />
<title><?php echo L('welcome');?></title>
<link rel="stylesheet" type="text/css" href="./Public/Css/style.css" />
<script type="text/javascript" src="./Public/Js/jquery.min.js"></script>
<script type="text/javascript" src="./Public/Js/jquery.form.js"></script>
<script type="text/javascript" src="./Public/Js/jquery.validate.js"></script>
<script type="text/javascript" src="./Public/Js/artDialog.min.js"></script>
<script type="text/javascript" src="./Public/Js/MyDate/WdatePicker.js"></script>
<script type="text/javascript" src="./Public/Js/jquery.colorpicker.js"></script>
<script type="text/javascript" src="./Public/Js/my.js"></script>
<script language="JavaScript">
<!--
var URL = '__URL__';
var APP	 =	 '__APP__';
var PUBLIC = '__PUBLIC__';
function confirm_delete(url){
	art.dialog.confirm("<?php echo L('real_delete');?>", function(){location.href = url;});
}
//-->
</script>
</head>
<body>
<div id="loader" ><?php echo L('load_page');?></div>
<div id="result" class="result none"></div>
<div class="mainbox">

	<div id="nav" class="mainnav_title"><div id="lang"></div><ul><a href="<?php echo U($nav[bnav][model].'/'.$nav[bnav][action],$nav[bnav][data]);?>"><?php echo ($nav["bnav"]["name"]); ?></a>|
	<?php if(is_array($nav["nav"])): $i = 0; $__LIST__ = $nav["nav"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vonav): ++$i;$mod = ($i % 2 )?><a href="<?php echo U($vonav[model].'/'.$vonav[action],$vonav[data]);?>"><?php echo ($vonav["name"]); ?></a>|<?php endforeach; endif; else: echo "" ;endif; ?></ul>
	</div>

	<script>
	var onurl ='<?php echo ($_SERVER["REQUEST_URI"]); ?>';
	jQuery(document).ready(function(){
		$('#nav ul a ').each(function(i){
		if($('#nav ul a').length>1){
			var thisurl= $(this).attr('href');
			thisurl = thisurl.replace('&menuid=<?php echo cookie("menuid");?>','');
			if(onurl.indexOf(thisurl) == 0 ) $(this).addClass('on').siblings().removeClass('on');
		}else{
			$('#nav').hide();
		}
		});
		if($('#nav ul a ').hasClass('on')==false){
		$('#nav ul a ').eq(0).addClass('on');
		}
	})
	</script>

<style>
.table-list  {margin:10px;}
.table-list ul.pic {}
.table-list ul.pic li.use {background:#EFEFEF;}
.table-list ul.pic li {float:left;position:relative;margin:10px 20px;_margin:10px 12px;width:200px;}
.table-list ul.pic li span { width:202px;height:222px;}
.table-list ul.pic li span a {border:1px solid #eee;width:200px;height:220px;*font-size: 220px;}
.table-list ul.pic li img  {width:200px;height:220px;}
.table-list ul.pic li  b {display:block;line-height:20px;height:20px;font-weight:normal;width:200px;overflow:hidden;text-align:left;}
.table-list ul.pic li  em {position:absolute;right:0;bottom:20px;}
.table-list ul.pic li b a {float:right;}
</style>
<div class="table-list">

<ul class="pic">
 
<?php if(is_array($themes)): $i = 0; $__LIST__ = $themes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><li><span><a href="<?php echo U($module_name.'/chose?theme='.$vo[name]);?>"><img src="<?php echo ($vo["preview"]); ?>"></a></span><b><?php if($vo['use']==1): ?><i style="float:right;color:#FB0000">已使用</i><?php else: ?><a href="<?php echo U($module_name.'/chose?theme='.$vo[name]);?>">未使用</a><?php endif; ?><?php echo L("name");?>:<?php echo ($vo["name"]); ?></b></li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
</div>