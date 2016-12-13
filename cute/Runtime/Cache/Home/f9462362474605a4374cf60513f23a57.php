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

<link rel="stylesheet" type="text/css" href="http://www.cuteyep.com/app/public/css/common.css">
    <style type="text/css">
          .cadonline-list{ display: block; height: 60px; background: #fff; position:relative;  margin: 10px 0;}
    </style>

          <div class="top">
               <div class="top-font">制作语音贺卡</div>
               <div  class="top-bb"  id="nexti">下一步</div>
               <a href="javascript:void();" onclick="back()" class=" top-back"></a>
          </div>
          <div style=" height: 40px;"></div>
          <div class="cadbox">
                <div class="cad-tit">请选择在线音乐</div>
                <div id="cadbg">
                      <ul>
                            <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="cadonline-list"  rel="<?php echo ($vo["media_url"]); ?>" data_id="<?php echo ($vo["id"]); ?>">
                                  <div style=" padding: 0 20px; line-height: 60px;"><?php echo ($vo["title"]); ?></div>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                      </ul>
                      <ul class="cb"></ul>
                </div>
          </div>
          <audio src="http://www.w3school.com.cn/i/horse.ogg" controls="controls" id="audio" style=" display:none;">
          Your browser does not support the audio element.
          </audio>
          <script src="/cute/public/js/common.js"></script>
          <script type="text/javascript">
                  var y_id = 0;
                  var audio ;
                   audio = document.getElementById('audio');
                  $('#cadbg li').click(function(){
                	  var url = $(this).attr('rel');
                	  y_id = $(this).attr('data_id');
                    $('#audio').attr('src',url);
                    audio.play();
                  });
                 
                   var dataz=[]//数组
                   $('#cadbg li').click(function(){
                          $('#cadbg li').each(function(){
                             $('#cadbg li').find('.cad-select').remove()  
                          })

                          var seIndex= $(this).index();//当前点击的值
                          dataz.push(seIndex)//写入数组
                          var seLength=$(this).find('.cad-select').length;//当前点击下是否包含
                          if(seLength == 0){
                              $(this).append('<div class="cad-select"></div>')
                          } 
                      
                        // alert(dataz)
                    })
                    
                    
                   
                    $('#nexti').click(function(){
                         if(dataz == '' || y_id==0){
                             return tip('请选择贺卡背景音乐')
                         }
                         var mdata= dataz[dataz.length-1];//获取数组中最后点击
                         $.post('http://www.cuteyep.com/app/index.php?s=Diy/add',{y_id:y_id,ak:1},function(data1){
                        	 
                        	 $.post('http://www.cuteyep.com/app/Diy/greeting_sava',function(data){
                        		 var obj = JSON.parse(data);
							     	            		id = obj.id;
							     	            		title = obj.title;
					                 	 auto('http://www.cuteyep.com/app/index.php?s=Diy/greeting_card3/id/'+id,$('.ld').attr('data-url'));
             	            	});
                         	
                        	 	
                         });
                    });
                   function back(){
                   	audio.pause();
                   	window.location.href="clos";
                   }
          </script>
<script>
myInterfaceName.title($('title').html());
myInterfaceName.wancheng(0);
</script>
</body>
</html>