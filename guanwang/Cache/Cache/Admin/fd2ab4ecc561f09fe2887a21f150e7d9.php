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
	<form name="myform"  id="myform"  action="<?php echo U($module_name.'/edit');?>" method="post">
	<table cellpadding=0 cellspacing=0 class="table_form"width="100%">
      <tr>
        <td width="120"><?php echo L('filename');?></td>
        <td>
		<input type="text"   class="input-text"  validate="required:true, minlength:2, maxlength:30"   name="file" value="<?php echo ($filename); ?>" <?php if($action_name=='edit'): ?>readonly="readonly"<?php endif; ?>/>
		<?php if($action_name=='add'): ?><input type="radio" name="type" value="html" checked /><?php echo L("file_type_html");?> <input type="radio"  name="type" value="css" /> <?php echo L("file_type_css");?> <input type="radio"  name="type" value="js"/><?php echo L("file_type_js");?><?php endif; ?>
		</td>
      </tr>
      	<tr>
		<td><?php echo L('content');?></td>
		<td><textarea id="content"  name="content"  style="width:95%; height:400px" validate="required:true, minlength:4" ></textarea></td>
		</tr>
	</table>
	<div class="btn">
		<INPUT TYPE="submit"  name="dosubmit" value="<?php echo L('dosubmit');?>" class="button" >
		<input TYPE="reset"  value="<?php echo L('cancel');?>" class="button">
	</div>
	</form>