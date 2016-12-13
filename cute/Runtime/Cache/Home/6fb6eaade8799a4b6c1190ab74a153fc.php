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
<link rel="stylesheet" type="text/css"  href="http://www.cuteyep.com/app/public/css/common.css">
<style type="text/css" id="acc">
.musicT{height: 40px; width:40px; background:rgba(0,0,0,0.5); border-radius:360px; overflow: hidden;  position:fixed;right: 20px; top: 30px; z-index: 2; }
.av{ animation:musicH 2s linear infinite;-ms-animation:musicH 2s linear infinite;-webkit-animation:musicH 2s linear infinite;-moz-animation:musicH 2s linear infinite;-o-animation:musicH 2s linear infinite;}
@keyframes musicH{
   0%{ transform:rotate(0deg);}
   100%{transform:rotate(360deg);}
}
@-moz-keyframes musicH{
   0%{ transform:rotate(0deg);}
   100%{transform:rotate(360deg);}
}
@-o-keyframes musicH{
   0%{ transform:rotate(0deg);}
   100%{transform:rotate(360deg);}
}
@-webkit-keyframes musicH{
   0%{ transform:rotate(0deg);}
   100%{transform:rotate(360deg);}
}
@-ms-keyframes musicH{
   0%{ transform:rotate(0deg);}
   100%{transform:rotate(360deg);}
}

