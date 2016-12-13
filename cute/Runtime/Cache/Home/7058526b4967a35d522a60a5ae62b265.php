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
<script src="http://www.cuteyep.com/app/public/js/gmu.js"></script>
<script src="http://www.cuteyep.com/app/public/js/common.js"></script>
<script src="http://www.cuteyep.com/app/public/js/ios_public.js"></script>

	<style type="text/css">
          .searchbox{height: auto; position:fixed;left:0px; background: #fff; top: 20px; width:100%;}
          .searchbox1{ height: 45px; position:relatvie}
          .searchbox-return{height: 45px; width:45px;position:absolute;left:0px; color: #000; text-decoration: none; line-height: 45px; text-align: center; top: 0px;}
          .searchbox-top{margin:0 60px 0 50px; height: 45px; position:relative;}
          .searchbox-top-tt{ text-indent: 35px; line-height:18px;padding: 5px 0;box-sizing: border-box;font-family: microsoft yahei; outline: none; border-radius: 360px; border: 1px solid #ccc; width:100%; margin-top: 6px;}
          .searchbox-top-ico{height: 20px; width:30px; line-height: 22px;position: absolute;left:5px; color: #999;text-align: center; top: 10px;}
          .searchbox-top-btt{height: 45px; width:45px;position:absolute;right:10px; line-height: 45px; text-align: center; top: 0px; }
          .search-tabs{height: 40px; width:100%; display: none;}
					.hm-cn-listi.express{
						border-radius: 6px;
					}
					.search-words{
						padding: 15px 12px;
						background: #f5f5f5;
					}
					.search-words h3{
						padding: 0 3px;
						color: #555;
					}
					.search-words .hot-words{
						margin-top: 6px;
					}
					.search-words span{
						display: inline-block;
						padding: 10px 13px;
						margin: 8px 2px;
						background: #ee436b;
						border-radius: 20px;
						color: #fff;
					}
	</style>
				<div class="searchbox">
					<div class="searchbox1" >
						<a onclick="disp_page('http://www.cuteyep.com/cute/index.php?s=Index/index/type/1')" class="iconfont searchbox-return">&#xe617;</a>
						<div class="searchbox-top">
							<input placeholder="请输入关键字..." type="text" class="searchbox-top-tt" id="search-txt">
							<i  class="iconfont searchbox-top-ico">&#xe600;</i>
						</div>
						<div class="searchbox-top-btt" id="search-btn">搜索</div>
					</div>
					<div class="search-words">
						<h3>人气搜索词</h3>
						<div class="hot-words">
							<?php if(is_array($hot)): $i = 0; $__LIST__ = $hot;if( count($__LIST__)==0 ) : echo "$empty" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><span><?php echo ($vo["title"]); ?></span><?php endforeach; endif; else: echo "$empty" ;endif; ?>
						</div>
					</div>
					<div class="search-tabs" >
						<span class="tabs-stion active">表情</span>
						<span class="tabs-stion">语音贺卡</span>
						<span class="tabs-stion">壁纸</span>
						<div class="cb"></div>
					</div>
				</div>
				<div style=" height:91px"></div>
				<section id="tabs-search" style="display: none;">
					<div id="list">
						<article class="tabs-con-itm select">
							<div style=" padding: 10px;">
								<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "$empty" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="hm-cn-list" onclick="disp_page('http://www.cuteyep.com/app/index.php?s=Index/expression_con/id/<?php echo ($vo["id"]); ?>/type/1')">
										<div><img src="<?php echo ($vo["cover"]); ?>" class="hm-cn-listi express"></div>
										<div class="hm-cn-listx">
											<p><?php echo ($vo["title"]); ?></p>
										</div>
									</div><?php endforeach; endif; else: echo "$empty" ;endif; ?>
								<div class="cb"></div>
							</div>
						</article>
						<article class="tabs-con-itm">
							<div style=" padding: 10px;">
								<?php if(is_array($list2)): $i = 0; $__LIST__ = $list2;if( count($__LIST__)==0 ) : echo "$empty" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="hm-cn-list" onclick="disp_page('http://www.cuteyep.com/app/index.php?s=Index/greeting_card_con/id/<?php echo ($vo["id"]); ?>/type/1')">
										<div><img src="<?php echo ($vo["cover"]); ?>" class="hm-cn-listi"></div>
										<div class="hm-cn-listx">
											<p><?php echo ($vo["title"]); ?></p>
										</div>
									</div><?php endforeach; endif; else: echo "$empty" ;endif; ?>
								<div class="cb"></div>
							</div>
						</article>
						<article class="tabs-con-itm">
							<div style=" padding: 10px;">
								<?php if(is_array($list1)): $i = 0; $__LIST__ = $list1;if( count($__LIST__)==0 ) : echo "$empty" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="hm-cn-list" onclick="disp_page('http://www.cuteyep.com/app/index.php?s=Index/wallpaper_con/id/<?php echo ($vo["id"]); ?>/type/1')">
										<div><img src="<?php echo ($vo["cover"]); ?>" class="hm-cn-listi"></div>
										<div class="hm-cn-listx">
											<p><?php echo ($vo["title"]); ?></p>
										</div>
									</div><?php endforeach; endif; else: echo "$empty" ;endif; ?>
								<div class="cb"></div>
							</div>
						</article>
					</div>
				</section>

          <script type="text/javascript">
              //tabs
              $('.search-tabs span').click(function(){

                  $('.search-tabs span').each(function(){
                        $('.search-tabs span').removeClass('active')
                  })

                  $(this).addClass('active')

                  var wpIndex =$(this).index();
                   $('#tabs-search article').each(function(){
                     $('#tabs-search article').removeClass('select');
                  })
                  $('#tabs-search article').eq(wpIndex).addClass('select');

              })

              //

              $('#search-btn').click(function(){
                 var serVal =$('#search-txt').val()
                 //alert(serVal);
                 if(serVal == ''){
                	 myInterfaceName.toast('请输入搜索内容')
                 }else{
									  $('.search-words').hide()
                    $('.search-tabs').show();
                    $('#tabs-search').show();
                    $("#list").load('http://www.cuteyep.com/app/Index/search/wd/'+serVal+'/type/1 #list');
                 }
              })

							$('.hot-words span').click(function(){
								$('#search-txt').val($(this).text())
							})


          </script>

</body>
<script>
disp_page('wancheng0:'+$('title').html());
</script>
</html>