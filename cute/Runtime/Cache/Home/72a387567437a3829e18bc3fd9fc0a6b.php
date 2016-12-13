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

    <div id="fixnav" style=" position: absolute; background: #f00; z-index: 1000; height: 50px; opacity: 0.9;">nav</div> 

    <div style="height: 5000px; width:100%; background:#ccc;"></div>
	<script type="text/javascript"> 
		$(window).scroll(function(){ 
		// 重点就是下面这一条语句的实现 
		$("#fixnav").css({top: window.innerHeight + window.scrollY - $("#fixnav").outerHeight() }); 
		}); 
	</script> 
<script>
myInterfaceName.title($('title').html());
myInterfaceName.wancheng(0);
</script>
</body>
</html>