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

 <link rel="stylesheet" href="http://www.cuteyep.com/app/public/css/swiper.min.css">
<style>
body{ background: #f5f5f5;}
    .swiper-container {
        width: 100%;
        height:auto;
        background: #000;
    }
    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
    }
    .ad_top{
      padding: 0 10px 10px 10px;
      overflow: hidden;
    }
    .ad_top img{
      border-radius: 10px;
    }
    .swiper-pagination-bullet{
      background: none;
      border: 1px solid #fff;
      opacity: 1;
    }
    .swiper-pagination-bullet.swiper-pagination-bullet-active{
      background: #fff;
    }
    .hm-top{
      padding-left: 5px;
    }

</style>

      <div style="height:41px;"></div>

      <div class="ad_top" style="<?php if($ad['pic']=='') echo 'display:none;'; ?>">
        <a onclick="myInterfaceName.see('http://www.cuteyep.com/app/index.php?s=Me/poster');">
          <img src="<?php echo ($ad["pic"]); ?>" alt="" style="width:100%">
        </a>
      </div>


      <div class="swiper-container" style="<?php if($ba_list=='') echo 'display:none;'; ?>">
        <div class="swiper-wrapper">
          <?php if(is_array($ba_list)): $i = 0; $__LIST__ = $ba_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="swiper-slide"><a <?php if($vo['ad_url']!==''){ ?>onclick="myInterfaceName.see('<?php echo ($vo['ad_url']); ?>');"<?php } ?>><img src="<?php echo ($vo["pics"]); ?>" class="hm-ba"></a></div><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
      </div>


      <div class="hm-list">
        <div>
          <ul>
            <li class="hm-top">推荐表情</li>
            <li class="hm-topr">&nbsp</li>
          </ul>
          <ul class="cb"></ul>
        </div>
        <div class="hm-cn">
          <?php if(is_array($elist)): $i = 0; $__LIST__ = $elist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="hm-cn-list" onclick="pvUrl.call(this,'http://www.cuteyep.com/app/index.php?s=Index/expression_con/id/<?php echo ($vo["id"]); ?>')">
              <div><img src="<?php echo ($vo["cover"]); ?>" class="hm-cn-listi express"></div>
              <div class="hm-cn-listx">
                <p><?php echo ($vo["title"]); ?></p>
                <p class="pv">点击数<?php echo ($vo["pv"]); ?>次</p>
              </div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>

          <div class="cb"></div>
        </div>
      </div>
      <div class="hm-gu" style="<?php if($ad2['pic']=='') echo 'display:none;'; ?>"><img src="<?php echo ($ad2["pic"]); ?>"></div>
      <div class="hm-list">
        <div>
          <ul>
            <li class="hm-top">推荐语音贺卡</li>
            <li class="hm-topr">&nbsp</li>
          </ul>
          <ul class="cb"></ul>
        </div>
        <div class="hm-cn">
          <?php if(is_array($vlist)): $i = 0; $__LIST__ = $vlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="hm-cn-list" onclick="pvUrl.call(this,'http://www.cuteyep.com/app/index.php?s=Index/greeting_card_con/id/<?php echo ($vo["id"]); ?>')">
              <div><img src="<?php echo ($vo["cover"]); ?>" class="hm-cn-listi"></div>
              <div class="hm-cn-listx">
                <p><?php echo ($vo["title"]); ?></p>
                <p class="pv">点击数<?php echo ($vo["pv"]); ?>次</p>
              </div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>

          <div class="cb"></div>
        </div>
      </div>
      <div class="hm-gu" style="<?php if($ad3['pic']=='') echo 'display:none;'; ?>"><img src="<?php echo ($ad3["pic"]); ?>"></div>
      <div class="hm-list">
        <div>
          <ul>
            <li class="hm-top">精选壁纸</li>
            <li class="hm-topr">&nbsp</li>
          </ul>
          <ul class="cb"></ul>
        </div>
        <div class="hm-cn">
          <?php if(is_array($alist)): $i = 0; $__LIST__ = $alist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="hm-cn-list" onclick="pvUrl.call(this,'http://www.cuteyep.com/app/index.php?s=Index/wallpaper_con/id/<?php echo ($vo["id"]); ?>')">
              <div><img src="<?php echo ($vo["cover"]); ?>" class="hm-cn-listi"></div>
              <div class="hm-cn-listx">
                <p><?php echo ($vo["title"]); ?></p>
                <p class="pv">点击数<?php echo ($vo["pv"]); ?>次</p>
              </div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>

          <div class="cb"></div>
        </div>
      </div>

      <div style=" height:30px"></div>


            <!-- Swiper JS -->
 <script src="http://www.cuteyep.com/app/public/js/swiper.min.js"></script>

  <script>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true
    });
    // 点击数+1
    function pvUrl(url){
      var pvCount = parseInt($(this).find('.pv').text().substr(3,4));
      $(this).find('.pv').text('点击数'+(pvCount+1)+'次');
      myInterfaceName.see(url);
    }
    myInterfaceName.wancheng(0);
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