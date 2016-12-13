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
<script>if(self==top){
	window.top.location.href = '<?php echo U("Login/index");?>';
}</script>

<style>

.mainnav_title{ display:none;}
h1 { height:30px;line-height:30px;font-size:14px;padding-left:15px;background:#EEE;border-bottom:1px solid #ddd;border-right:1px solid #ddd;overflow:hidden;zoom:1;margin-bottom:10px;}
h1 b {color:#3865B8;}
h1 span {color:#ccc;font-size:10px;margin-left:10px;}
#Profile{ width:48%; height:191px; float:left;margin:5px 15px 0 0;}
#system {width:48%;float:left;margin:5px 15px 0 0;}
.list ul{ border:1px #ddd solid;  overflow:hidden;border-bottom:none;}
.list ul li{ border-bottom:1px #ddd solid; height:26px;  line-height:26px; color:#777;padding-left:5px;}
.list ul li span{ display:block; float:left; color:#777;width:100px;}

#sitestats {width:48%; height:191px; float:left;margin:5px 0  0 0;overflow:hidden;}
#sitestats ul {overflow:hidden;zoom:1;border:1px solid #ddd;padding:2px 0 0 2px;_margin:2px 0 0 3px;height:132px;}
#sitestats ul li {float:left;height:44px; float:left; width:16.5%;_width:16.3%;text-align:center;border-right:1px solid #fff;border-bottom:none;}
#sitestats ul li b {float:left;width:100%;height:21px;line-height:22px;  background:#EFEFEF;color:#777;font-weight:normal;}
#sitestats ul li span {float:left;width:100%;color:#3865B8;background:#F8F8F8;height:21px;line-height:21px;overflow:hidden;zoom:1;}

#yourphpnews {width:48%;float:left;margin:5px 15px 0 0;}

#tabs {margin:0px auto;overflow:hidden;border:1px solid #ccc; height:214px;}
#tabs .title {overflow:hidden;background:url(./Public/Images/tab_bottom_line_1.jpg) repeat-x 0 26px;height:27px;}
#tabs .title ul li {float:left;margin-left:-1px;height:26px;line-height:26px;background:#EAEEF4;padding:0px 10px;border:1px solid #ccc;border-top:0;border-bottom:0;}
#tabs .title ul li.on {background:#FFF;height:27px;}
#tabs .content_1 { overflow:hidden;border-top:none;}
#tabs .tabbox {display:none;padding:10px;}

#tabs .tabbox ul li {background:url(./Public/Images/ico_1.gif) no-repeat 4px 11px;padding-left:13px;border-bottom:1px #ddd dashed; height:27px;  line-height:26px;color:#333 }
#tabs .tabbox ul li a {color:#333}
#tabs .tabbox ul li a:hover {color:#FB0000;}
#tabs .tabbox ul li span.date {float:right;color:#777}
</style>

	<div id="Profile" class="list">
		<h1><b><?php echo L("Profile_info");?></b><span>Profile&nbsp; Info</span></h1>
		<ul>
		<?php if(is_array($userinfo)): $i = 0; $__LIST__ = $userinfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): ++$i;$mod = ($i % 2 )?><li><span><?php echo L($key);?>:</span><?php echo ($v); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div>

	<div id="sitestats" >
		<h1><b><?php echo L("Site_ Stats");?></b><span>Site&nbsp; Stats</span></h1>
		<ul>
		<?php if(is_array($moduledata)): $i = 0; $__LIST__ = $moduledata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): ++$i;$mod = ($i % 2 )?><li><b><?php echo ($v[title]); ?></b><br><span><?php echo ($v[counts]); ?></span></li><?php endforeach; endif; else: echo "" ;endif; ?>
		<li><b></b><span></span></li>
		<li><b></b><span></span></li>
		<li><b></b><span></span></li>
		<li><b></b><span></span></li>
		<li><b></b><span></span></li>
		<li><b></b><span></span></li>
		<li><b></b><span></span></li>
		<li><b></b><span></span></li>
		<li><b></b><span></span></li>
		<li><b></b><span></span></li>
		<li><b></b><span></span></li>
		</ul>
	</div>


	<div id="system"  class="list">
		<h1><b><?php echo L("system_info");?></b><span>System&nbsp; Info</span></h1>
		<ul>
		<?php if(is_array($server_info)): $i = 0; $__LIST__ = $server_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): ++$i;$mod = ($i % 2 )?><li><span><?php echo L($key);?>:</span><?php echo ($v); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div>


 	<div id="yourphpnews">
		<h1><b><?php echo L("Help_News");?></b><span>Yourphp&nbsp; News</span></h1>


		<div id="tabs">
			<div class="title"><ul>
			<li class="on"><a href="javascript:void(0);"><?php echo L("yourphp_news");?></a></li>
			<li><a href="javascript:void(0);"><?php echo L("yourphp_bbs");?></a></li>
			<li><a href="javascript:void(0);"><?php echo L("yourphp_help");?></a></li>
			</ul></div>

		<div class="content_2 ">
			<div class="tabbox" style="display:block;"><ul><script language="javascript" src="http://www.yourphp.cn/index.php?m=Js&a=index&type=news&host=<?php echo ($_SERVER['SERVER_NAME']); ?>"></script></ul></div>
			<div class="tabbox" style="display:none;"><ul><script language="javascript" src="http://www.yourphp.cn/index.php?m=Js&a=index&type=bbs"></script></ul></div>
			<div class="tabbox" style="display:none;"><ul><script language="javascript" src="http://www.yourphp.cn/index.php?m=Js&a=index&type=help"></script></ul></div>
		</div>
	</div><script>new Tabs("#tabs",".title ul li",".content_2",".tabbox","on",1); </script>