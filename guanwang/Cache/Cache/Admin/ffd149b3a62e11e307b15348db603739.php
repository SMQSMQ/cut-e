<?php if (!defined('THINK_PATH')) exit();?><script>if(self==top){
	window.top.location.href = '<?php echo U("Login/index");?>';
}</script>
<style>
div.footer{ clear:both; padding:10px 0px; width:100%; text-align:center; font:normal normal normal 11px Verdana,Geneva,Arial,Helvetica,sans-serif; background-color:#E2E9EA;}
div.footer a{color:#4B82BB;}
div.footer a:hover{color:silver; text-decoration:none; border-bottom:1px dotted}
</style>
<div id="footer" class="footer" >Powered by <a href="http://www.yourphp.cn" target="_blank">YourPHP</a> <?php echo constant("VERSION");?> <?php echo constant("UPDATETIME");?> Copyright 2008-2011 <span id="run"></span>
</div>
</body>
</html>