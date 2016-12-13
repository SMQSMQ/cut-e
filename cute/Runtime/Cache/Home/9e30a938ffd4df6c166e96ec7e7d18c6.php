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

<link rel="stylesheet" type="text/css" href="/cute/public/css/navigator.default.css" />
<!-- <link rel="stylesheet" href="/cute/public/css/loding.css"> -->
<script src="/cute/public/js/gmu.js"></script>
<script src="/cute/public/js/common.js"></script>


           <div class="top">
                    <div class="top-font">表情</div>
                    <div class="iconfont top-search">&#xe604;</div>
           </div>
          <div style=" height:81px" ></div>
          <div id="wrap">
              <div class="left-fixed">

                  <div id="nav">
                      <ul>
                          <li class="ui-state-active load"><a href="#test1">推荐</a></li>
                          <li class="load"><a href="#test2">人气</a></li>
                          <li class="load"><a href="#test3">最新</a></li>
                          <?php if(is_array($tag_list)): $k = 0; $__LIST__ = $tag_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><li class="load"><a href="#test<?php echo ($k+3); ?>"><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                      </ul>
                  </div>
                  <div class="left"><a>Fix left</a></div>
              </div>
          </div>
          <!-- <div id="ld">
            <div class="loading"></div>
          </div> -->
          <section id="tabs-con" class="express">
                 <!--推荐的-->
                 <article class="tabs-atc select">
                    <div style=" padding: 10px;">
                        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "$empty" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="hm-cn-list" onclick="myInterfaceName.see('http://www.cuteyep.com/app/index.php?s=Index/expression_con/id/<?php echo ($vo["id"]); ?>')">
                               <div><img src="<?php echo ($vo["cover"]); ?>" class="hm-cn-listi"></div>
                               <div class="hm-cn-listx">
                                     <p><?php echo ($vo["title"]); ?></p>
                                     <p>点击数<?php echo ($vo["pv"]); ?>次</p>
                               </div>
                         </div><?php endforeach; endif; else: echo "$empty" ;endif; ?>
                         <div class="cb"></div>
                     </div>
                 </article>
                 <article class="tabs-atc">
                 	<div style=" padding: 10px;">
                         <?php if(is_array($rq_list)): $i = 0; $__LIST__ = $rq_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="hm-cn-list" onclick="myInterfaceName.see('http://www.cuteyep.com/app/index.php?s=Index/expression_con/id/<?php echo ($vo["id"]); ?>')">
                               <div><img src="<?php echo ($vo["cover"]); ?>" class="hm-cn-listi"></div>
                               <div class="hm-cn-listx">
                                     <p><?php echo ($vo["title"]); ?></p>
                                     <p>点击数<?php echo ($vo["pv"]); ?>次</p>
                               </div>
                         </div><?php endforeach; endif; else: echo "" ;endif; ?>
                         <div class="cb"></div>
                     </div>
                 </article>
                 <article class="tabs-atc">
                 <div style=" padding: 10px;">
                         <?php if(is_array($new_list)): $i = 0; $__LIST__ = $new_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="hm-cn-list" onclick="myInterfaceName.see('http://www.cuteyep.com/app/index.php?s=Index/expression_con/id/<?php echo ($vo["id"]); ?>')">
                               <div><img src="<?php echo ($vo["cover"]); ?>" class="hm-cn-listi"></div>
                               <div class="hm-cn-listx">
                                     <p><?php echo ($vo["title"]); ?></p>
                                     <p>点击数<?php echo ($vo["pv"]); ?>次</p>
                               </div>
                         </div><?php endforeach; endif; else: echo "" ;endif; ?>
                         <div class="cb"></div>
                     </div>
                 </article>
                 <?php if(is_array($tag_list)): $k = 0; $__LIST__ = $tag_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><article class="tabs-atc">
                  <div style=" padding: 10px;">
                    <?php if(count($vo['list'])<=0) echo $empty; ?>
	                 	<?php if(is_array($vo['list'])): $i = 0; $__LIST__ = $vo['list'];if( count($__LIST__)==0 ) : echo "$empty" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i;?><div class="hm-cn-list" onclick="myInterfaceName.see('http://www.cuteyep.com/app/index.php?s=Index/expression_con/id/<?php echo ($vo2["id"]); ?>')">
                               <div><img src="<?php echo ($vo2["cover"]); ?>" class="hm-cn-listi"></div>
                               <div class="hm-cn-listx">
                                     <p><?php echo ($vo2["title"]); ?></p>
                                     <p>点击数<?php echo ($vo2["pv"]); ?>次</p>
                               </div>
                         </div><?php endforeach; endif; else: echo "" ;endif; ?>
                 	</div>
                 </article><?php endforeach; endif; else: echo "$empty" ;endif; ?>
          </section>
         <div style=" height:80px"></div>




          <script type="text/javascript">
              (function(){
                


                  var leftBtn = $('.left-fixed .left a'),
                      nav = $('#nav');

                  nav.navigator().on('select', function(){
                      leftBtn.removeClass('ui-state-active');
                  });

                  leftBtn.click(function(){
                      nav.navigator('unselect');
                      $(this).addClass('ui-state-active');
                  });
              })();



              $('#nav ul li').click(function(){
                  var wpIndex =$(this).index();
                  if($(this).hasClass('load')){
                    dropLoads('/cute/index.php?s=Index/wallpaper_data/k/'+wpIndex+'p/',wpIndex);//下拉加载
                    console.log(wpIndex,$('.tabs-atc').eq(wpIndex).index());
                    $(this).removeClass('load')
                  }
                  $('#tabs-con article').removeClass('select');
                  $('#tabs-con article').eq(wpIndex).addClass('select');

              })


             myInterfaceName.wancheng(1);
         </script>
         <script>

        //  dropLoad('/cute/index.php?s=Index/expression/p/');


         </script>
      <script>
setInterval("auto_login()",1000);
function auto_login(){
	 $.get('/cute/index.php?s=Login/auto_login',function(data){
		 var obj = JSON.parse(data);
		 var variable1 = obj.user_pic;
		 $('.me-top img').attr('src', obj.user_pic);
		 $('.me-top .me-tit').html(obj.user_name);
		 myInterfaceName.auto_login(obj.user_name);
	 });
}
</script>
</body>
</html>