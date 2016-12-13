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
.hm-cn-list{height: 385px;}
@media screen and (max-width:768px){
  .hm-cn-list{height: 690px;}
}
@media screen and (max-width:375px){
  .hm-cn-list{height: 360px;}
}
@media screen and (max-width:320px){
  .hm-cn-list{height: 320px;}
}
</style>
          <section id="tabs-con">
            <!--分类-->
            <article class="tabs-atc select">
              <div style=" padding: 10px;">
                <div class="list">

                </div>
                <div class="cb"></div>
              </div>
            </article>
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


              var p = 1;
              $('.select').dropload({
                scrollArea : $('.select'),
                loadDownFn : function(me){
                  $('.dropload-load').html('<img src="http://www.cuteyep.com/app/public/images/loading.gif" style="width:50px;"/>')
                  $.ajax({
                    type: 'GET',
                    url: '/cute/index.php?s=Index/wallpaper_list_data/id/<?php echo ($fl["id"]); ?>/p/'+p,
                    dataType: 'json',
                    success: function(data){
                      var count_page = data.p;//分页总数
                      var type = data.type;//数据是否为空
                      if(type==0) {
                        $('.dropload-load').html('暂无数据');
                        return false;
                      }
                      var msg = data.msg;//信息提示
                      var data = data.list;
                      var result = '';
                      for(i in data){
                        result += '<div class="hm-cn-list" onclick="disp_page(\'http://www.cuteyep.com/app/index.php?s=Index/wallpaper_con/id/'+data[i].id+'/type/1\')"><div><img src="'+data[i].cover+'" class="hm-cn-listi lazyload"></div><div class="hm-cn-listx"><p>'+data[i].title+'</p><p>点击数'+data[i].pv+'次</p></div></div>'
                      }
                      setTimeout(function(){
                        $('.list').append(result);
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
              });

         </script>
           
</body>
<script>
disp_page('wancheng0:'+$('title').html());
</script>
</html>