.font-flash{font-size: 16px; line-height: 28px; height:auto;width: 100%; padding: 0 20px; box-sizing: border-box; color: #000; text-align: center; position:absolute;top: 60px; left: 0px;-webkit-text-stroke:1px #fff;font-weight: 800;text-shadow: 1px 3px 3px rgba(255,255,255,.5);-webkit-text-shadow: 1px 3px 3px rgba(255,255,255,.5);}


.view-wz{height: 100%; width:100%; position:fixed;left:0px; top:100%; background:#fff; z-index: 5;}
.view-wztit{height: 50px; line-height: 50px;  font-size: 18px; font-weight: normal; display: block; color: #fff; background:#000; position: relative;}
.view-wzls{margin-bottom: 20px; position:relative; display:block;}
.view-wzip{font-size: 16px; background:#f5f5f5; height: 50px; text-indent: 20px; border-radius:5px; border: none; width:100%;}
.view-wztxt{width:calc(100% - 2px); background:#fff; z-index: 3; position:absolute;left:0px; top:50px; border-radius:5px; border: 1px solid #ccc; max-height: 400px; display: none; overflow-y:auto; }
.view-wztls{padding: 10px; border-bottom: 1px solid #e9e9e9;}
.view-wztls:active{ background: #f5f5f5;}
.view-wztp{background:#f5f5f5; padding: 20px 0; height: 160px; text-indent: 20px; border-radius:5px; border: none; width:100%; margin-bottom: 10px; font-size: 16px; }

.view-wzmb{height: 50px; width:50px; background:url(http://www.cuteyep.com/app/public/images/view7.svg) no-repeat 50% 50%; background-size: 60%;  position:absolute;right: 0px; top:0px;}


.view-yy{height: 100%; width:100%; position:fixed;left:0px; top:100%; background:#fff; z-index: 5;}
.view-lz{height: 100%; width:100%; position:fixed;left:0px; top:100%; background:#fff; z-index: 5;}
.view-yytit{height: 40px; line-height: 40px; padding: 0 15px; font-size: 18px; font-weight: normal; display: block; color: #fff; background:#000;}

.view-closet{height: 50px; width:50%; background:#f5f5f5; font-size: 16px; text-align:  inline-block; line-height: 50px; float: left}
.view-closel{height: 50px; width:50%; background:#f5f5f5;font-size: 16px;text-align: center; display: inline-block; line-height: 50px; float: left}
.view-btn1{height: 50px;  width:50%;  line-height: 50px; text-align: center; color:#fff; font-size: 16px;background:#ee436b; float: left; display: inline-block; }

.cadonline-list{ display: block; height: 60px; background: #f5f5f5; position:relative;  margin: 10px 0;}

canvas {
  display: block;
  margin: 20px auto;
}

#range {
  display: block;
  margin: 0 auto;
  margin-top: 20px;
  width: 400px;
}


.cad-select {
    position: absolute;
    right: 15px;
    top: 15px;
    background: url(http://www.cuteyep.com/app/public/images/play2.svg) no-repeat 50% 50%;
    background-size:20px;
    text-align: center;
    color: #fff;
    border-radius: 360px;
    height: 20px;
    width: 20px;
}



.hk_return{height: 50px; position:absolute;top:0px;left:0px; width:50px; background:url(http://www.cuteyep.com/app/public/images/return_n.svg) no-repeat 50% 50%; background-size:25px;}
.hk_tek{height: 50px; position:absolute;top:0px;right:0px; width:auto;}
.hk_tek span{height: 30px; padding: 0 15px; font-size: 14px; display:inline-block; background:#ee436b; margin:10px; line-height: 30px; text-align: center; border-radius: 6px;}

.diyflash{height:120px; width:120px;border-radius:360px; display:inline-block;   background:#ffdce4;  position:relative; z-index: 0; }
.diyflash.select{animation: flashT  0.4s ease-in-out infinite alternate;}
@keyframes flashT{
    0%{  transform:scale(1); }
    100%{ transform:scale(1.4);}
}
.diyflash-i{height:105px; width:105px;  border-radius:360px;background: #ffb0c2;display: block; position: absolute;left:7.5px; top: 7.5px;}

/**默认**/
.diymsc{height: 120px; width:120px; background: #ff5f83 url(http://www.cuteyep.com/app//public/images/raid.svg) no-repeat 50% 50%; background-size:50%;  display:inline-block; border-radius: 360px; z-index: 1; }
/**按下**/
.diymsc.select{background: #f00;}
/**播放**/
.diymsc2{height: 120px; width:120px; background: #ccc url(http://www.cuteyep.com/app//public/images/raid.svg) no-repeat 50% 50%; background-size:50%; display:inline-block; border-radius: 360px;}

.tijiao{
	width:100px;background:#999;padding:10px;
	-o-border-radius: 5px;
	-ms-border-radius: 5px;
	-website-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
	position:absolute;top:45%;left:35%;
	text-align:center;
}
.return{height: 45px; width:45px;background: rgba(0,0,0,.5);border-radius: 50%;position:absolute;top: 30px;left:25px; color: #fff; text-decoration: none; line-height: 45px; text-align: center; font-size: 14px;}
</style>
        <div class="mask" style="display:none;"><div class="tijiao">正在提交...</div></div>
        <iframe src="<?php echo ($see["h5_url"]); ?>" height="100%"  width="100%" frameborder="no" style=" background:#ccc; position:fixed; left:0px; top: 0px; z-index: 1">
        </iframe>
        <div style=" position: fixed;left:0px; top: 0px; width:100%; height: 100%; z-index: 2">
          <div class="gcd-view">
            <a href="ios:clos" class="iconfont return">返回</a>
            <!--位置-->
            <div class="gcd-viewpos" style="background:none;bottom:15px;">
              <ul>
                <li class="gcd-viewls" style="width:24%;height:60px;"></li>
                   <li class="gcd-viewls" style="width:14%" id="wz-cf">
                        <p style="height:60px;text-align: center;overflow: hidden;"><img src="http://www.cuteyep.com/app/public/images/card-icon1.svg" style="width:35px;margin-top:7px;"></p>
                        <!-- <p style="font-size: 12px; line-height: 50px; margin-top: 2px">编辑文字</p> -->
                   </li>
                   <li class="gcd-viewls" style="width:24%;" id="yy-cf">
                        <p style="height:60px;text-align: center;overflow: hidden;"><img src="http://www.cuteyep.com/app/public/images/card-icon2.svg" style="width:65%;"></p>
                        <!-- <p style="font-size: 12px;line-height: 50px; margin-top: 2px">修改音乐</p> -->
                   </li>
                   <li class="gcd-viewls" style="width:14%;" id="yy-ly">
                        <p style="height:60px;text-align: center;overflow: hidden;"><img src="http://www.cuteyep.com/app/public/images/card-icon3.svg" style="width:35px;margin-top:7px;"></p>
                        <!-- <p style="font-size: 12px;line-height: 50px; margin-top: 2px">插入录音</p> -->
                   </li>
                   <li class="gcd-viewls save" style="width:14%;float:right;">
                        <p style="height:60px;text-align: center;overflow: hidden;"><img src="http://www.cuteyep.com/app/public/images/card-icon4.svg" style="width:35px;margin-top:7px;"></p>
                        <!-- <p style="font-size: 12px;line-height: 50px; margin-top: 2px">发送并保存</p> -->
                   </li>

              </ul>
              <ul class="cb"></ul>
            </div>
          </div>
        </div>
        <!--音乐按钮-->
        <div class="musicT">
          <div class="av" style="height: 40px; width:40px; background:url(http://www.cuteyep.com/app/public/images/music.svg) no-repeat 50% 50%; background-size: cover;"></div>
          <div class="ad" style="height: 40px; width:40px; background:url(http://www.cuteyep.com/app/public/images/music_off.svg) no-repeat 50% 50%; background-size: cover;"></div>
        </div>
        <!--播放器-->
        <audio controls="controls"   id="audio"  autoplay="autoplay"  preload="auto"  loop  hidden="ture">
          <source src='<?php echo isset($_SESSION["cuty_hk"]["mdurl"])?$_SESSION["cuty_hk"]["mdurl"]:$see["media_url"]; ?>' type="audio/ogg" />
            Your browser does not support the audio element.
          </audio>
          <!--文字滚动-->
          <div style="height: 60px; color: #fff; position:fixed; bottom: 80px; width:100%;left:0px; z-index: 2; overflow: hidden;-webkit-mask-image:url(http://www.cuteyep.com/app/public/images/kst.png); ">
            <div class="font-flash" id="viewNR"><?php echo isset($_SESSION["cuty_hk"]["con"])?$_SESSION["cuty_hk"]["con"]:$see["memo"]; ?></div>
          </div>
          <!--编辑文字浮动模块-->
          <div class="view-wz">
            <form id="card_post" action='' method="post">
              <div style="height:15px;"></div>
              <div class="view-wztit">
                <div class="hk_return view-closet" ></div>
                <div class="hk_tek">
                  <span  id="viewbtn">生成</span>
                </div>
                <div style="padding:0 60px 0 50px;">编辑文字</div>
              </div>

              <div style="padding: 30px;">
                <div class="view-wzls">
                  <input placeholder="输入卡片标题" type="text" class="view-wzip"  name="title" value="<?php echo isset($_SESSION['cuty_hk']['title'])?$_SESSION['cuty_hk']['title']:$see['author']; ?>">
                  <!--文字模板弹出-->
                  <div class="view-wztxt">
                    <?php if(is_array($text_title)): $i = 0; $__LIST__ = $text_title;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$title): $mod = ($i % 2 );++$i;?><div class="view-wztls">
                        <h3><?php echo ($title["title"]); ?></h3>
                        <div class="cont" style=" margin-top: 10px; line-height: 20px;"><?php echo ($title["con"]); ?></div>
                      </div><?php endforeach; endif; else: echo "" ;endif; ?>
                  </div>
                  <!--模板标签-->
                  <div class="view-wzmb"></div>
                </div>
                <div class="view-wzls">
                  <textarea placeholder="您想说的话" class="view-wztp" name="content" maxlength="300"><?php echo isset($_SESSION['cuty_hk']['con'])?$_SESSION['cuty_hk']['con']:$see['memo']; ?></textarea>
                  <!-- <label>*请用中文下"，"“。”“；”“：”换行，文字在300字以内</label> -->
                  <label style=" display:none">*请用换行键换行，文字在300字以内</label>
                </div>

              </div>
            </form>
          </div>

          <!--编辑背景音乐浮层模块-->
          <div class="view-yy">
            <form id="card_post" action='' method="post">
              <div style="height:15px;"></div>
              <div class="view-wztit">
                <div class="hk_return view-closey" ></div>
                <div class="hk_tek">
                  <span id="viewbtn1" >生成</span>
                </div>
                <div style="padding:0 60px 0 50px;">选择在线音乐</div>
              </div>
              <div style="padding: 30px; ">
                <div style="overflow: hidden;overflow-y:auto; max-height: 430px;" id="cadbg">
                  <ul>
                    <?php if(is_array($voice_title)): $i = 0; $__LIST__ = $voice_title;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="cadonline-list" style="border-radius:6px;  height: 50px;"  rel="<?php echo ($vo["media_url"]); ?>" data_id="<?php echo ($vo["id"]); ?>">
                        <div style=" padding: 0 20px; line-height: 50px;"><?php echo ($vo["title"]); ?></div>
                      </li><?php endforeach; endif; else: echo "" ;endif; ?>
                  </ul>
                  <ul class="cb"></ul>
                </div>
              </div>
            </form>
          </div>
          <!--录制音乐浮层模块-->


          <div class="view-lz">
            <div style="height:15px;"></div>
            <div class="view-wztit">
              <div class="hk_return" id="music-close"></div>
              <div class="hk_tek">
                <span  id="viewbtn2">生成</span>
              </div>
              <div style="padding:0 60px 0 50px;">录制音乐</div>
            </div>
            <div style="padding: 30px; ">
              <div style=" position: relative; height: 190px;"  >
                <div style=" text-align: center; margin-top: 40px; position:absolute;left:0px; top: 0px; width:100%; height: auto; z-index: 2;">
                  <div class="diymsc"> </div>
                </div>
                <div style=" text-align: center; margin-top: 40px; position:absolute;left:0px; top: 0px; width:100%; height: auto;  z-index: 1;" >
                  <span class="diyflash">
                    <i class="diyflash-i"></i>
                  </span>
                </div>
              </div>
              <div style=" font-size: 36px; text-align: center; font-family: 'timefont';" class="nmber" id="time_show">0</div>
              <div id="state" style=" text-align: center; color: #f00; line-height: 40px;">点击录音并说出您想说的话</div>
              <div style="height: 40px; background:#ee436b; text-align: center; margin:10px; line-height: 40px; color: #fff;" id="strat">开始录音</div>

              <div id="menu" style=" text-align: center; display:none;">
                <span id="reset" style="height: 60px; border:1px solid #ee436b; color: #ee436b; width:60px; display:inline-block; border-radius: 360px; text-align: center; line-height: 60px; margin:10px">重录</span>
                <span id="play" style="height: 60px; border:1px solid #ee436b;color: #ee436b; width:60px; display:inline-block; border-radius: 360px; text-align: center; line-height: 60px; margin:10px">播放</span>
              </div>
            </div>


          </div>
          <script src="http://www.cuteyep.com/app/public/js/common.js"></script>
					<script>

					      var play = 0;
                var audio = document.getElementById('audio');
                var vid = "<?php echo ($_SESSION['cuty_hk']['line_id']); ?>";
                if(vid == '') vid = 0;
              	$('.av').click(function(){
                  	//audio.pause();
                    $('.av').hide();
                    $('.ad').show();
                    if(vid==1) myInterfaceName.playe_pause();
                    else{
	                    if(play==1) audio.pause();
	                    play = 1;
	                    myInterfaceName.end_recording();
                    }

                });
                $('.ad').click(function(){
                    //audio.play();
                    $('.ad').hide();
                    $('.av').show();
                    if(vid==1) myInterfaceName.auto_vodeo('',1);
                    else{
	                    audio.play();
	                    play = 1;
                    }
                });

               $('#ret').click(function(){
                    audio.pause();
                });
                $('.top').hide();
                var mr = 0;
                $('.hk_vew').click(function(){
                     if(mr == 0){
                         $('.gcd-viewpos').animate({bottom:'-50px'},300);
                         mr = 1;
                     }else{
                         $('.gcd-viewpos').animate({bottom:'0px'},300);
                         mr = 0;
                     };
                })


                function clos_back(){
                   audio.pause();
                   $.get('/cute/index.php?s=Diy/exit_back');
                }

                //将逗号换成行
                var str=$('.font-flash').html(); //这是一字符串
                $('.font-flash').html(formatStr(str));
                function formatStr(str){
                    str=str.replace(/\n/ig,"<br/>");
                    return str;
                };

                //根据内容设定滚动时间滚动高度
                var o;
                var flashbox = $('.font-flash').height();//盒子的高；
                var timeFD = (flashbox + '0') * 10;//时间
                    o = setInterval(top1,300);//1秒后开始执行
                    top1();
                function top1(){
                   $('.font-flash').animate({top:'-'+flashbox+'px'},
                      {
                        duration:timeFD,
                        queue:false ,
                        complete: function() {
                            $('.font-flash').css({top:'70px'});
                        },
                   });//盒子动画
                }

                //显示隐藏文字模板框
                var viewS = 1;
                $('.view-wzmb').click(function(){
                    if(viewS == 1){
                       $('.view-wztxt').show();
                       viewS = 0;
                    }else{
                       $('.view-wztxt').hide();
                       viewS = 1;
                    }
                });


                //选择模板并加入到输入框
               // $('.view-wzip').val('<?php echo ($see["author"]); ?>');
                //$('.view-wztp').val('<?php echo ($see["memo"]); ?>');//默认第一个
                //$('#viewNR').html(formatStr($('.view-wztls').eq(0).find('.cont').text()));

                $('.view-wztls').click(function(){
                     var norTit = $(this).find('h3').html();
                     var norCon = $(this).find('.cont').html();
                     $('.view-wzip').val(norTit);
                     $('.view-wztp').val(norCon);
                     $('.view-wztxt').hide();
                });


                //提交内容
                $('#viewbtn').click(function(){
                	//$('.font-flash').height(0);
                	$('.font-flash').html('');
                    var GDtitle = $('.view-wzip').val();
                    var GDcon = $('.view-wztp').val();

                    if($('.view-wzip').val() == ''){
                       alert('请输入标题');
                       return false;
                    }

                    if($('.view-wztp').val() == '' || $('.view-wztp').val() == null ){
                       alert('内容不能为空');
                       return false;
                    }
                     $('#viewNR').html(formatStr(GDcon));
                     $('.view-wz').animate({top:'100%'},80);
                     $.post('/cute/index.php?s=Diy/add',{title:GDtitle,con:GDcon});

                     location.reload();
                     myInterfaceName.end_recording();
                     return false;
            });

                //开启、关闭编辑文字浮动层

                $('.view-closet').click(function(){
                     $('.view-wz').animate({top:'100%'},80);
                });
                $('#wz-cf').click(function(){
                     $('.view-wz').animate({top:'0px'},80);
                     clearInterval(o);
                });

                //开启、关闭背景音乐浮动层

                $('.view-closey').click(function(){
                     $('.view-yy').animate({top:'100%'},80);//关闭浮动层
                });
                $('#yy-cf').click(function(){
                     $('.view-yy').animate({top:'0px'},80);//打开浮动层

                });



               var mnum //选中的值
                var url,y_id;
                $('#cadbg li').click(function(){
                	var seIndex= $(this).index();//当前点击的值
                    $('#cadbg li').each(function(){
                       $('#cadbg li').find('.cad-select').remove()
                    });
                    var seLength=$(this).find('.cad-select').length;//当前点击下是否包含
                    if(seLength == 0){
                        $(this).append('<div class="cad-select"></div>')
                    };
                    mnum = seIndex ;

                	play = 1;
                  url = $(this).attr('rel');
                  y_id = $(this).attr('data_id');
                  $('.ad').hide();
                  $('.av').show();
                  //alert(y_id);
                  $('#audio').attr('src',url);
                  audio.play();
                  myInterfaceName.end_recording();
                });
              //提交音乐
                var line_id = vid;
                $('#viewbtn1').click(function(){
                     //alert(mnum);
                     if(mnum == 'unefined' || mnum == null ){
                        alert('请选择音乐');
                     }else{
                       //audio.play();
                       $('.view-yy').animate({top:'100%'});
                       line_id = 0;
                       vid = 0;
                       $.post('/cute/index.php?s=Diy/add',{y_id:y_id,line_id:0,mdurl:url});

                     }
                });

                //开启、关闭录制音乐浮动层

                $('#yy-ly').click(function(){
                     $('.view-lz').show().animate({top:'0px'},80);//打开浮动层
                     audio.pause();//停止播放H5音乐
                     myInterfaceName.end_recording();
                });

                //以下是录音js

                //初始功能
                var sta = 0;//这是录音按钮变量0为默认状太，1为停止状体
                var timep;//获取录音时间
                $('#strat').click(function(){
                     if(sta == 0 ){
                          t=setInterval(timeT,1000);//录音开始
                          $('.diyflash').addClass('select');//添加按钮动画
                          sta = 1;//变量改为停止；
                          $(this).html('停止录音');//录制按钮状体文字
                          $('#state').html('声音录制中');//状体显示文字
                          myInterfaceName.Start_recording();//开启系统录音功能
                     }else{

                          timep = timeo //获取最终录制时间
                          clearInterval(t);//清除计时
                          sta = 0;//变量改为播放
                          $('.diyflash').removeClass('select');//添加按钮动画
                          $(this).html('开始录音');//录制按钮状体文字
                          $(this).hide();//初始化录制按钮隐藏
                          $('#state').html('录制完成');//状体显示文字
                          $('#menu').show();//播放重录菜单显示
                          myInterfaceName.Stop_recording();//关闭系统录音功能

                     }


                });

                //点击播放
                var playf=0;//播放按钮文字变换0为播放，1为暂停
                var mf = 0;
                $('#play').click(function(){
                     if(playf == 0){
                         playf = 1;
                         $(this).html('停止');
                         m = setInterval(timeJH,1000);//时间开始倒退
                         myInterfaceName.recording();//系统播放录音

                     }else{
                         playf = 0;
                         $(this).html('播放');
                         $("#time_show").html(timep);
                         timeo = timep ;
                         clearInterval(m);//清除计时
                         myInterfaceName.end_recording();//录音暂停播放
                     }
                });





                //点击重录
                $('#reset').click(function(){
                     resetNew()//运行初始化函数
                });


                //时间函数+
                var timeo= 0;//开始时间0;
                function timeT(){
                     timeo+=1;
                     $("#time_show").html(timeo);
                     var is_ly = $('#strat').attr('rel');
                     if(is_ly !=1) {
                    	 alert('录音被禁止');
                    	 location.reload();
                     }
                }

                //时间函数减
                function timeJH(){
                      if(timeo > 0){
                         timeo--;
                         $("#time_show").html(timeo);
                      }else{
                         clearInterval(m);//清除倒计时
                      };

                      if(timeo == 0){
                           playf = 0;

                           $('#play').html('播放');
                           $("#time_show").html(timep);
                           timeo = timep ;
                           clearInterval(m);//清除计时
                           myInterfaceName.end_recording();//录音暂停播放
                      }
                }

                //初始化函数
                function resetNew(){
                     timeo = 0;//初始化计时器；
                     timep = 0;//录制时间等于0；
                     playf = 0;//初始化播放按钮
                     $('#play').html('播放');
                     $("#time_show").html(timeo);//返回时间显示
                     $('#state').html('点击录音并说出您想说的话');//状体显示文字
                     $('#strat').show();//初始换录制按钮显示
                     $('#menu').hide();//播放重录菜单隐藏
                     myInterfaceName.end_recording();//系统录音播放停止
                }
               //点击生成，提交录音
                 $('#viewbtn2').click(function(){
                   if(timeo == 0){
                        tip('您还没有录制音乐哦~');
                   }else{
                         line_id = 1;
                         vid = 1;
                         $('.view-lz').animate({top:'100%'},80);//关闭浮动层
                         $.post('/cute/index.php?s=Diy/add',{line_id:1},function(){
                             location.reload();
                             myInterfaceName.end_recording();
                         });
                   }

                   //if(mf==0) myInterfaceName.auto_vodeo('',1);

               });

              //取消录制音乐
              $('#music-close').click(function(){
                  $('.view-lz').animate({top:'100%'},80);//关闭浮动层
                  audio.play();//音乐开始播放
                  resetNew();//初始化
              });
              //保存

              $('.save').click(function(){
            	 $('.mask').show();
             	 if(line_id==0){
	                	 $.post('/cute/index.php?s=Diy/greeting_sava',function(data){
	                		 $('.mask').hide();
	                		 var obj = JSON.parse(data);
                    if(obj.id<=0){
                 	   myInterfaceName.see('http://www.cuteyep.com/app/index.php?s=Login');
                 	   return false;
                    }
						     	            		//id = obj.id;
						     	            		//title = obj.title;
						     	            		myInterfaceName.wx_music(obj.url,obj.title,obj.memo,obj.cover);
						     	            		myInterfaceName.clos();
				                 	 //auto('http://www.cuteyep.com/app/index.php?s=Diy/greeting_card3/id/'+id,$('.ld').attr('data-url'));
	     	            	});
             	 }else{

                	myInterfaceName.up_recording();

             	 }

              });
            //diy上传音乐
           	function ly_sava(url,name,url2){
             		$.post(url,{ly_file:name},function(data){
             			$('.mask').hide();
                 		 var obj = JSON.parse(data);
                 		 myInterfaceName.wx_music(obj.url,obj.title,obj.memo,obj.cover);
                 		myInterfaceName.clos();
              		});
             	}
            //上传语音进度显示
            function up_progress(jindu){
            	$('.tijiao').html('正在提交中'+jindu);
            }
            //是否有录音
            function is_file(is_ly){
            	$('#strat').attr('rel',is_ly);
            }
              $(function(){
            	  if(vid==1) myInterfaceName.auto_vodeo('',1);
            	  else myInterfaceName.new_auto_vodeo('<?php echo isset($_SESSION["cuty_hk"]["mdurl"])?$_SESSION["cuty_hk"]["mdurl"]:$see["media_url"]; ?>',0);
              });
					</script>


</body>
<script>
disp_page('wancheng0:'+$('title').html());
</script>
</html>