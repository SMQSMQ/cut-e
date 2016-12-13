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

<link rel="stylesheet" type="text/css" href="/cute/public/css/navigator.default.css" />
<!-- <link rel="stylesheet" href="/cute/public/css/loding.css"> -->
<script src="/cute/public/js/gmu.js"></script>


           <div class="top">
                    <div class="top-font">表情</div>
                    <div class="iconfont top-search">&#xe604;</div>
           </div>
          <div style=" height:81px" ></div>
          <div id="wrap">
              <div class="left-fixed">

                  <div id="nav">
                      <ul>
                          <li class="ui-state-active" data_id="0"><a href="#test1">推荐</a></li>
                          <li class="load" data_id="-1"><a href="#test2">人气</a></li>
                          <li class="load" data_id="-2"><a href="#test3">最新</a></li>
                          <?php if(is_array($tag_list)): $k = 0; $__LIST__ = $tag_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><li class="load" data_id="<?php echo ($vo["id"]); ?>"><a href="#test<?php echo ($k+3); ?>"><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
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
                    <div style=" padding: 10px;" class="wrap">
                        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "$empty" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; endforeach; endif; else: echo "$empty" ;endif; ?>
                         <div class="cb"></div>
                     </div>
                 </article>
                 <article class="tabs-atc">
                 	<div style=" padding: 10px;" class="wrap">
                         <?php if(is_array($rq_list)): $i = 0; $__LIST__ = $rq_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; endforeach; endif; else: echo "" ;endif; ?>
                         <div class="cb"></div>
                     </div>
                 </article>
                 <article class="tabs-atc">
                 <div style=" padding: 10px;" class="wrap">
                         <?php if(is_array($new_list)): $i = 0; $__LIST__ = $new_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; endforeach; endif; else: echo "" ;endif; ?>
                         <div class="cb"></div>
                     </div>
                 </article>
                 <?php if(is_array($tag_list)): $k = 0; $__LIST__ = $tag_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><article class="tabs-atc">
                  <div style=" padding: 10px;" class="wrap">
                    <?php if(count($vo['list'])<=0) echo $empty; ?>
	                 	<?php if(is_array($vo['list'])): $i = 0; $__LIST__ = $vo['list'];if( count($__LIST__)==0 ) : echo "$empty" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i; endforeach; endif; else: echo "" ;endif; ?>
                 	</div>
                 </article><?php endforeach; endif; else: echo "$empty" ;endif; ?>
          </section>
         <div style=" height:80px"></div>



         <script src="http://www.cuteyep.com/app/public/js/common.js"></script>
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

              dropLoads('/cute/index.php?s=Index/expression_data/tab_id/0/p/',0);


              $('#nav ul li').click(function(){

                  var wpIndex =$(this).index();
                  var id = $(this).attr('data_id');
                  $('#tabs-con article').removeClass('select');
                  $('#tabs-con article').eq(wpIndex).addClass('select');
                  if(wpIndex == 0){
                    $('#tabs-con article').removeClass('select');
                    $('#tabs-con article').eq(0).addClass('select');
                    return;//第一栏是列表页，，所以不执行下拉加载
                  }
                  if($(this).hasClass('load')){
                    dropLoads('/cute/index.php?s=Index/expression_data/tab_id/'+id+'/p/',wpIndex);
                    $(this).removeClass('load');
                  }
              });




              function dropLoads(url,index){
                var p = 1;
                $('.tabs-atc').eq(index).dropload({
                  scrollArea : window,
                  loadDownFn : function(me){
                    $('.dropload-load').html('<img src="http://www.cuteyep.com/app/public/images/loading.gif" style="width:50px;"/>')
                    $.ajax({
                      type: 'GET',
                      url: url+p,
                      dataType: 'json',
                      success: function(data){
                        // console.log(data)
                        var count_page = data.allp;//分页总数
                        var type = data.total;//数据是否为空
                        if(type==0) {
                          $('.dropload-load').html('暂无数据');
                          return false;
                        }
                        var msg = data.msg;//信息提示
                        var data = data.list;
                        var result = '';
                        for(i in data){
                          result += '<div class="hm-cn-list" onclick="pvUrl.call(this,\'http://www.cuteyep.com/app/index.php?s=Index/expression_con/id/'+data[i].id+'\')"><div><img src="'+data[i].cover+'" class="hm-cn-listi lazyload"></div><div class="hm-cn-listx"><p>'+data[i].title+'</p><p class="pv">点击数'+data[i].pv+'次</p></div></div>';
                        }
                        setTimeout(function(){
                          $('.tabs-atc').eq(index).find('.wrap').append(result);
                          if(p<count_page) me.resetload();
                          else $('.dropload-load').html('没有更多了');//数据加载完成
                          p++;
                        },500)

                      },
                      error: function(xhr, type){
                        me.resetload();
                      }
                    });
                  }
                })
              }

              // 点击数+1
              function pvUrl(url){
                var pvCount = parseInt($(this).find('.pv').text().substr(3,4));
                $(this).find('.pv').text('点击数'+(pvCount+1)+'次');
                myInterfaceName.see(url);
              }


             myInterfaceName.wancheng(1);
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