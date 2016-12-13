<?php  


$target_path  = "./public/user/";//接收文件目录  
if(!is_dir($target_path)){
	mkdir($target_path,0777,true);
}

$ext = pathinfo(basename($_FILES['uploadedfile']['name']));
$ext = strtolower($ext['extension']);
$new_file_name = substr(md5(time().rand(1000, 9999)),2,13).'.'.$ext;

$target_path = rtrim($target_path,'/').'/'.$new_file_name;//$target_path . basename( $_FILES['uploadedfile']['name']);
if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
	echo $new_file_name;//"图片".$new_file_name. " 上传成功";
	//up_qinu('http://www./up.php',array('img_url'=>'/upload/'.$new_file_name,'img'=>'/upload/'.$new_file_name));
}  else{
	echo "no";//"There was an error uploading the file, please try again!" . $_FILES['uploadedfile']['error'];
}


/**
 * 第三方图片上传空间
 */
function up_qinu($url,$post_data){
	// 参数数组
	$post_data['key'] = 'web_6S9V5CPJT';//挡口key码
	$o="";
	foreach ($post_data as $k=>$v) $o.= "$k=".urlencode($v)."&";
	$post_data=substr($o,0,-1);
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_URL,$url);
	//为了支持cookie
	//curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
	curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//不输出到浏览器
	$result = curl_exec($ch);
	return $result;
}

?>  
