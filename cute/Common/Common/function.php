<?php
/**
 * 是否登录
 */
function is_login()
{
	if(isset($_COOKIE[md5('cute')])){
		$a = unserialize($_COOKIE[md5('cute')]);
		if($a['user_id']<=0 || $a['user_id']=='') redirect('index.php?s=Login');
	}else                                       redirect('index.php?s=Login');
}


/**
 * 获取uid
 */
function getuser(){
	 return unserialize($_COOKIE[md5('cute')]);
}
/**
 * 随机码
 */
function sj($b=3)
{
	$mm = '';
	$i = '';
	$qq = array('0','1','2','3','4','5','6','7','8','9');
	for($i==0;$i<=$b;$i++)
	{
		$mm.= $qq[mt_rand(0,9)];
	}
	return  $mm;
}
/**
 * 短信发送
 */
function msg($phone,$centers)
{
	$url='http://utf8.sms.webchinese.cn/?Uid=cuteyep&Key=d13810befbbad9dfad87&smsMob='.$phone.'&smsText='.URLEncode($centers);
	if(function_exists('file_get_contents'))
	{
		$file_contents = file_get_contents($url);
	}
	else
	{
		$ch = curl_init();
		$timeout = 5;
		curl_setopt ($ch, CURLOPT_URL, $url);
		curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
		$file_contents = curl_exec($ch);
		curl_close($ch);
	}
	return $file_contents;
}
/**
 * 加密码数据
 * encode_pass($request->get['id']);//加密码
 * encode_pass($request->get['id'],"cuteyep_youye",'decode');//解码
 */
function encode_pass($tex,$key='cuteyep_youye',$type="encode"){
	$chrArr=array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z',
			'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z',
			'0','1','2','3','4','5','6','7','8','9');
	if($type=="decode"){
		if(strlen($tex)<14)return false;
		$verity_str=substr($tex, 0,8);
		$tex=substr($tex, 8);
		if($verity_str!=substr(md5($tex),0,8)){
			//完整性验证失败
			return false;
		}
	}
	$key_b=$type=="decode"?substr($tex,0,6):$chrArr[rand()%62].$chrArr[rand()%62].$chrArr[rand()%62].$chrArr[rand()%62].$chrArr[rand()%62].$chrArr[rand()%62];
	$rand_key=$key_b.$key;
	$rand_key=md5($rand_key);
	$tex=$type=="decode"?base64_decode(substr($tex, 6)):$tex;
	$texlen=strlen($tex);
	$reslutstr="";
	for($i=0;$i<$texlen;$i++){
		$reslutstr.=$tex{$i}^$rand_key{$i%32};
	}
	if($type!="decode"){
		$reslutstr=trim($key_b.base64_encode($reslutstr),"==");
		$reslutstr=substr(md5($reslutstr), 0,8).$reslutstr;
	}
	return $reslutstr;
}

function is_login_ios($id)
{
	$newid = encode_pass($id,"cuteyep_youye","decode");
	return $newid;
}

