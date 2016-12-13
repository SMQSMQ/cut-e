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

    <style type="text/css">


html,body{
  height: 100%;
  overflow-y: scroll;
}
.confot {
    padding-top: 5px;
    height: 25px;
    padding-bottom: 3px;
}
.confot img{height:25px; display:inline-block; border: none;}

.zan-select{ background: #999;}

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


    </style>

          <div class="share-shade"></div>
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

          <div>
            <div class="wplcn-t" style="background: url(<?php echo ($see["cover"]); ?>) no-repeat 50% 50%; background-size: cover;">

              <div class="wplcn-fd" style=" z-index: 2;">
                <div class="wplcn-fdic" id="follow">
                  <p class="wplcn-fdico confot" >
                    <i ><img src="/cute/public/images/focus.svg"> </i>
                    <i style=" display:none;"><img src="/cute/public/images/focus-filled.svg"> </i>
                  </p>
                  <p style="font-size:10px"><?php echo ($see["is_gz"]); ?>关注</p>
                </div>
                <div class="wplcn-fdic"  onclick="disp_page('card:http://www.cuteyep.com/app/Diy/greeting_card3_opp/id/<?php echo ($see["id"]); ?>/type/1')" >
                  <p class="wplcn-fdico confot" ><img src="http://www.cuteyep.com/app/public/images/view.svg"> </p>
                  <p style="font-size:10px">制作</p>
                </div>
                <div class="wplcn-fdic" id="share">
                  <p class="confot"><img src="/cute/public/images/share.svg"> </p>
                  <p style="font-size:10px" >分享</p>
                </div>

              </div>
            </div>
          </div>
          <div class="wplcn-bg">
            <div class="wplcn-t1"><?php echo ($see["title"]); ?></div>
            <div class="wplcn-t2" style="line-height:20px;"><?php echo ($see["memo"]); ?></div>
            <div class="wplcn-t3">浏览数：<span style=" color: #f00"><?php echo ($see["pv"]); ?></span>次</div>
          </div>
          <?php $con = str_replace('，','',mb_substr($see['memo'],0,40,'utf-8')); ?>
          <div class="wplcn-bg">
            <span class="wplcn-share" onclick="disp_page('wx_music:'+':'+'<?php echo ($see["title"]); ?>'+':'+'<?php echo ($con); ?>'+':'+'<?php echo ($see["cover"]); ?>'+':'+'http://www.cuteyep.com/h5/index.php?s=Index/greeting_card_con/id/<?php echo ($see["id"]); ?>/type/1')"><img src="/cute/public/images/weixin.svg" style="height:45px; display:block;"></span>
            <span class="wplcn-share" onclick="qq('<?php echo ($see["title"]); ?>','<?php echo ($con); ?>','<?php echo ($see["cover"]); ?>','http://www.cuteyep.com/h5/index.php?s=Index/greeting_card_con/id/<?php echo ($see["id"]); ?>/type/1')"><img src="/cute/public/images/qq.svg" style="height:45px; display:block;"></span>
            <!-- <span class="wplcn-share" onclick="myInterfaceName.share_Text('<?php echo ($see["title"]); ?>','<?php echo ($see["con"]); ?>http://www.cuteyep.com/h5/index.php?s=Index/greeting_card_con/id/<?php echo ($see["id"]); ?>')"><img src="/cute/public/images/more.svg" style="height:45px; display:block;"></span> -->
            <span class="wplcn-share share-more"><img src="/cute/public/images/more.svg" style="height:45px; display:block;"></span>
          </div>


          <div class="expbtn" style=" margin-top: 20px;">
            <span class="zan" id="">赞</span>
            <span style=" display:none;">发送给好友</span>
            <span  style="display:none;" onclick="disp_page.auto_see('http://www.cuteyep.com/app/index.php?s=Diy/greeting_card0/type/1')">我要制作</span>
          </div>
          <div class="expzan">
            <span>收到的赞</span>
            <div class="expzan-im">
              <?php if(is_array($slist)): $i = 0; $__LIST__ = $slist;if( count($__LIST__)==0 ) : echo "$empty" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><span class="expzan-hd"><img src="<?php echo ($vo["pic"]); ?>" class="img"></span><?php endforeach; endif; else: echo "$empty" ;endif; ?>
              <i class=" expzan-mor" onclick="disp_page('http://www.cuteyep.com/app/index.php?s=Index/like_list/id/<?php echo ($see["id"]); ?>/t/2/type/1')"><?php echo ($count); ?></i>
            </div>
          </div>

          <div class="wplcn-tit2">相关语音贺卡推荐</div>
          <div style=" padding: 0px 10px 10px 10px;" >
            <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "$empty" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="hm-cn-list" onclick="disp_page('http://www.cuteyep.com/app/index.php?s=Index/greeting_card_con/id/<?php echo ($vo["id"]); ?>/type/1')">
                <div><img src="<?php echo ($vo["cover"]); ?>" class="hm-cn-listi"></div>
                <div class="hm-cn-listx">
                  <p><?php echo ($vo["title"]); ?></p>
                  <p>点击数<?php echo ($vo["pv"]); ?>次</p>
                </div>
              </div><?php endforeach; endif; else: echo "$empty" ;endif; ?>
            <div class="cb"></div>
          </div>
          <script src="/cute/public/js/common.js"></script>
          <script type="text/javascript">

                  //截取两行内容
                  var wplcn_t2 = $('.wplcn-t2').text();
                  if(wplcn_t2.length >= 50){
                    $('.wplcn-t2').text(wplcn_t2.substring(0,49)+'...');
                  }

                  //赞
                  var is_zan = '<?php echo ($see["is_zan"]); ?>';
                  var zan_count = parseInt($('.expzan-mor').html())
                  if(is_zan == 0){
                    $('.zan').html('赞');
                    is_zan = 1;
                  }else{
                    $('.zan').html('已赞');
                    is_zan = 0;
                  }
                  $('.zan').click(function(){
                    var id = '<?php echo ($see["id"]); ?>';
                    var  url = 'http://www.cuteyep.com/cute/index.php?s=Login/index/type/1';
                    $.post('/cute/index.php?s=Index/is_zan',{id:id,type:2},function(data){
                      //alert(data);
                      if(data=='') disp_page(url);
                      else{
                        if(is_zan == 0){
                          $('.zan').html('赞');
                          is_zan = 1;
                          tip('取消赞成功');
                          zan_count -= 1;
                        }else{
                          $('.zan').html('已赞');
                          is_zan = 0;
                          tip('赞成功')
                          zan_count += 1;
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

                  var is_gz = '<?php echo ($see["is_gz"]); ?>';
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
                    var  url = 'http://www.cuteyep.com/cute/index.php?s=Login/index/type/1';
                    $.post('/cute/index.php?s=Index/is_guanzhu',{id:id,type:2},function(data){
                      if(data=='') disp_page(url);
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

                  $('.share-more,#share').click(function(e){
                    // $('.share-shade').show(500);
                    $('.share-shade,.share-inner').addClass('up');
                    return false;
                  })

                  $('.cancel-btn').click(function(){
                    // $('.share-shade').hide(3000);
                    $('.share-shade,.share-inner').removeClass('up');
                  })

                  $('.share-inner li').click(function(){
                    var index = $(this).index();
                    var u = 'http://www.cuteyep.com/h5/index.php?s=Index/greeting_card_con/id/<?php echo ($see["id"]); ?>/type/1';
                    var t = '<?php echo ($see["title"]); ?>';
                    var c = '<?php echo ($con); ?>';
                    var p = '<?php echo ($see["cover"]); ?>';
                    if(index==0) disp_page('wx_music:'+t+':'+c+':'+p+':'+u);
                    if(index==1) quan(t,c,p,u);
                    if(index==2) qq(t,c,p,u);
                  })




                  </script>

</body>
<script>
disp_page('wancheng0:'+$('title').html());
</script>
</html>