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

 <link rel="stylesheet" href="http://www.cuteyep.com/app/public/css/common.css">
 <link rel="stylesheet" href="http://www.cuteyep.com/app/public/css/swiper.min.css">
    <style type="text/css">




.confot {
    padding-top: 5px;
    height: 25px;
    padding-bottom: 3px;
}
.confot img{height:25px; display:inline-block; border: none;}

.abum .wp-fllist:last-of-type{ border: none;}

    .swiper-container {
        width:100%;
        height:auto;
        background: #f5f5f5;
    }
    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;

        /* Center slide text vertically */
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

    .share-shade{
      position: fixed;
      margin: auto;
      right: 0;
      bottom: 0;
      left: 0;
      background: rgba(0,0,0,.6);
      z-index: 15;
      top: 100%;
      transition: top ease .3s;
    }
    .share-shade.up{
      top: 0;
    }
    .share-inner{
      width: 90%;
      position: fixed;
      margin: auto;
        border-radius: 6px;
      -ms-border-radius: 6px;
      -webkit-border-radius: 6px;
      -o-border-radius: 6px;
      -moz-border-radius: 6px;
      top: 100%;
      left: 0;
      right: 0;
      text-align: center;
      background: #fff;
      z-index: 20;
      transition: top ease .3s;
    }
    .share-inner.up{
      top: 50%;
      transform: translateY(-50%);
      -webkit-transform: translateY(-50%);
      -moz-transform: translateY(-50%);
      -o-transform: translateY(-50%);
      -ms-transform: translateY(-50%);

    }
    .share-inner h2{
          border-radius: 6px 6px 0 0 ;
      -ms-border-radius: 6px 6px 0 0 ;
      -webkit-border-radius: 6px 6px 0 0 ;
      -o-border-radius: 6px 6px 0 0 ;
      -moz-border-radius: 6px 6px 0 0 ;
      border-bottom: 1px solid #ccc;
      padding: 15px;
      background-color: #f5f5f5;
      color: #666;
    }
    .share-inner ul{
      padding: 0;
    }

    .share-inner ul li{
      width: calc(100% - 20px);
      padding: 10px;
      float: none;
      line-height: 45px;
      border-bottom: 1px solid #e9e9e9;
    }
    .share-inner ul li::after{
      content: '';
      display: block;
      clear: both;
    }
    .share-inner ul li .share-img{
      float: left;
      width: 45px;
      height: 45px;
      margin: 0 auto;
    }
    .share-inner ul li .share-img img{
      width: 100%;
    }
    .share-inner ul li p{
      float: left;
      margin-left: 15px;
      font-size: 18px;
    }
    .share-inner .cancel-btn{
      padding: 15px;
      font-size: 17px;
      border-top: 1px solid #ccc;
      color: #0a9950;
    }

    @media screen and (max-width:320px){
      .swiper-container img{
        width: 320px;
      }
    }

    </style>
    <div class="share-shade">
      <div class="share-inner">
        <h2>CuteYep分享</h2>
        <ul>
          <li>
            <div class="share-img">
              <img src="http://www.cuteyep.com/app/public/images/weixin.svg" alt="">
            </div>
            <p>微信好友</p>
          </li>
          <li>
            <div class="share-img">
              <img src="http://www.cuteyep.com/app/public/images/fridc.svg" alt="">
            </div>
            <p>微信朋友圈</p>
          </li>
          <li>
            <div class="share-img">
              <img src="http://www.cuteyep.com/app/public/images/qq.svg" alt="">
            </div>
            <p>腾讯QQ</p>
          </li>

        </ul>
        <div class="cancel-btn">取消</div>
      </div>
    </div>


    <div>
      <div class="wplcn-t">
        <!--开始-->
        <div class="swiper-container"  onclick="myInterfaceName.auto_see('http://www.cuteyep.com/app/index.php?s=Index/wallpaper_con_view/id/<?php echo ($see["id"]); ?>')">
          <div class="swiper-wrapper">

            <?php if(is_array($see['pics'])): $k = 0; $__LIST__ = $see['pics'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><div class="swiper-slide"><img src="<?php echo ($vo); ?>" class="hm-ba"></div><?php endforeach; endif; else: echo "" ;endif; ?>

          </div>
        </div>
        <!--结束-->
        <div class="wplcn-fd">
          <div class="wplcn-fdic" id="follow" style="width: 25%">
            <p class="wplcn-fdico confot" >
              <i ><img src="/cute/public/images/focus.svg"> </i>
              <i style=" display:none;"><img src="/cute/public/images/focus-filled.svg"> </i>
            </p>
            <p style="font-size: 10px"><?php echo ($see["is_gz"]); ?>关注</p>
          </div>
          <div class="wplcn-fdic down" style="width: 25%">
            <p class="confot"><img src="/cute/public/images/download.svg"> </p>
            <p style="font-size: 10px">下载</p>
          </div>
          <div class="wplcn-fdic set_bizhi" style="width: 25%">
            <p class="confot"><img src="/cute/public/images/setup_1.svg"> </p>
            <p style="font-size: 10px">马上设定</p>
          </div>
          <div class="wplcn-fdic" style="width:25%" id="share">
            <p class="confot"><img src="/cute/public/images/share.svg"> </p>
            <p style="font-size: 10px">分享</p>
            <p style="font-size: 10px; display:none;" >分享</p>
          </div>
        </div>
      </div>
    </div>
    <div class="wplcn-bg">
      <div class="wplcn-t1"><?php echo ($see["title"]); ?></div>
      <div class="wplcn-t2"><?php echo ($see["memo"]); ?></div>
      <div class="wplcn-t3">浏览数：<span style=" color: #f00"><?php echo ($see["pv"]); ?></span>次</div>
    </div>
    <div class="wplcn-bg">
      <span class="wplcn-share" onclick="myInterfaceName.weixin_fenxiang('http://www.cuteyep.com/h5/index.php?s=Index/wallpaper_con/id/<?php echo ($see["id"]); ?>','Cute-壁纸-<?php echo ($see["title"]); ?>','<?php echo ($see["memo"]); ?>','<?php echo ($see["cover"]); ?>',0)"><img src="/cute/public/images/weixin.svg" style="height:45px; display:block;"></span>
      <span class="wplcn-share" onclick="myInterfaceName.qq_Share('Cute-壁纸-<?php echo ($see["title"]); ?>','<?php echo ($see["memo"]); ?>','http://www.cuteyep.com/h5/index.php?s=Index/wallpaper_con/id/<?php echo ($see["id"]); ?>','<?php echo ($see["cover"]); ?>')"><img src="/cute/public/images/qq.svg" style="height:45px; display:block;"></span>
      <!-- <span class="wplcn-share" onclick="myInterfaceName.share_Text('<?php echo ($see["title"]); ?>','<?php echo ($see["memo"]); ?>http://www.cuteyep.com/h5/index.php?s=Index/wallpaper_con/id/<?php echo ($see["id"]); ?>')"><img src="/cute/public/images/more.svg" style="height:45px; display:block;"></span> -->
      <span class="wplcn-share share-more"><img src="/cute/public/images/more.svg" style="height:45px; display:block;"></span>
    </div>
    <div class="expbtn" style=" margin-top: 20px;">
      <span class="zan">赞</span>
      <span style="<?php if($ad_url['ad_url']=='') echo 'display:none;'; ?>" onclick="myInterfaceName.ad_url('<?php echo ($ad_url["ad_url"]); ?>')">制作手机壳</span>
    </div>
    <div class="expzan">
      <span>收到的赞</span>
      <div class="expzan-im">
        <?php if(is_array($slist)): $i = 0; $__LIST__ = $slist;if( count($__LIST__)==0 ) : echo "$empty" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><span class="expzan-hd"><img src="<?php echo ($vo["pic"]); ?>" class="img"></span><?php endforeach; endif; else: echo "$empty" ;endif; ?>
        <i class=" expzan-mor" onclick="myInterfaceName.see('http://www.cuteyep.com/app/index.php?s=Index/like_list/id/<?php echo ($see["id"]); ?>/t/1')"><?php echo ($count); ?></i>
      </div>
    </div>
    <div class="wplcn-bg1">
      <div class="wplcn-tit">相关分组推荐</div>
      <div class="abum">
        <?php if(is_array($clist)): $i = 0; $__LIST__ = $clist;if( count($__LIST__)==0 ) : echo "$empty" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="wp-fllist" onclick="myInterfaceName.see('http://www.cuteyep.com/app/index.php?s=Index/wallpaper_list/id/<?php echo ($vo["id"]); ?>')">
            <div class="wp-fllist-hd"><img src="<?php echo ($vo["pic"]); ?>"  class="img"></div>
            <div class="wp-flist-cn">
              <p><?php echo ($vo["title"]); ?></p>
              <p><?php echo ($vo["num"]); ?>张</p>
            </div>
          </div><?php endforeach; endif; else: echo "$empty" ;endif; ?>

      </div>
    </div>
    <div class="wplcn-tit2">相关壁纸推荐</div>
    <div style=" padding: 0px 10px 10px 10px;" >
      <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "$empty" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="hm-cn-list" onclick="myInterfaceName.see('http://www.cuteyep.com/app/index.php?s=Index/wallpaper_con/id/<?php echo ($vo["id"]); ?>')">
          <div><img src="<?php echo ($vo["cover"]); ?>" class="hm-cn-listi"></div>
          <div class="hm-cn-listx">
            <p><?php echo ($vo["title"]); ?></p>
            <p>点击数<?php echo ($vo["pv"]); ?>次</p>
          </div>
        </div><?php endforeach; endif; else: echo "$empty" ;endif; ?>

      <div class="cb"></div>
    </div>
            <!-- Swiper JS -->
          <script src="http://www.cuteyep.com/app/public/js/swiper.min.js"></script>
          <script src="http://www.cuteyep.com/app/public/js/common.js"></script>


         <script type="text/javascript">
                  //赞
                  var is_zan = '<?php echo ($see["is_zan"]); ?>';//为0表示未赞，为1表示已赞
                  var zan_count = parseInt($('.expzan-mor').html())
                  if(is_zan == 0){
                    $('.zan').html('赞');
                    is_zan = 1;
                  }else{
                    $('.zan').html('已赞');
                    is_zan = 0;
                  }
                  $('.zan').click(function(){
                    zani= 2;
                    var id = '<?php echo ($see["id"]); ?>';
                    var  url = 'http://www.cuteyep.com/cute/index.php?s=Login';
                    $.post('/cute/index.php?s=Index/is_zan',{id:id,type:1},function(data){
                      //alert(data);
                      if(data=='') myInterfaceName.see(url);//如果没登陆，跳转到登录页面
                      else{
                        if(is_zan == 0){
                          $('.zan').html('赞');
                          is_zan = 1;
                          tip('取消赞成功');
                          zan_count -= 1;//赞人数-1
                        }else{
                          $('.zan').html('已赞');
                          is_zan = 0;
                          tip('赞成功')
                          zan_count += 1; //赞人数+1
                        }
                        $('.expzan-mor').html(zan_count)
                      }
                    });
                  });


                  //赞人数超过100显示99+
                  var niceM= '<?php echo ($count); ?>';
                  if(niceM > 100){
                    $('.expzan-mor').html('99+')
                  }
                  if(niceM == 0){
                    $('.expzan-mor').hide();
                  }


                  //关注

                  var is_gz = '<?php echo ($see["is_gz"]); ?>';//为0表示未关注，为1表示已关注
                  if(is_gz == 0){
                    $('#follow').find('p').eq(1).html('关注');
                    $('#follow i').eq(1).hide();
                    $('#follow i').eq(0).show();
                    is_gz = 1;

                  }else{
                    $('#follow').find('p').eq(1).html('已关注');
                    $('#follow i').eq(0).hide();
                    $('#follow i').eq(1).show();
                    is_gz = 0;
                  }
                  $('#follow').click(function(){
                    var id = '<?php echo ($see["id"]); ?>';
                    var  url = 'http://www.cuteyep.com/cute/index.php?s=Login';
                    $.post('/cute/index.php?s=Index/is_guanzhu',{id:id,type:1},function(data){
                      if(data=='') myInterfaceName.see(url);//如果没登陆，跳转到登录页面
                      else{
                        if(is_gz == 0){
                          $('#follow').find('p').eq(1).html('关注');
                          $('#follow i').eq(1).hide();
                          $('#follow i').eq(0).show();
                          is_gz = 1;
                          tip('取消关注成功')
                        }else{
                          $('#follow').find('p').eq(1).html('已关注');
                          $('#follow i').eq(0).hide();
                          $('#follow i').eq(1).show();
                          is_gz = 0;
                          tip('关注成功')
                        }
                      }
                    });
                  })

                  var smIndex = 0;
                  var oood=$('.swiper-wrapper img').eq(smIndex).attr('src');
                  var Swiper = new Swiper('.swiper-container',{
                    onSlideChangeStart: function(swiper){
                      smIndex = Swiper.activeIndex;

                      oood=$('.swiper-wrapper img').eq(smIndex).attr('src');
                    }
                  });
                  $('.down').click(function(){
                    var id = '<?php echo ($see["id"]); ?>';
                    var  url = 'http://www.cuteyep.com/cute/index.php?s=Login';
                    $.post('/cute/index.php?s=Index/is_down',{id:id,type:1},function(data){
                      if(data=='') myInterfaceName.see(url);
                      //else if(data=='-1') return tip('已下载过了！');
                      else{
                        myInterfaceName.dow('<?php echo ($see["cover"]); ?>');
                        tip('下载成功，请到相册中查看！');
                        //$('.down').addClass('follow-select');//赞成功了
                        //$('.down').html('已下载');

                      }
                    });
                  });
                  $('.set_bizhi').click(function(){
                    var id = '<?php echo ($see["id"]); ?>';
                    var  url = 'http://www.cuteyep.com/cute/index.php?s=Login';
                    $.post('/cute/index.php?s=Index/is_down',{id:id,type:1},function(data){
                      if(data=='') myInterfaceName.see(url);
                      //else if(data=='-1') return tip('已下载过了！');
                      else{

                        myInterfaceName.set_bizhi(oood);
                        //tip('设置成功，请到退出app查看！');
                      }
                    });
                  });


                  $('.share-more,#share').click(function(e){
                    $('.share-shade,.share-inner').addClass('up');
                    myInterfaceName.mask(1);
                    return false;
                  })

                  $('.cancel-btn').click(function(){
                    $('.share-shade,.share-inner').removeClass('up');
                    myInterfaceName.mask(0);
                  })



                  $('.share-inner li').click(function(){
                    var index = $(this).index();
                    var u = 'http://www.cuteyep.com/h5/index.php?s=Index/wallpaper_con/id/<?php echo ($see["id"]); ?>';
                    var t = 'Cute-壁纸-<?php echo ($see["title"]); ?>';
                    var c = '<?php echo ($see["memo"]); ?>';
                    var p = '<?php echo ($see["cover"]); ?>';
                    if(index==0) myInterfaceName.weixin_fenxiang(u,t,c,p,0);
                    if(index==1) myInterfaceName.weixin_fenxiang(u,t,c,p,1);
                    if(index==2) myInterfaceName.qq_Share(t,c,u,p);
                    if(index==3) myInterfaceName.qq_Share(t,c,u,p);
                  })

                  </script>
<script>
myInterfaceName.title($('title').html());
myInterfaceName.wancheng(0);
</script>
</body>
</html>