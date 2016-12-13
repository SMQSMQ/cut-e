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
<table  class="search_table" width="100%">
	<tr>
		<td>
			<form action="<?php echo U('User/index');?>" method="get">
			<input type="hidden" name="g" value="<?php echo (GROUP_NAME); ?>" />
			<input type="hidden" name="m" value="<?php echo (MODULE_NAME); ?>" />
			<input type="hidden" name="a" value="<?php echo (ACTION_NAME); ?>" />			
			<?php echo L('user_select_option');?>: <input type="text" name="keyword"  class="input-text" value="<?php echo ($keyword); ?>"/>
			<select name="searchtype">
			<option value="username" <?php if(($searchtype)  ==  "username"): ?>selected<?php endif; ?>><?php echo L('username');?></option>
			<option value="realname" <?php if(($searchtype)  ==  "realname"): ?>selected<?php endif; ?>><?php echo L('realname');?></option>
			<option value="id" <?php if(($searchtype)  ==  "id"): ?>selected<?php endif; ?>>ID</option>
			</select>
			<select name="groupid">
			<option value=""><?php echo L('user_group');?></option>
			<?php if(is_array($usergroup)): $i = 0; $__LIST__ = $usergroup;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): ++$i;$mod = ($i % 2 )?><option value="<?php echo ($row['id']); ?>" <?php if(($groupid)  ==  $row['id']): ?>selected="selected"<?php endif; ?>><?php echo ($row['name']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
			</select>
			<input type="submit" value="<?php echo L('chaxun');?>"  class="button" />
			<input type="reset" value="<?php echo L('reset');?>" class="button"  />
			</form>
		</td>
		
	</tr>
</table>

<form name="myform" action="<?php echo U('User/deleteall');?>" method="post">
<div class="table-list">
    <table width="100%" cellspacing="0">
        <thead>
      		<tr>
      		<th width="20"><input type="checkbox"  id="check_box"  onclick="selectall('ids[]');" /></th>
			<th width="40">ID</th>
			<th align="left"><?php echo L('username');?></th>	
			<th width="110"><?php echo L('user_group');?></th>
			<th width="120"><?php echo L('email');?></th>
			<th width="150"><?php echo L('user_reg_time');?></th>	
			<th  width="30"><?php echo L('status');?></th>
			<th  width="120"><?php echo L('manage');?></th>
      		</tr>
      	</thead>
      	<tbody>
      		<?php if(is_array($ulist)): $k = 0; $__LIST__ = $ulist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$user): ++$k;$mod = ($k % 2 )?><tr>
      		<td align="center"><input type="checkbox" name="ids[]" value="<?php echo ($user['id']); ?>" /></td>
			<td align="center"><?php echo ($user['id']); ?></td>
      		<td><?php echo ($user['username']); ?></td>
			<td align="center"><?php echo ($usergroup[$user['groupid']]['name']); ?></td>
      		<td><?php echo ($user['email']); ?></td>
      		<td align="center"><?php echo (date("Y-m-d H:m:s",$user['createtime'])); ?></td>     		
			<td align="center">
      		<?php if(($user['status'])  ==  "1"): ?><?php echo L('enable');?>
      		<?php else: ?>
      		<?php echo L('disable');?><?php endif; ?>
      		</td>
			<td align="center"><a href="<?php echo U('User/edit',array(id=>$user['id']));?>"><?php echo L('edit');?></a> | <a href="javascript:confirm_delete('<?php echo U('User/delete',array(id=>$user['id']));?>')"><?php echo L('delete');?></a></td>      		
      		</tr><?php endforeach; endif; else: echo "" ;endif; ?>
      	</tbody>
    </table>
  
    <div class="btn"><input type="submit" class="button" name="dosubmit" value="<?php echo L('delete')?>" /></div>  </div>
</div>
</form>

<div id="pages" class="page"><?php echo ($page); ?></div>