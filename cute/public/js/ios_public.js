var cuteyep = "dyapp:dy:";
var userid = '';
function disp_page(str)//页面跳转
  {
      var url=cuteyep+str;
      document.location = url;
  }


function find(title,con,pic,u)//分享给好友
{
	var u=cuteyep+"wx_fx_find:"+t+":"+c+":"+p+":"+u;
	document.location = u;
}

function quan(t,c,p,u)//分享到朋友圈
{
	var u=cuteyep+"wx_fx_quan:"+t+":"+c+":"+p+":"+u;
	document.location = u;
}

function qq(t,c,p,u)//qq
{
	var u=cuteyep+"qq:"+t+":"+c+":"+p+":"+u;
	document.location = u;
}
/**
 * 分享给好友
 */
function fenxiang_find(str){
	document.location = cuteyep+'share:'+str;
}

function ios_find(t,c,p,u){
	var u=cuteyep+"share:1"+t+":"+c+":"+p+":"+u;
	document.location = u;
}
