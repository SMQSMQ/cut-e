<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
 <head>
  <title> </title>
  <style type="text/css">
body {margin: 0;padding: 0;background:#E2E9EA ;cursor: E-resize;}
.think_run_time {display:none;}
</style>
<script>if(self==top){
	window.top.location.href = '<?php echo U("Login/index");?>';
}</script>
</head>
<script type="text/javascript" language="JavaScript">
<!--
var pic = new Image();
pic.src="./Public/Images/admin_baropen.gif";

function toggleMenu()
{
  frmBody = parent.document.getElementById('frame-body');
  imgArrow = document.getElementById('img');

  if (frmBody.cols == "0, 12, *,12")
  {
    frmBody.cols="200, 12, *,12";
    imgArrow.src = "./Public/Images/admin_barclose.gif";
  }
  else
  {
    frmBody.cols="0, 12, *,12";
    imgArrow.src = "./Public/Images/admin_baropen.gif";
  }
}

var orgX = 0;
document.onmousedown = function(e)
{
  var evt = Utils.fixEvent(e);
  orgX = evt.clientX;

  if (Browser.isIE) document.getElementById('tbl').setCapture();
}

document.onmouseup = function(e)
{
  var evt = Utils.fixEvent(e);

  frmBody = parent.document.getElementById('frame-body');
  frmWidth = frmBody.cols.substr(0, frmBody.cols.indexOf(','));
  frmWidth = (parseInt(frmWidth) + (evt.clientX - orgX));

  frmBody.cols = frmWidth + ", 12, *,12";

  if (Browser.isIE) document.releaseCapture();
}

var Browser = new Object();

Browser.isMozilla = (typeof document.implementation != 'undefined') && (typeof document.implementation.createDocument != 'undefined') && (typeof HTMLDocument != 'undefined');
Browser.isIE = window.ActiveXObject ? true : false;
Browser.isFirefox = (navigator.userAgent.toLowerCase().indexOf("firefox") != - 1);
Browser.isSafari = (navigator.userAgent.toLowerCase().indexOf("safari") != - 1);
Browser.isOpera = (navigator.userAgent.toLowerCase().indexOf("opera") != - 1);

var Utils = new Object();

Utils.fixEvent = function(e)
{
  var evt = (typeof e == "undefined") ? window.event : e;
  return evt;
}
//-->
</script>
<body onselect="return false;" style="background:#E2E9EA;padding:0;margin:0;">
<table height="100%" cellspacing="0" cellpadding="0"   id="tbl">
  <tr><td style="padding-left:1px;"><a href="javascript:toggleMenu();"><img src="./Public/Images/admin_barclose.gif" width="11" height="60" id="img" border="0"  /></a></td></tr>
</table>
</body>
</html>