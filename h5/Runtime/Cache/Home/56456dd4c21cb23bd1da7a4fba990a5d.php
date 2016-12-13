<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
	<head>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
	    <meta charset="utf-8">
			<meta name="full-screen" content="yes">
      <meta name="x5-fullscreen" content="true">
			<!-- <meta http-equiv="refresh" content="20"> -->
	    <title><?php echo ($title); ?></title>
	    <link rel="stylesheet" type="text/css" href="/h5/public/css/navigator.default.css" />
	    <link rel="stylesheet" type="text/css" href="/h5/public/font/iconfont.css">
	    <link rel="stylesheet" type="text/css" href="/h5/public/css/common.css">
			<link rel="stylesheet" href="/h5/public/css/dropload.css">
	    <script src="/h5/public/js/zepto.js"></script>
	    <script src="/h5/public/js/gmu.js"></script>
			<script src="/h5/public/js/dropload.min.js"></script>
	</head>
	<body>

<link rel="stylesheet" type="text/css"  href="http://www.cuteyep.com/app/public/css/common.css">
<style type="text/css" id="acc">
.musicT{height: 40px; width:40px; background:rgba(0,0,0,0.5); border-radius:360px; overflow: hidden;  position:fixed;right: 20px; top: 20px; z-index: 2; }
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

