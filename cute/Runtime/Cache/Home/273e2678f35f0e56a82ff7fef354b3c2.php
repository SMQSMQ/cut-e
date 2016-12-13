<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
	<head>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
	    <meta charset="utf-8">
	    <title><?php echo ($title); ?></title>
	    <link rel="stylesheet" type="text/css" href="/cute/public/css/navigator.default.css" />
	    <link rel="stylesheet" type="text/css" href="/cute/public/font/iconfont.css">
	    <link rel="stylesheet" type="text/css" href="/cute/public/css/ios_common.css">
      <script src="/cute/public/js/zepto.js"></script>
      <script src="/cute/public/js/ios_public.js"></script>
	</head>
	<body>
 <style>
.meicon{ height: 40px;text-align: center;}
.meicon img{ display: inline-block; border: none; height: 35px;}

.me-head img{width:88px; height: auto; border-radius: 0px;  display: inline-block; }
</style>
<section>
      <div class="me-top" >
            <div class="me-head">
            <span style="height:88px; width: 88px; display:inline-block; overflow: hidden; border-radius:360px; "><img src="<?php if($see['user_pic'] != '' ): echo ($see["user_pic"]); else: ?>/cute/public/images/cute-logo.png<?php endif; ?>" onerror="this.src='/cute/public/images/cute-logo.png'" class="myimg"></span></div>
            <div class="me-tit"><?php echo ($see["user_name"]); ?></div>
      </div>
      <div class="me-menu">
             <div class="me-menu-item dznice">
                 <p class="me-menut meicon"><img src="/cute/public/images/nice_me.svg" ></p>
                 <p>我的点赞</p>
             </div>
             <div class="me-menu-item me-menuhr gzfollow">
                 <p class="me-menut meicon"><img src="/cute/public/images/follow_me.svg" ></p>
                 <p>我的关注</p>
             </div>
             <div class="me-menu-item" onclick="disp_page('http://www.cuteyep.com/app/index.php?s=Me/diy/type/1')" style=" display:none;">
                 <p class="me-menut meicon"><img src="/cute/public/images/make.svg" ></p>
                 <p>我的制作</p>
             </div>
             <div class="me-menu-item xzdown">
                 <p class="me-menut meicon"><img src="/cute/public/images/down_me.svg" ></p>
                 <p>我的下载</p>
             </div>

             <div class="me-menu-item" onclick="disp_page('http://www.cuteyep.com/app/index.php?s=Me/poster/type/1')">
                 <p class="me-menut meicon"><img src="/cute/public/images/notice_me.svg" ></p>
                 <p>公告</p>
             </div>
             <div class="me-menu-item me-menuhr" onclick="fenxiang_find(1)">
                 <p class="me-menut meicon"><img src="/cute/public/images/friend_me.svg" ></p>
                 <p>邀请好友</p>
             </div>
             <div class="me-menu-item gdmore">
                 <p class="me-menut meicon"><img src="/cute/public/images/more-big.svg"></p>
                 <p>更多</p>
             </div>
      </div>
</section>
<div style=" height:80px"></div>
          <script src="/cute/public/js/ios_public.js"></script>
         <script>
         disp_page('wancheng4');
         if(GetQueryString('name')==null) $('.me-tit').html('请登录');
         else{
           $('.me-top img').attr('src',GetQueryString('pic'))
            $('.me-tit').html(GetQueryString('name'));
         }
          // 我的头像
         $('.myimg').click(function(){
            if(GetQueryString('newid')==null){
                disp_page('http://www.cuteyep.com/app/index.php?s=Login/index/type/1');
            }else{
                var newid = GetQueryString('newid');
                disp_page('http://www.cuteyep.com/app/index.php?s=Me/data/type/1/newid/'+newid);
            }
         })

         // 我的点赞
         $('.dznice').click(function(){
            if(GetQueryString('newid')==null){
                $('.me-tit').html('请登录');
            }else{
                var newid = GetQueryString('newid');
                disp_page('http://www.cuteyep.com/app/index.php?s=Me/nice/type/1/newid/'+newid);
            }
         })

         // 我的关注
         $('.gzfollow').click(function(){
            if(GetQueryString('newid')==null){
                $('.me-tit').html('请登录');
            }else{
                var newid = GetQueryString('newid');
                disp_page('http://www.cuteyep.com/app/index.php?s=Me/follow/type/1/newid/'+newid);
            }
         })

         // 我的下载
         $('.xzdown').click(function(){
            if(GetQueryString('newid')==null){
                $('.me-tit').html('请登录');
            }else{
                var newid = GetQueryString('newid');
                disp_page('http://www.cuteyep.com/app/index.php?s=Me/down/type/1/newid/'+newid);
            }
         })
          // 更多
         $('.gdmore').click(function(){
            var newid = GetQueryString('newid');
            disp_page('http://www.cuteyep.com/app/index.php?s=Me/more/type/1/newid/'+newid);
         })
         function GetQueryString(name)
         {
              var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
              var r = window.location.search.substr(1).match(reg);
              if(r!=null)return  unescape(r[2]); return null;
         }
         </script>