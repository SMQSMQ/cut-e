<?php if (!defined('THINK_PATH')) exit();?>
<!doctype html>
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
 <link rel="stylesheet" href="http://www.cuteyep.com/app/public/css/swiper.min.css">
<style>

html,body{
  height: 100%;
  overflow: auto;
  /*overflow: hidden;*/
}
    body {
        background: #f5f5f5;
        margin: 0;
        padding: 0;
    }
    .swiper-wrapper,.swiper-slide img{
      width: 100%;
    }
    .swiper-slide{
      width: 100%!important;
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
    .hm-cn-listi .express{
      border-radius: 6px;
    }
    </style>

    <div style="position:absolute;top:0;bottom:30px;overflow:scroll;-webkit-overflow-scrolling: touch;">
      <div class="swiper-container" style="<?php if($ba_list=='') echo 'display:none;'; ?>">
        <div class="swiper-wrapper">
          <?php if(is_array($ba_list)): $i = 0; $__LIST__ = $ba_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="swiper-slide"><a onclick="disp_page('<?php echo ($vo["ad_url"]); ?>/type/1')"><img src="<?php echo ($vo["pics"]); ?>" class="hm-ba"></a></div><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
        <div class="cb"></div>
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
          <?php if(is_array($elist)): $i = 0; $__LIST__ = $elist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="hm-cn-list" onclick="pvUrl.call(this,'http://www.cuteyep.com/app/index.php?s=Index/expression_con/id/<?php echo ($vo["id"]); ?>/type/1')">
              <div><img src="<?php echo ($vo["cover"]); ?>" class="hm-cn-listi express"></div>
              <div class="hm-cn-listx">
                <p><?php echo ($vo["title"]); ?></p>
                <p class="pv">点击数<?php echo ($vo["pv"]); ?>次</p>
              </div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>

          <div class="cb"></div>
        </div>
      </div>
      <div class="hm-gu"><img src="/cute/public/images/pic1.jpg"></div>
      <div class="hm-list">
        <div>
          <ul>
            <li class="hm-top">推荐语音贺卡</li>
            <li class="hm-topr">&nbsp</li>
          </ul>
          <ul class="cb"></ul>
        </div>
        <div class="hm-cn">
          <?php if(is_array($vlist)): $i = 0; $__LIST__ = $vlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="hm-cn-list" onclick="pvUrl.call(this,'http://www.cuteyep.com/app/index.php?s=Index/greeting_card_con/id/<?php echo ($vo["id"]); ?>/type/1')">
              <div><img src="<?php echo ($vo["cover"]); ?>" class="hm-cn-listi"></div>
              <div class="hm-cn-listx">
                <p><?php echo ($vo["title"]); ?></p>
                <p class="pv">点击数<?php echo ($vo["pv"]); ?>次</p>
              </div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>

          <div class="cb"></div>
        </div>
      </div>

      <div class="hm-gu"><img src="/cute/public/images/pic1.jpg"></div>
      <div class="hm-list">
        <div>
          <ul>
            <li class="hm-top">精选壁纸</li>
            <li class="hm-topr">&nbsp</li>
          </ul>
          <ul class="cb"></ul>
        </div>
        <div class="hm-cn">
          <?php if(is_array($alist)): $i = 0; $__LIST__ = $alist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="hm-cn-list" onclick="pvUrl.call(this,'http://www.cuteyep.com/app/index.php?s=Index/wallpaper_con/id/<?php echo ($vo["id"]); ?>/type/1')">
              <div><img src="<?php echo ($vo["cover"]); ?>" class="hm-cn-listi"></div>
              <div class="hm-cn-listx">
                <p><?php echo ($vo["title"]); ?></p>
                <p class="pv">点击数<?php echo ($vo["pv"]); ?>次</p>
              </div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
          <div class="cb"></div>
        </div>
      </div>

    </div>


    <script src="http://www.cuteyep.com/app/public/js/swiper.min.js"></script>
    <script>

    //图片滚动的
    var swiper1 = new Swiper('.swiper-container', {
        iOSEdgeSwipeDetection : true,
        pagination: '.swiper-pagination',
        paginationClickable: true
    });

    function pvUrl(url){
      var pvCount = parseInt($(this).find('.pv').text().substr(3,4));
      $(this).find('.pv').text('点击数'+(pvCount+1)+'次');
      disp_page(url);
    }

    disp_page('wancheng0');
    </script>