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
     .enter-btn{
       width: 150px;
       height: 35px;
       border-radius: 6px;
       background: #fff;
       position: absolute;
       margin: auto;
       bottom: 50px;
       left: 0;
       right: 0;
       z-index: 1;
       color: #000;
       text-align: center;
       line-height: 35px;
       font-size: 17px;
       letter-spacing: 3px;
     }
  </style>
</head>
<body>

  <div class="guid">
    <div class="swiper-container" >
        <div class="swiper-wrapper">
        </div>
        <div class="swiper-pagination"></div>
    </div>
  </div>
</body>
<script src="http://www.cuteyep.com/app/public/js/zepto.js"></script>
<script src="http://www.cuteyep.com/app/public/js/swiper.min.js"></script>


<script>
var swiper = new Swiper('.swiper-container',{
  pagination: '.swiper-pagination',
  paginationClickable: true
});

var html = '';


$.get('http://www.cuteyep.com/app/Index/guid',function(data){
  $.each(data,function(i,v){
    html += '<div class="swiper-slide"><img src="'+v.pics+'"></div>';
  })
  swiper.appendSlide(html);
})

$('.swiper-slide').last().append('<div class="enter-btn">立即进入</div>')


</script>
</html>