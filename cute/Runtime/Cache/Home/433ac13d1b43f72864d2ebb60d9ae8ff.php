<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="http://www.cuteyep.com/app/public/css/swiper.min.css">
  <title>引导页</title>
  <style>
    .guid,.guid .swiper-container{
      width: 100%;
      height: 100%;
      position: fixed;
      top: 0;
      left: 0;
    }
    .guid img{
      height: 100%;
     }
  </style>
</head>
<body>

  <div class="guid">
    <div class="swiper-container"  onclick="myInterfaceName.auto_see('http://www.cuteyep.com/app/index.php?s=Index/index')">
        <div class="swiper-wrapper">
	        <?php if(is_array($start_list)): $i = 0; $__LIST__ = $start_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="swiper-slide"><img src="<?php echo ($vo["pics"]); ?>"></div><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
        <div class="swiper-pagination"></div>
    </div>
  </div>
</body>
<script src="http://www.cuteyep.com/app/public/js/swiper.min.js"></script>

<script>
var swiper = new Swiper('.swiper-container',{
  pagination: '.swiper-pagination',
  paginationClickable: true
});
</script>
</html>