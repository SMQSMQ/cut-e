<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
	<head>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
	    <meta charset="utf-8">
			<!-- <meta http-equiv="refresh" content="20"> -->
	    <title><?php echo ($title); ?></title>
	    <link rel="stylesheet" type="text/css" href="/cute/public/css/navigator.default.css" />
	    <link rel="stylesheet" type="text/css" href="/cute/public/font/iconfont.css">
	    <link rel="stylesheet" type="text/css" href="/cute/public/css/common.css">
	    <script src="/cute/public/js/zepto.js"></script>
	    <script src="/cute/public/js/gmu.js"></script>
	</head>
	<body>

<link rel="stylesheet" type="text/css" href="http://www.cuteyep.com/app/public/css/common.css">
          <div class="top">
               <div class="top-font">制作语音贺卡</div>
               <div  class="top-bb"  id="next" >下一步</div>
               <a href="clos" class="top-back" ></a>
          </div>
          <div style="height: 40px;"></div>
          <div class="cadbox">
                <div class="cad-tit">请输入贺卡标题</div>
                <div style=" padding: 10px;">
                      <input class="title" type="text" style=" border-radius:3px; border: 1px solid #ccc; width:90%; padding: 0 5%; height: 40px;" >
                </div>
          </div>
          <script src="http://www.cuteyep.com/app/public/js/common.js"></script>
          <script type="text/javascript">
                   $('#next').click(function(){
                	   var title = $('.title').val();
                	   if(title=='') return myInterfaceName.toast('请输入标题');
                	   $.post('http://www.cuteyep.com/app/index.php?s=Diy/add',{title:title},function(data){

                       auto('http://www.cuteyep.com/app/index.php?s=Diy/greeting_card1',$('.ld').attr('data-url'));
                	   });
                   });
          </script>
<script>
myInterfaceName.title($('title').html());
myInterfaceName.wancheng(0);
</script>
</body>
</html>