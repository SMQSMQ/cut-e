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

<style>
.meicon{ height: 40px;text-align: center;}
.meicon img{ display: inline-block; border: none; height: 35px;}

.me-head img{width:88px; height: auto; border-radius: 0px;  display: inline-block; }
</style>
          <div style=" height:41px" ></div>
          <section>
                <div class="me-top" >
                      <div class="me-head">
                      <span style="height:88px; width: 88px; display:inline-block; overflow: hidden; border-radius:360px; "><img src="<?php if($see['user_pic'] != '' ): echo ($see["user_pic"]); else: ?>/cute/public/images/cute-logo.png<?php endif; ?>" onerror="this.src='/cute/public/images/cute-logo.png'" onclick="myInterfaceName.see('http://www.cuteyep.com/app/index.php?s=Me/data')"></span></div>
                      <div class="me-tit"><?php echo ($see["user_name"]); ?></div>
                </div>
                <div class="me-menu">
                       <div class="me-menu-item" onclick="myInterfaceName.see('http://www.cuteyep.com/app/index.php?s=Me/nice')">
                           <p class="me-menut meicon"><img src="/cute/public/images/nice_me.svg" ></p>
                           <p>我的点赞</p>
                       </div>
                       <div class="me-menu-item me-menuhr" onclick="myInterfaceName.see('http://www.cuteyep.com/app/index.php?s=Me/follow')">
                           <p class="me-menut meicon"><img src="/cute/public/images/follow_me.svg" ></p>
                           <p>我的关注</p>
                       </div>
                       <div class="me-menu-item" onclick="myInterfaceName.see('http://www.cuteyep.com/app/index.php?s=Me/diy')" style=" display:none;">
                           <p class="me-menut meicon"><img src="/cute/public/images/make.svg" ></p>
                           <p>我的制作</p>
                       </div>
                       <div class="me-menu-item" onclick="myInterfaceName.see('http://www.cuteyep.com/app/index.php?s=Me/down')">
                           <p class="me-menut meicon"><img src="/cute/public/images/down_me.svg" ></p>
                           <p>我的下载</p>
                       </div>

                       <div class="me-menu-item " onclick="myInterfaceName.see('http://www.cuteyep.com/app/index.php?s=Me/poster')">
                           <p class="me-menut meicon"><img src="/cute/public/images/notice_me.svg" ></p>
                           <p>公告</p>
                       </div>
                       <div class="me-menu-item me-menuhr" onclick="myInterfaceName.share('http://www.cuteyep.com/app')">
                           <p class="me-menut meicon"><img src="/cute/public/images/friend_me.svg" ></p>
                           <p>邀请好友</p>
                       </div>
                       <div class="me-menu-item " onclick="myInterfaceName.see('http://www.cuteyep.com/app/index.php?s=Me/more')">
                           <p class="me-menut meicon"><img src="/cute/public/images/more-big.svg"></p>
                           <p>更多</p>
                       </div>
                </div>
          </section>
         <div style=" height:80px"></div>
         <script>
         myInterfaceName.wancheng(4);
         </script>
         <script>
setInterval("auto_login()",1000);
function auto_login(){
	 $.get('/cute/index.php?s=Login/auto_login',function(data){
		 var obj = JSON.parse(data);
		 var variable1 = obj.user_pic;
		 $('.me-top img').attr('src', obj.user_pic);
		 $('.me-top .me-tit').html(obj.user_name);
		 myInterfaceName.auto_login(obj.user_name,obj.user_pic);
	 });
}
</script>
</body>
</html>