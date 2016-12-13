<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
	<head>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
	    <meta charset="utf-8">
			<meta name="full-screen" content="yes">
      <meta name="x5-fullscreen" content="true">
			<!-- <meta http-equiv="refresh" content="20"> -->
	    <title><?php echo ($title); ?></title>
	    <link rel="stylesheet" type="text/css" href="/cute/public/css/navigator.default.css" />
	    <link rel="stylesheet" type="text/css" href="/cute/public/font/iconfont.css">
	    <link rel="stylesheet" type="text/css" href="/cute/public/css/common.css">
			<link rel="stylesheet" href="/cute/public/css/dropload.css">
	    <script src="/cute/public/js/zepto.js"></script>
	    <script src="/cute/public/js/gmu.js"></script>
			<script src="/cute/public/js/dropload.min.js"></script>
	</head>
	<body>

<script src="/cute/public/js/gmu.js"></script>

	      <form  action="#" method="post" id="login">
	      	      <div class="login-top1">
	      	      	  <img src="/cute/public/images/cute-logo.png" class="login-logo">
	      	      	  <p>一个可爱的，有趣的APP</p>
	      	      </div>
	      	      <div style="padding: 15px;">
				      <div class="loginbg">
				      	 <p><input  placeholder="手机号" type="number" maxlength="11" name="u" class="blur login-input" id="username_i"><i class="iconfont login-icon">&#xe611;</i></p>
				      	 <p><input   placeholder="密码" name="p" type="password" maxlength="32"  class="blur login-input" id="password_i"> <i class="iconfont login-icon">&#xe608;</i></p>
				      </div>
				      <div style=" margin: 10px 0; color: #999;">
				      	<ul>
				      		  <li style=" float: left;" onclick="window.location.href='http://www.cuteyep.com/app/index.php?s=Login/retrieve_password1'">忘记密码？</li>
				      		  <li style=" float: right;" onclick="window.location.href='http://www.cuteyep.com/app/index.php?s=Login/register'">注册新账号</li>
				      	</ul>
				      	<ul class="cb"></ul>
				      </div>

				 </div>
				 <div class="reg-btnbox" style="padding-top: 0px">
				      	 <a href="#" class="reg-btn1" id="submit">登录</a>
<input type="submit" value="登录" class="lg_btn" style="display:none;"/>
				 </div>

	      </form>
           <div class="login-mr" style="display:none;">
           	<p class="login-fnt">或者</p>
           	<p style=" margin-top: 10px;">
           		<span  class="iconfont login-btn1" onclick="myInterfaceName.weixin_logo()"><img src="/cute/public/images/wechat.svg" style="height: 24px; vertical-align: middle;"> 微信登录</span>
           		<span  class="iconfont login-btn2" onclick="myInterfaceName.qq_login()"><img src="/cute/public/images/qq_1.svg" style="height: 20px;vertical-align: middle;">  QQ登录</span>
           		<span classc="cb"></span>
           	</p>
           </div>
	      <script src="/cute/public/js/common.js"></script>
	      <script type="text/javascript">



	          $(function(){

                   $('.blur').focus(function(){
                      $(this).addClass('reg_select')
                   })
                   $('.blur').blur(function(){
                      $(this).removeClass('reg_select')
                   })

                   $('#password_i').onlyNumAlpha();//只能输入数字和英文
                   $('#submit').click(function(){
                   	   var user = $('#username_i').val();
                   	   var pas = $('#password_i').val();
                   	   if(user == 0){
                   	   	 return tip('请输入手机号');
                   	   }
                   	   if(pas < 6  ){
                   	   	 return tip('请输入正确的密码');
                   	   }
                   	$("form").submit();

                   	   return true;
                   });

                   $("form").submit(function(){

           			$.post('/cute/index.php?s=Login/login',$("form").serialize(),function(data){
           				var obj = JSON.parse(data);
           				 if(obj.id>0){
           					setTimeout(clos,1000);
           					 return tip('登录成功！');
           				 }
           				 else         return tip(obj.msg);
           			});
           			return false;
           		});
                   setInterval(islogo,1000);
	          });
function clos(){
	myInterfaceName.clos();
}
function islogo(){
	 myInterfaceName.weixin_logo_get();
}
	      </script>
<script>
myInterfaceName.title($('title').html());
myInterfaceName.wancheng(0);
</script>
</body>
</html>