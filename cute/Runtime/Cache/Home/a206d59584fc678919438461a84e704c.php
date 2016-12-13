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
    <style type="text/css">

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

          <div style=" height: 40px;"></div>
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

          <script src="http://www.cuteyep.com/app/public/js/common.js"></script>
          <script type="text/javascript">

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
                 //myInterfaceName.mask1('');
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