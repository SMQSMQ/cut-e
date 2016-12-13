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
			<script src="/cute/public/js/dropload.min.js"></script>
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

.font-flash{font-size: 16px; line-height: 36px; height:auto;width: 100%; padding: 0px 0 0px 0; color: #f00; text-align: center; position:absolute;top: 160px; left: 0px;}


.view-wz{height: 100%; width:100%; position:fixed;left:0px; top:0px; background:#fff; z-index: 5;display: none;}
.view-wztit{height: 40px; line-height: 40px; padding: 0 15px; font-size: 18px; font-weight: normal; display: block; color: #fff; background:#000;}
.view-wzls{margin-bottom: 20px; position:relative; display:block;}
.view-wzip{font-size: 16px; background:#f5f5f5; height: 50px; text-indent: 20px; border-radius:5px; border: none; width:100%;}
.view-wztxt{width:calc(100% - 2px); background:#fff; z-index: 3; position:absolute;left:0px; top:50px; border-radius:5px; border: 1px solid #ccc; max-height: 400px; display: none; overflow-y:auto; }
.view-wztls{padding: 10px; border-bottom: 1px solid #e9e9e9;}
.view-wztp{background:#f5f5f5; padding: 20px 0; height: 160px; text-indent: 20px; border-radius:5px; border: none; width:100%; margin-bottom: 10px; font-size: 16px; }

.view-wzmb{height: 50px; width:50px; background:#f00; position:absolute;right: 0px; top:0px;}


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
       <iframe src="http://www.baidu.com" height="100%"  width="100%"; style=" background:#ccc; position:fixed; left:0px; top: 0px; z-index: 1">
       </iframe>
       <div style=" position: fixed;left:0px; top: 0px; width:100%; height: 100%; z-index: 2">
                  <div class="gcd-view">
                       <!--位置-->
                       <div class="gcd-viewpos">
                            <ul>
                                 <li class="gcd-viewls" style="width:20%;" id="wz-cf">
                                      <p style="padding-top: 5px; height: 25px; overflow: hidden;"><img src="http://www.cuteyep.com/app/public/images/return_1.svg" style="height: 25px;"></p>
                                      <p style="font-size: 10px; margin-top: 2px">编辑文字</p>
                                 </li>
                                 <li class="gcd-viewls" style="width:20%;" id="yy-cf">
                                      <p style="padding-top: 5px; height: 25px; overflow: hidden;"><img src="http://www.cuteyep.com/app/public/images/return_1.svg" style="height: 25px;"></p>
                                      <p style="font-size: 10px; margin-top: 2px">修改音乐</p>
                                 </li>
                                 <li class="gcd-viewls" style="width:20%;" id="yy-ly">
                                      <p style="padding-top: 5px; height: 25px; overflow: hidden;"><img src="http://www.cuteyep.com/app/public/images/return_1.svg" style="height: 25px;"></p>
                                      <p style="font-size: 10px; margin-top: 2px">插入录音</p>
                                 </li>
                                 <li class="gcd-viewls" style="width:20%;">
                                      <p style="padding-top: 5px; height: 25px; overflow: hidden;"><img src="http://www.cuteyep.com/app/public/images/return_1.svg" style="height: 25px;"></p>
                                      <p style="font-size: 10px; margin-top: 2px">保存</p>
                                 </li>
                                 <li class="gcd-viewls" style="width:20%;" onclick="myInterfaceName.share_Text('toto','ss')">
                                      <p style="padding-top: 5px; height: 25px; overflow: hidden;"><img src="http://www.cuteyep.com/app/public/images/send_2.svg" style="height: 25px;"></p>
                                      <p style="font-size: 10px; margin-top: 2px">发送给好友</p>
                                 </li>

                            </ul>
                            <ul class="cb"></ul>
                       </div>
                  </div>
          </div> 
          <!--音乐按钮-->  
          <div class="musicT">
                  <div class="av" style="height: 40px; width:40px; background:url(http://www.cuteyep.com/app/public/images/play_2.svg) no-repeat 50% 50%"></div>  
                  <div class="ad" style="height: 40px; width:40px; background:url(http://www.cuteyep.com/app/public/images/stop_1.svg) no-repeat 50% 50%"></div> 
          </div>
          <!--播放器-->       
          <audio controls="controls"   id="audio"  autoplay="autoplay"  preload="auto"  loop  hidden="ture">
					  <source src="<?php echo ($see2["media_url"]); ?>" type="audio/ogg" />
				   	Your browser does not support the audio element.
					</audio>
          <!--文字滚动-->  
          <div style="height: 160px; color: #fff; position:fixed; bottom: 80px; width:100%;left:0px; z-index: 2; overflow: hidden;-webkit-mask-image:url(http://www.cuteyep.com/app/public/images/kst.png); ">

                 <div class="font-flash" id="viewNR">
                           绝对是开房间,djkfdk, klasdklf ,flasdkfkdssf,  .sdafk,dsf
                 </div>


          </div>
          <!--编辑文字浮动模块-->
          <div class="view-wz">
                 <form id="card_post" action='' method="post">
                 <h2 class="view-wztit">选择卡片文字</h2>
                 
                 <div style="padding: 30px;">
                       <div class="view-wzls">
                                <input placeholder="输入卡片标题" type="text" class="view-wzip"  name="title">
                                <!--文字模板弹出-->
                                <div class="view-wztxt">
                                       <div class="view-wztls">
                                            <h3>静夜思</h3>
                                            <div class="cont">床前明月光,疑是地上霜,举头望明月,低头思故乡</div>
                                       </div>
                                       <div class="view-wztls">
                                            <h3>咏鹅</h3>
                                            <div class="cont">鹅鹅鹅,曲项向天歌,白毛湖绿色,红掌拨清波</div>
                                       </div>
                                       <div class="view-wztls">
                                            <h3>枫桥夜泊</h3>
                                            <div class="cont">月落乌啼霜满天,江枫渔火对愁眠,姑苏城外寒山寺,门泊东吴万里船</div>
                                       </div>
                                </div>
                                <!--模板标签-->
                                <div class="view-wzmb"></div>
                       </div>
                       <div class="view-wzls">
                            <textarea placeholder="您想说的话" class="view-wztp" name="content"></textarea>
                            <label>*请用"英文逗号"换行，文字在300字以内</label>
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
                 <h2 class="view-wztit">选择选择背景音乐</h2>
                 <div style="padding: 30px; ">
                        <div style="overflow: hidden;overflow-y:auto; max-height: 490px;" id="cadbg">
                              <ul>
                                    <li class="cadonline-list">
                                          <div style=" padding: 0 20px; line-height: 60px;">123132132</div>
                                    </li>
                                    <li class="cadonline-list" >
                                          <div style=" padding: 0 20px; line-height: 60px;">123132132</div>
                                    </li>
                                                                        <li class="cadonline-list">
                                          <div style=" padding: 0 20px; line-height: 60px;">123132132</div>
                                    </li>
                                    <li class="cadonline-list" >
                                          <div style=" padding: 0 20px; line-height: 60px;">123132132</div>
                                    </li>
                                                                        <li class="cadonline-list">
                                          <div style=" padding: 0 20px; line-height: 60px;">123132132</div>
                                    </li>
                                    <li class="cadonline-list" >
                                          <div style=" padding: 0 20px; line-height: 60px;">123132132</div>
                                    </li>
                                                                        <li class="cadonline-list">
                                          <div style=" padding: 0 20px; line-height: 60px;">123132132</div>
                                    </li>
                                    <li class="cadonline-list" >
                                          <div style=" padding: 0 20px; line-height: 60px;">123132132</div>
                                    </li>
                                                                        <li class="cadonline-list">
                                          <div style=" padding: 0 20px; line-height: 60px;">123132132</div>
                                    </li>
                                    <li class="cadonline-list" >
                                          <div style=" padding: 0 20px; line-height: 60px;">123132132</div>
                                    </li>
                                                                        <li class="cadonline-list">
                                          <div style=" padding: 0 20px; line-height: 60px;">123132132</div>
                                    </li>
                                    <li class="cadonline-list" >
                                          <div style=" padding: 0 20px; line-height: 60px;">123132132</div>
                                    </li>
                                                                        <li class="cadonline-list">
                                          <div style=" padding: 0 20px; line-height: 60px;">123132132</div>
                                    </li>
                                    <li class="cadonline-list" >
                                          <div style=" padding: 0 20px; line-height: 60px;">123132132</div>
                                    </li>
                                                                        <li class="cadonline-list">
                                          <div style=" padding: 0 20px; line-height: 60px;">123132132</div>
                                    </li>
                                    <li class="cadonline-list" >
                                          <div style=" padding: 0 20px; line-height: 60px;">123132132</div>
                                    </li>
                                                                        <li class="cadonline-list">
                                          <div style=" padding: 0 20px; line-height: 60px;">123132132</div>
                                    </li>
                                    <li class="cadonline-list" >
                                          <div style=" padding: 0 20px; line-height: 60px;">123132132</div>
                                    </li>
                                                                        <li class="cadonline-list">
                                          <div style=" padding: 0 20px; line-height: 60px;">123132132</div>
                                    </li>
                                    <li class="cadonline-list" >
                                          <div style=" padding: 0 20px; line-height: 60px;">123132132</div>
                                    </li>
                                                                        <li class="cadonline-list">
                                          <div style=" padding: 0 20px; line-height: 60px;">123132132</div>
                                    </li>
                                    <li class="cadonline-list" >
                                          <div style=" padding: 0 20px; line-height: 60px;">123132132</div>
                                    </li>
                                                                        <li class="cadonline-list">
                                          <div style=" padding: 0 20px; line-height: 60px;">123132132</div>
                                    </li>
                                    <li class="cadonline-list" >
                                          <div style=" padding: 0 20px; line-height: 60px;">123132132</div>
                                    </li>
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
                                     <span style=" height: 60px; width:60px; line-height: 60px; border-radius: 360px; display:inline-block;color:#fff; background:#ee436b; margin:10px;" class="sava">保存</span>
                              </div>
                       </div>
                 </div>

                 <!--浮动按钮-->
                 <div style=" position:absolute;left:0px; bottom: 0px; width:100%; height: 50px;">
                       <div  class="view-btn1"   id="viewbtn1">生成</div>
                        <!--关闭按钮-->
                       <div class="view-closel">关闭</div>
                       <div class='cb'></div>
                 </div> 
          </div>
          <script src="http://www.cuteyep.com/app/public/js/common.js"></script>
					<script>
              	var audio = document.getElementById('audio');
                aa();
              	$('.av').click(function(){
                  	audio.play();
                    $('.av').hide();
                    $('.ad').show();
                });
                $('.ad').click(function(){
                    audio.pause();
                    $('.ad').hide();
                    $('.av').show();
                });

               function aa(){
                  $('#audio').attr('src','http://www.cuteyep.com/app/11.mp3');
                  audio.play();
               }
               

                
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
                }

                //将逗号换成行
                var str=$('.font-flash').html(); //这是一字符串 
                $('.font-flash').html(formatStr(str));
                   function formatStr(str) 
                { 
                str=str.replace(/,/ig,"<br/>"); 
                   return str; 
                };
              
                //根据内容设定滚动时间滚动高度
                $(function(){
                    var flashbox = $('.font-flash').height();//盒子的高；
                    var timeFD = (flashbox + '0') * 6;//时间
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

                    setInterval(top1,1000);//1秒后开始执行
                });

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
                $('.view-wztls').click(function(){

                     var norTit = $(this).find('h3').html();
                     var norCon = $(this).find('.cont').html();
                     $('.view-wzip').val(norTit);
                     $('.view-wztp').val(norCon);
                     $('.view-wztxt').hide();
                });


                //提交内容
                $('#viewbtn').click(function(){ 

                    var GDcon = $('.view-wztp').val();
                    if($('.view-wzip').val() == ''){
                       alert('请输入标题');
                       return false;
                    } 

                    if($('.view-wztp').val() == '' || $('.view-wztp').val() == null ){
                       alert('内容不能为空');
                       return false;
                    }                
                    var ppert = $('form').serialize();//序列化表单项
                    ppert = decodeURIComponent(ppert,true);//将数据解码
                    //alert(ppert);
                    $.post('http://www.cuteyep.com/app/Index/wallpaper_data',ppert,function(data){
                       var obj = JSON.parse(data);
                       //alert(obj.type);
                       if(obj.type == 0){
                           $('#viewNR').html(formatStr(GDcon));//将内容传输给滚动
                           $('.view-wz').hide();//关闭浮动层
                       }else{
                           alert('返回1');
                       }

                    });
                    return false;
                });

                //开启、关闭编辑文字浮动层

                $('.view-closet').click(function(){
                     $('.view-wz').hide();//关闭浮动层
                });
                $('#wz-cf').click(function(){
                     $('.view-wz').show();//打开浮动层 
                });

                //开启、关闭背景音乐浮动层

                $('.view-closey').click(function(){
                     $('.view-yy').hide();//关闭浮动层
                });
                $('#yy-cf').click(function(){
                     $('.view-yy').show();//打开浮动层 
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
                $('#viewbtn1').click(function(){
                     //alert(mnum);
                     if(mnum == 'unefined' || mnum == null ){
                        alert('请选择音乐');
                     }else{
                          $.post('',mnum,function(data){
                               var obj = JSON.parse(data);
                               if(obj.type == 1){
                                  alert('正确了！');
                               }else{
                                  alert('错误了');
                                  return false;
                               }
                          });
                     }
                });

                //开启、关闭录制音乐浮动层

                $('.view-closel').click(function(){
                     $('.view-lz').hide();//关闭浮动层
                });
                $('#yy-ly').click(function(){
                     $('.view-lz').show();//打开浮动层 
                });

                //以下是录音js
                var timeo = 0;//录制时间
                  var aaa = 0;//结束时间
                  var end= 0;
                  var timedb= 0;//重复播放开关 0为关闭
                  function timeT(){
                    if(end == 0 && timeo < 10){
                              timeo++;
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
                       setInterval(timeT,1000);
                       myInterfaceName.Start_recording();   
                       //alert('按下了');
                       $('.diyflash').addClass('select');//添加按钮动画


                 }) ;

                 //松开
                 $('#record').bind('touchend',function(){
                           $('.diyflash').removeClass('select');//移除按钮动画
                           if(timeo < 3){
                                tip('录制时间太短了！请重新录制。');
                                setTimeout(function(){
                                     location.reload();
                                },2000)
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
                 $('#record-play').click(function(){
                       timeplay = 1;
                       if(timedb == 0){
                          myInterfaceName.recording();
                          timeo = aaa;
                       }
                       
                       
                       playL= 1;
                       timedb = 1;

                 });

                 //点击重新录制
                 $('#record-return').click(function(){
                      if(playL == 1){
                              myInterfaceName.end_recording();
                              location.reload(); 
                      }else{
                              location.reload();    
                      }
                 });
                 myInterfaceName.mask1('');
                 //保存
                 $('.sava').click(function(){
                   myInterfaceName.mask1('');
                   myInterfaceName.up_recording();
                 });
                
            


					</script>

<script>
myInterfaceName.title($('title').html());
myInterfaceName.wancheng(0);
</script>
</body>
</html>