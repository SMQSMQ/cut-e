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

<form name="myform" action="<?php echo U('Category/listorder');?>" method="post">
<div class="pad-lr-10">
<div class="table-list">
    <table width="100%" cellspacing="0">
        <thead>
            <tr>
            <th width="40"><?php echo L('listorder');?></th>
            <th width="40">catid</th>
            <th><?php echo L('catname');?></th>
			<th width="80"><?php echo L('use_module');?></th>
			<th width="40"><?php echo L('ismenu');?></th>
			<th width="30"><?php echo L('fangwen');?></th>
			<th width="220"><?php echo L('manage');?></th>
            </tr>
        </thead>
	<tbody>
    <?php echo ($categorys); ?>
	</tbody>
    </table>
  
    <div class="btn"><input type="submit" class="button" name="dosubmit" value="<?php echo L('listorder');?>" /></div>  </div>
</div>
</div>
</form></div>