.font-flash{font-size: 16px; line-height: 36px; height:auto;width: 100%; padding: 0px 0 0px 0; color: #fff; text-align: center; position:absolute;top: 160px; left: 0px;}


.view-wz{height: 100%; width:100%; position:fixed;left:0px; top:0px; background:#fff; z-index: 5;display: none;}
.view-wztit{height: 40px; line-height: 40px; padding: 0 15px; font-size: 18px; font-weight: normal; display: block; color: #fff; background:#000;}
.view-wzls{margin-bottom: 20px; position:relative; display:block;}
.view-wzip{font-size: 16px; background:#f5f5f5; height: 50px; text-indent: 20px; border-radius:5px; border: none; width:100%;}
.view-wztxt{width:calc(100% - 2px); background:#fff; z-index: 3; position:absolute;left:0px; top:50px; border-radius:5px; border: 1px solid #ccc; max-height: 400px; display: none; overflow-y:auto; }
.view-wztls{padding: 10px; border-bottom: 1px solid #e9e9e9;}
.view-wztp{background:#f5f5f5; padding: 20px 0; height: 160px; text-indent: 20px; border-radius:5px; border: none; width:100%; margin-bottom: 10px; font-size: 16px; }

.view-wzmb{height: 50px; width:50px; background:url(http://www.cuteyep.com/app/public/images/view7.svg) no-repeat 50% 50%; background-size: 60%;  position:absolute;right: 0px; top:0px;}


.view-yy{height: 100%; width:100%; position:fixed;left:0px; top:0px; background:#fff; z-index: 5;display: none;}
.view-lz{height: 100%; width:100%; position:fixed;left:0px; top:0px; background:#fff; z-index: 5;display: none;}
.view-yytit{height: 40px; line-height: 40px; padding: 0 15px; font-size: 18px; font-weight: normal; display: block; color: #fff; background:#000;}

.view-closet{height: 50px; width:50%; background:#f5f5f5; font-size: 16px; text-align: center; display: inline-block; line-height: 50px; float: left}
.view-closey{height: 50px; width:50%; background:#f5f5f5;font-size: 16px;text-align: center; display: inline-block; line-height: 50px; float: left}
.view-closel{height: 50px; width:50%; background:#f5f5f5;font-size: 16px;text-align: center; display: inline-block; line-height: 50px; float: left}
.view-btn1{height: 50px;  width:50%;  line-height: 50px; text-align: center; color:#fff; font-size: 16px;background:#ee436b; float: left; display: inline-block; }

.cadonline-list{ display: block; height: 60px; background: #f5f5f5; position:relative;  margin: 10px 0;}



.diyflash{height:160px; width:160px;border-radius:360px; display:inline-block;   background:#ffdce4;  position:relative; z-index: 0; }
.diyflash.select{animation: flashT  0.4s ease-in-out infinite alternate;}
@keyframes flashT{
    0%{  transform:scale(1); }
    100%{ transform:scale(1.4);}
}
.diyflash-i{height:140px; width:140px;  border-radius:360px;background: #ffb0c2;display: block; position: absolute;left:10px; top: 10px;}

/**默认**/
.diymsc{height: 160px; width:160px; background: #ff5f83 url(http://www.cuteyep.com/app//public/images/raid.svg) no-repeat 50% 50%; background-size:50%;  display:inline-block; border-radius: 360px; z-index: 1; }
/**按下**/
.diymsc.select{background: #f00;}
/**播放**/
.diymsc2{height: 160px; width:160px; background: #ccc url(http://www.cuteyep.com/app//public/images/raid.svg) no-repeat 50% 50%; background-size:50%; display:inline-block; border-radius: 360px;}

</style>
<h5 style="display:none;"><?php echo ($see["title"]); ?></h5>
<img src="http://www.cuteyep.com/app/public/images/cute-logo.png" style="display:none;">
<p style="display:none;"><?php echo ($see["memo"]); ?></p>
       <iframe src="<?php echo ($see["h5_url"]); ?>" height="100%"  width="100%"; style=" position:fixed; left:0px; top: 0px; z-index: 1">
       </iframe>
       <div style=" position: fixed;left:0px; top: 0px; width:100%; height: 100%; z-index: 2">
                  <div class="gcd-view">
                       <!--位置-->
                       <div class="gcd-viewpos">
                            <ul>
                                 <li class="gcd-viewls" style="width:calc(50% - 1px); border-right: 1px solid #fff; " id="wz-cf">
                                      <p style="padding-top: 5px; height: 25px; display:none; overflow: hidden;"><img src="http://www.cuteyep.com/app/public/images/return_1.svg" style="height: 25px;"></p>
                                      <p style="font-size: 12px; line-height: 50px; margin-top: 2px">编辑文字</p>
                                 </li>
                                 <li class="gcd-viewls" style="width:50%;" id="yy-cf">
                                      <p style="padding-top: 5px; height: 25px;  display:none; overflow: hidden;"><img src="http://www.cuteyep.com/app/public/images/return_1.svg" style="height: 25px;"></p>
                                      <p style="font-size: 12px;line-height: 50px; margin-top: 2px">修改音乐</p>
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
				 <source src="<?php echo isset($_SESSION['cuty']['mdurl'])?$_SESSION['cuty']['mdurl']:$see['media_url']; ?>" type="audio/ogg" />
				   	Your browser does not support the audio element.
					</audio>
          <!--文字滚动-->
          <div style="height: 160px; color: #fff; position:fixed; bottom: 80px; width:100%;left:0px; z-index: 2; overflow: hidden;-webkit-mask-image:url(http://www.cuteyep.com/app/public/images/kst.png); ">
                  <div class="font-flash" id="viewNR"><?php echo isset($_SESSION['cuty']['con'])?$_SESSION['cuty']['con']:$see['memo']; ?></div>
          </div>
          <!--编辑文字浮动模块-->
          <div class="view-wz">
                 <form id="card_post" action='' method="post">
                 <h2 class="view-wztit">选择卡片文字</h2>

                 <div style="padding: 30px;">
                       <div class="view-wzls">
                                <input placeholder="输入卡片标题" type="text" class="view-wzip"  name="title" value="<?php echo isset($_SESSION['cuty']['title'])?$_SESSION['cuty']['title']:$see['title']; ?>">
                                <!--文字模板弹出-->
                                <div class="view-wztxt">
	                                 <?php if(is_array($text_title)): $i = 0; $__LIST__ = $text_title;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$title): $mod = ($i % 2 );++$i;?><div class="view-wztls">
	                                            <h3><?php echo ($title["title"]); ?></h3>
	                                            <div class="cont"><?php echo ($title["con"]); ?></div>
	                                       </div><?php endforeach; endif; else: echo "" ;endif; ?>
                                </div>
                                <!--模板标签-->
                                <div class="view-wzmb"></div>
                       </div>
                       <div class="view-wzls">
                            <textarea placeholder="您想说的话" class="view-wztp" name="content" maxlength="300"><?php echo isset($_SESSION['cuty']['con'])?$_SESSION['cuty']['con']:$see['memo']; ?></textarea>
                            <label>*请用中文下"，"“。”“；”“：”换行，文字在300字以内</label>
                       </div>

                 </div>
                 <!--浮动按钮-->
                 <div style=" position:absolute;left:0px; bottom: 0px; width:100%; height: 50px;">
                       <div  class="view-btn1"   id="viewbtn">生成</div>
                        <!--关闭按钮-->
                       <div class="view-closet">关闭</div>
                       <div class='cb'></div>
                 </div>
                 </form>
          </div>

          <!--编辑背景音乐浮层模块-->
           <div class="view-yy">
           		<form id="card_post" action='' method="post">
                 <h2 class="view-wztit">选择选择背景音乐</h2>
                 <div style="padding: 30px; ">
                        <div style="overflow: hidden;overflow-y:auto; max-height: 414px;" id="cadbg">
                              <ul>
	                              <?php if(is_array($voice_title)): $i = 0; $__LIST__ = $voice_title;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="cadonline-list"  rel="<?php echo ($vo["media_url"]); ?>" data_id="<?php echo ($vo["id"]); ?>">
			                                  <div style=" padding: 0 20px; line-height: 60px;"><?php echo ($vo["title"]); ?></div>
			                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                              </ul>
                              <ul class="cb"></ul>
                        </div>

                 </div>

                 <!--浮动按钮-->
                 <div style=" position:absolute;left:0px; bottom: 0px; width:100%; height: 50px;">
                       <div  class="view-btn1"   id="viewbtn1">生成</div>
                        <!--关闭按钮-->
                       <div class="view-closey">关闭</div>
                       <div class='cb'></div>
                 </div>
               </form>
          </div>
          <!--录制音乐浮层模块-->
           <div class="view-lz">
                 <h2 class="view-wztit">选择选择背景音乐</h2>
                 <div style="padding: 30px; ">
                          <div class="cadbox">
                              <div class="cad-tit">点击下列圆圈录制音乐</div>
                              <!--默认-->
                              <div style=" position: relative; height: 200px;"  id="record">
                                      <div style=" text-align: center; margin-top: 40px; position:absolute;left:0px; top: 0px; width:100%; height: auto; z-index: 2;">
                                                <div class="diymsc"> </div>
                                      </div>
                                      <div style=" text-align: center; margin-top: 40px; position:absolute;left:0px; top: 0px; width:100%; height: auto;  z-index: 1;" >
                                                <span class="diyflash">
                                                     <i class="diyflash-i"></i>
                                                </span>
                                      </div>
                              </div>
                              <!--录制完成的-->
                              <div style=" text-align: center; margin-top: 20px; display:none;" id="record-success">
                                        <span class="diymsc2"></span>
                              </div>
                              <div style=" font-size: 48px; text-align: center; margin-top: 20px; font-family: 'timefont';" class="nmber" id="time_show">0</div>
                              <div style=" text-align: center; display:none;" id="record-cz">
                                     <span style=" height: 60px; width:60px; line-height: 60px; border-radius: 360px; display:inline-block;color:#fff; background:#ee436b; margin:10px;" id="record-return" class="start">重录</span>
                                     <span style=" height: 60px; width:60px; line-height: 60px; border-radius: 360px; display:inline-block;color:#fff; background:#ee436b; margin:10px;" id="record-play" class="play">播放</span>
                                     <!-- <span style=" height: 60px; width:60px; line-height: 60px; border-radius: 360px; display:inline-block;color:#fff; background:#ee436b; margin:10px;" class="sava">保存</span> -->
                              </div>
                       </div>
                 </div>

                 <!--浮动按钮-->
                 <div style=" position:absolute;left:0px; bottom: 0px; width:100%; height: 50px;">
                       <div  class="view-btn1"   id="viewbtn2">生成</div>
                        <!--关闭按钮-->
                       <div class="view-closel">关闭</div>
                       <div class='cb'></div>
                 </div>
          </div>
          <script src="http://www.cuteyep.com/app/public/js/common.js"></script>
					<script>
					      var play = 0;
                var audio = document.getElementById('audio');
                var vid = "<?php echo ($_SESSION['cuty_hk']['line_id']); ?>";
              	$('.av').click(function(){
                  	audio.pause();
                    $('.av').hide();
                    $('.ad').show();

                });
                $('.ad').click(function(){
                    audio.play();
                    $('.ad').hide();
                    $('.av').show();

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
                   $.get('/h5/index.php?s=Diy/exit_back');
                }

                //将逗号换成行
                var str=$('.font-flash').html(); //这是一字符串
                $('.font-flash').html(formatStr(str));
                   function formatStr(str){
                    str=str.replace(/，/ig,"<br/>");
                    str=str.replace(/。/ig,"<br/>");
                    str=str.replace(/；/ig,"<br/>");
                    str=str.replace(/：/ig,"<br/>");
                    return str;
                };

                //根据内容设定滚动时间滚动高度
                var o;
                var flashbox = $('.font-flash').height();//盒子的高；
                var timeFD = (flashbox + '0') * 6;//时间
                    o = setInterval(top1,1000);//1秒后开始执行
                    top1();
                function top1(){
                    $('.font-flash').animate(
                       {top:'-'+flashbox+'px'},
                       {
                         duration:timeFD,
                         queue:false ,
                         complete: function() {
                             $('.font-flash').css({top:'160px'});
                         }
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
                //选择模板并加入到输入框
         /*        $('.view-wzip').val('<?php echo ($see["author"]); ?>');
                $('.view-wztp').val('<?php echo ($see["memo"]); ?>');//默认第一个 */
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
                     $('.view-wz').hide();
                     $.post('/h5/index.php?s=Diy/greeting_sava',{title:GDtitle,con:GDcon},function(data){
                    	   window.location.href="/h5/index.php?s=Diy/greeting_card3_opp"+data;

                     });
            });

                //开启、关闭编辑文字浮动层

                $('.view-closet').click(function(){
                     $('.view-wz').hide();//关闭浮动层
                });
                $('#wz-cf').click(function(){
                     $('.view-wz').show();//打开浮动层
                     clearInterval(o);
                });

                //开启、关闭背景音乐浮动层

                $('.view-closey').click(function(){
                     $('.view-yy').hide();//关闭浮动层
                });
                $('#yy-cf').click(function(){
                     $('.view-yy').show();//打开浮动层
                     myInterfaceName.end_recording();
                });



               var mnum //选中的值
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

                });
                //提交音乐

                var url,y_id;
                $('#cadbg li').click(function(){
                	play = 1;
                  url = $(this).attr('rel');
                  y_id = $(this).attr('data_id');
                  $('.ad').hide();
                  $('.av').show();
                  //alert(y_id);
                  $('#audio').attr('src',url);
                  audio.play();
                });

                var line_id = 0;
                $('#viewbtn1').click(function(){
                     //alert(mnum);
                     if(mnum == 'unefined' || mnum == null ){
                        alert('请选择音乐');
                     }else{
                       audio.play();
                       $('.view-yy').hide();
                       line_id = 0;
                       vid = 0;
                       $.post('/h5/index.php?s=Diy/greeting_sava',{y_id:y_id,line_id:0,mdurl:url},function(data){

                    	   window.location.href="/h5/index.php?s=Diy/greeting_card3_opp"+data;

                       });

                     }
                });

                //开启、关闭录制音乐浮动层

                $('.view-closel').click(function(){
                     $('.view-lz').hide();//关闭浮动层
                     $('.ad').hide();
                     $('.av').show();
                     audio.play();
                     myInterfaceName.Stop_recording();
                });
                $('#yy-ly').click(function(){
                     $('.view-lz').show();//打开浮动层
                     rReturn();
                     audio.pause();
                     myInterfaceName.end_recording();
                });

                //以下是录音js
                var timeo = 0;//录制时间
                  var aaa = 0;//结束时间
                  var end= 0;
                  var timedb= 0;//重复播放开关 0为关闭
                  function timeT(){
                    if(end == 0 && timeo < 10){
                              timeo+=1;
                             $("#time_show").html(timeo);


                    }else{
                         end = 1;
                         myInterfaceName.Stop_recording();
                         tip('最多只能录制10秒哦！');
                    }
                  }

                  var timeplay = 0;

                  setInterval(timeJH,1000);

                  function timeJH(){
                      if(timeo > 0 && timeplay == 1 ){
                         timeo--;
                         $("#time_show").html(timeo);

                      }

                      if( timeo <= 0){
                        timedb = 0;
                      }
                  }

                 //开始录
                 $('#record').bind('touchstart',function(){
                       end = 0;
                       t=setInterval(timeT,1000);
                       myInterfaceName.Start_recording();
                       //alert('按下了');
                       $('.diyflash').addClass('select');//添加按钮动画



                 }) ;

                 //松开
                 $('#record').bind('touchend',function(){
                   clearInterval(t)
                           $('.diyflash').removeClass('select');//移除按钮动画
                           if(timeo < 3){
                                tip('录制时间太短了！请重新录制。');
                                // setTimeout(function(){
                                //      location.reload();
                                // },2000)
                                playL= 0;
                                timeo= 0;
                                $("#time_show").html(0);
                           }else{

                                 $('#record').hide();
                                 $('#record-success ,#record-cz').show();//操作按钮和动画切换显示
                           }


                           end = 1;
                           myInterfaceName.Stop_recording();
                           aaa = timeo;

                 });

                 var playL= 0;

                 //点击播放
                 var mf = 0;
                 $('#record-play').on('touchstart',function(){
                   timeplay = 1;
                   mf = 1;
                   if(timedb == 0){
                      myInterfaceName.recording();
                      timeo = aaa;
                   }
                   timeo = 0;


                   playL= 1;
                   timedb = 1;
                 })

                 //点击重新录制

                 function rReturn(){
                   $('.view-lz,#record').css('display','block')
                   $('#record-success,#record-cz').css('display','none')
                   timeo= 0;
                   timeplay = 0;
                   $("#time_show").html(0);
                 }


                 $('#record-return').on('touchstart',function(){
                   timeplay = 0;

                      if(playL == 1){
                              myInterfaceName.end_recording();
                              rReturn()
                              // location.reload();

                      }else{
                              // location.reload();
                              rReturn()
                      }
                 })

                //  $('#record-return').click(function(){
                //    timeplay = 0;
                 //
                //       if(playL == 1){
                //               myInterfaceName.end_recording();
                //               rReturn()
                //               // location.reload();
                 //
                //       }else{
                //               // location.reload();
                //               rReturn()
                //       }
                 //
                 //
                //  });

                 //点击生成，提交录音



					</script>

<script>
myInterfaceName.title($('title').html());
myInterfaceName.wancheng(0);
</script>
</body>
</html>