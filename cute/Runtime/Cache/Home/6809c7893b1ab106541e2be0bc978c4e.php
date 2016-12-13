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
<link rel="stylesheet" type="text/css" href="/cute/public/css/navigator.default.css" />
<script src="/cute/public/js/gmu.js"></script>
<script src="/cute/public/js/dropload.min.js"></script>
<style>
html,body{
  height: 100%;
  /*overflow: hidden;*/
}

.hm-cn-list{height: 385px;}
@media screen and (max-width:768px){
  .hm-cn-list{height: 690px;}
}
@media screen and (max-width:375px){
  .hm-cn-list{height: 360px;}
}
@media screen and (max-width:320px){
  .hm-cn-list{height: 310px;}
}
.tabs-atc{
  width: 100%;
  position:absolute;
  top:37px;
  left:0;
  bottom:50px;
  overflow:scroll;
  -webkit-overflow-scrolling: touch;
}
</style>
        <div style="height:100%;">
          <div style=" height:40px" ></div>
          <div id="wrap" >
            <div class="left-fixed">
              <div id="nav">
                <ul>
                  <li class="load" data_id="-3"><a href="#test1">分类</a></li>
                  <li data_id="0" class="ui-state-active load"><a href="#test1">推荐</a></li>
                  <li data_id="-1" class="load"><a href="#test2">人气</a></li>
                  <li data_id="-2" class="load"><a href="#test3">最新</a></li>
                  <?php if(is_array($tag_list)): $k = 0; $__LIST__ = $tag_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><li data_id="<?php echo ($vo["id"]); ?>" class="load"><a href="#test<?php echo ($k+3); ?>"><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
              </div>
              <div class="left"><a>Fix left</a></div>
            </div>
          </div>
          <section id="tabs-con">
            <!--分类-->
            <article class="tabs-atc">
              <?php if(is_array($fl)): $i = 0; $__LIST__ = $fl;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="wp-fllist" rel="<?php echo ($vo["id"]); ?>" onclick="disp_page('http://www.cuteyep.com/app/index.php?s=Index/wallpaper_list/id/<?php echo ($vo["id"]); ?>/type/1')">
                  <div class="wp-fllist-hd"><img src="<?php echo ($vo["pic"]); ?>"  class="img"></div>
                  <div class="wp-flist-cn">
                    <p><?php echo ($vo["title"]); ?></p>
                    <p><?php echo ($vo["num"]); ?>张</p>
                  </div>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
            </article>
            <!--推荐的-->
            <article class="tabs-atc select">
              <div style=" padding: 10px;" class="wrap">
                <div class="cb"></div>
              </div>
            </article>
            <article class="tabs-atc">
              <div style=" padding: 10px;" class="wrap">

                <div class="cb"></div>
              </div>
            </article>
            <article class="tabs-atc" >
              <div style=" padding: 10px;" class="wrap">

                <div class="cb"></div>
              </div>
            </article>
            <?php if(is_array($tag_list)): $k = 0; $__LIST__ = $tag_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><article class="tabs-atc" class="ab<?php echo ($k+3); ?>">
                <div style=" padding: 10px;" class="wrap">
                  <?php if(count($vo['list'])<=0) echo $empty; ?>
                  <?php if(is_array($vo['list'])): $i = 0; $__LIST__ = $vo['list'];if( count($__LIST__)==0 ) : echo "$empty" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i; endforeach; endif; else: echo "" ;endif; ?>
                </div>
              </article><?php endforeach; endif; else: echo "$empty" ;endif; ?>
          </section>
        </div>

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



                dropLoads('/cute/index.php?s=Index/wallpaper_data/tab_id/0/p/',1);
                $('#nav ul li').click(function(){
                  var wpIndex =$(this).index();
                  var id = $(this).attr('data_id');
                  $('#tabs-con article').removeClass('select');
                  $('#tabs-con article').eq(wpIndex).addClass('select');
                  if(wpIndex == 0 || wpIndex == 1){
                    $('#tabs-con article').removeClass('select');
                    $('#tabs-con article').eq(wpIndex).addClass('select');
                    return;//第一栏是列表页，，所以不执行下拉加载
                  }
                  if($(this).hasClass('load')){
                    dropLoads('/cute/index.php?s=Index/wallpaper_data/tab_id/'+id+'/p/',wpIndex);
                    $(this).removeClass('load');
                  }
                });

                function dropLoads(url,index){
                  var p = 1;
                  $('.select').dropload({
                    scrollArea : $('.select'),
                    distance: 70,
                    loadDownFn : function(me){
                      $('.dropload-load').html('<img src="http://www.cuteyep.com/app/public/images/loading.gif" style="width:50px;"/>')
                      $.ajax({
                        type: 'GET',
                        url: url+p,
                        dataType: 'json',
                        success: function(data){
                          // alert(data)
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
                            result += '<div class="hm-cn-list" onclick="pvUrl.call(this,\'http://www.cuteyep.com/app/index.php?s=Index/wallpaper_con/id/'+data[i].id+'/type/1\')"><div><img src="'+data[i].cover+'" class="hm-cn-listi"></div><div class="hm-cn-listx"><p>'+data[i].title+'</p><p class="pv">点击数'+data[i].pv+'次</p></div></div>';
                          }
                          setTimeout(function(){
                            $('.tabs-atc').eq(index).find('.wrap').append(result);
                            if(p<count_page) me.resetload();
                            else $('.dropload-load').html('没有更多了');//数据加载完成
                            p++;
                          },500)

                        },
                        error: function(xhr, type){
                          //alert('Ajax error!');
                          // 即使加载出错，也得重置
                          me.resetload();
                        }
                      });
                    }
                  })
                }

                function pvUrl(url){
                  var pvCount = parseInt($(this).find('.pv').text().substr(3,4));
                  $(this).find('.pv').text('点击数'+(pvCount+1)+'次');
                  disp_page(url);
                }
                disp_page('wancheng3');
           </script>