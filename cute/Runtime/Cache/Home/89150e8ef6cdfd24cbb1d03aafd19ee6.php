<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<style>
body,html{
  height: 100%;
}
.container{
  height: 100%;
}
   .container .err-inner{
     width: 57%;
     height: 65%;
     margin: auto;
     position: absolute;
     top: 0;
     left: 0;
     bottom: 0;
     right: 0;
   }
   .err-inner img{
     width: 100%;
   }
   .err-text{
     margin-top: 30px;
   }
   .err-inner span{
     font-size: 14px;
   }
</style>
<body>

  <div class="container">
    <div class="err-inner">
      <div class="err-img"><img src="/cute/public/images/404.jpg" alt=""></div>
      <div class="err-text"><span>您访问的内容不存在或已删除</span></div>
    </div>
  </div>

</body>
</html>