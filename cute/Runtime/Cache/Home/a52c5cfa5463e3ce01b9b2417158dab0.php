<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
	<head>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
	    <meta charset="utf-8">
	    <title>主页</title>
      <link rel="stylesheet" type="text/css" href="/cute/public/css/navigator.default.css" />
	    <link rel="stylesheet" type="text/css" href="/cute/public/font/iconfont.css">
	    <link rel="stylesheet" type="text/css" href="/cute/public/css/common.css">
	    <script src="/cute/public/js/zepto.js"></script>
	    <script src="/cute/public/js/gmu.js"></script>
	</head>
	<style type="text/css">
 .nav-list.select{ color: #f65f83}
	</style>
	<body>
  <div class="center ld"><span  class="loading1"></span><p style=" color:#999;width:100%;">页面加载中</p></div>
  <div class="top">
               <div class="top-font">CUTEYEP</div>
               <div class="top-login"></div>
               <div class="iconfont top-search">&#xe604;</div>
        </div>
	<div class="list_page" style="padding-top:60px;">
	    <div class="page">

        </div>
      <div class="page" style="display:none;"></div>
      <div class="page" style="display:none;"></div>
      <div class="page" style="display:none;"></div>
      <div class="page" style="display:none;"></div>
	</div>


	     <div class="nav">
		  	   <div class="nav-list select">
		  	   	    <p>
		  	   	    	<img src="svg/home.svg" class="nav-normal" style=" display:none">
		  	   	    	<img src="svg/home-active.svg" class="nav-active" >
		  	   	    </p>
		  	   	    <p>首页</p>
		  	   </div>
		  	   <div class="nav-list">
		  	   	    <p>
		  	   	    	<img src="svg/eme.svg" class="nav-normal">
		  	   	    	<img src="svg/eme-active.svg"  class="nav-active"  style=" display:none">
		  	   	    </p>
		  	   	    <p>表情</p>
		  	   </div>
		  	   <div class="nav-list">
		  	   	    <p>
		  	   	    	<img src="svg/card.svg" class="nav-normal">
		  	   	    	<img src="svg/card-active.svg"  class="nav-active" style=" display:none">
		  	   	    </p>
		  	   	    <p>语音贺卡</p>
		  	   </div>
		  	   <div class="nav-list">
		  	   	    <p>
		  	   	    	<img src="svg/paper.svg" class="nav-normal">
		  	   	    	<img src="svg/paper-active.svg"  class="nav-active" style=" display:none">
		  	   	    </p>
		  	   	    <p>壁纸</p>
		  	   </div>

		  	   <div class="nav-list">
		  	   	    <p>
		  	   	    	<img src="svg/me.svg" class="nav-normal">
		  	   	    	<img src="svg/me-active.svg"  class="nav-active" style=" display:none">
		  	   	    </p>
		  	   	    <p>我</p>
		  	   </div>
		  	   <div class="cb"></div>
		  </div>
<!-- <script src="http://www.cuteyep.com/app/public/js/iframe.js"></script> -->
<script>
    setInterval(auto_login,1000);
    disp_page(0);
    //disp_page('login_name');
</script>


	</body>
</html>