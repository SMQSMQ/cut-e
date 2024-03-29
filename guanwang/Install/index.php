<?php

if (file_exists('../install.lock')){
        echo '
		<html>
        <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        </head>
        <body>
        你已经安装过该系统，如果想重新安装，请先删除站点根目录下的 install.lock 文件，然后再安装。
        </body>
        </html>';
        exit;
}
@set_time_limit(1000);
if(phpversion() < '5.3.0') set_magic_quotes_runtime(0);
if(phpversion() < '5.2.0') exit('您的php版本过低，不能安装本软件，请升级到5.2.0或更高版本再安装，谢谢！');

date_default_timezone_set('PRC');
error_reporting(E_ALL & ~E_NOTICE);
header('Content-Type: text/html; charset=UTF-8');
define('SITEDIR', _dir_path(substr(dirname(__FILE__), 0, -8)));
include_once (SITEDIR."/Yourphp/Common/common.php");

$sqlFile = 'yourphp.sql';
$configFile =  'config.php';
if(!file_exists(SITEDIR.'Install/'.$sqlFile) || !file_exists(SITEDIR.'Install/'.$configFile)){
	echo '缺少必要的安装文件!';exit;
}
$steps= array(
	'1'=>'安装许可协议',
	'2'=>'运行环境检测',
	'3'=>'安装参数设置',
	'4'=>'安装详细过程',
	'5'=>'安装完成',
);
$step = isset($_GET['step'])? $_GET['step'] : 1;




switch($step)
{




case '1':
    include_once ("./templates/s1.html");
    exit ();

case '2':

 		if(phpversion()<5){
			die('本系统需要PHP5+MYSQL >=4.1环境，当前PHP版本为：'.phpversion());
		}

        $phpv = @ phpversion();
        $os = PHP_OS;
		$os = php_uname();
		$tmp = function_exists('gd_info') ? gd_info() : array();
        $server = $_SERVER["SERVER_SOFTWARE"];
        $host = (empty ($_SERVER["SERVER_ADDR"]) ? $_SERVER["SERVER_HOST"] : $_SERVER["SERVER_ADDR"]);
        $name = $_SERVER["SERVER_NAME"];
        $max_execution_time = ini_get('max_execution_time');
        $allow_reference = (ini_get('allow_call_time_pass_reference') ? '<font color=green>[√]On</font>' : '<font color=red>[×]Off</font>');
        $allow_url_fopen = (ini_get('allow_url_fopen') ? '<font color=green>[√]On</font>' : '<font color=red>[×]Off</font>');
        $safe_mode = (ini_get('safe_mode') ? '<font color=red>[×]On</font>' : '<font color=green>[√]Off</font>');

		$err=0;
		if(empty($tmp['GD Version'])){
			$gd =  '<font color=red>[×]Off</font>' ;
			$err++;
		}else{
			$gd =  '<font color=green>[√]On</font> '.$tmp['GD Version'];
		}
		if(function_exists('mysql_connect')){
			$mysql = '<font color=green>[√]On</font>';
		}else{
			$mysql = '<font color=red>[×]Off</font>';
			$err++;
		}
		if(ini_get('file_uploads')){
			$uploadSize = '<font color=green>[√]On</font> 文件限制:'.ini_get('upload_max_filesize');
		}else{
			$uploadSize = '禁止上传';
		}
		if(function_exists('session_start')){
			$session = '<font color=green>[√]On</font>' ;
		}else{
			$session = '<font color=red>[×]Off</font>';
			$err++;
		}
        $folder = array ('/',
							 'Uploads',
        					 'Public/Data',
							 'Html',
        					 'Cache',
        					 'Cache/Cache',
        					 'Cache/Data',
        					 'Cache/Temp',
        					 'Cache/Logs');
        include_once ("./templates/s2.html");
        exit ();

case '3':

		if($_GET['testdbpwd']){
			$dbHost = $_POST['dbHost'].':'.$_POST['dbPort'];
			$conn = @mysql_connect($dbHost, $_POST['dbUser'], $_POST['dbPwd']);
			if($conn){die("1"); }else{die("");}
		}
		$scriptName = !empty ($_SERVER["REQUEST_URI"]) ?  $scriptName = $_SERVER["REQUEST_URI"] :  $scriptName = $_SERVER["PHP_SELF"];
        $rootpath = @preg_replace("/\/Install\/index\.php(.*)$/", "", $scriptName);
		$domain = empty ($_SERVER['HTTP_HOST']) ?  $_SERVER['HTTP_HOST']  : $_SERVER['SERVER_NAME'] ;
		$domain = $domain.$rootpath;
        include_once ("./templates/s3.html");
        exit ();


case '4':


	if(intval($_GET['install'])){
			$n = intval($_GET['n']);
			$arr=array();

			$dbHost = trim($_POST['dbHost']);
			$dbPort = trim($_POST['dbPort']);
			$dbName = trim($_POST['dbName']);
			$dbHost = empty($dbPort) || $dbPort == 3306 ? $dbHost : $dbHost.':'.$dbPort;
			$dbUser = trim($_POST['dbUser']);
			$dbPwd= trim($_POST['dbPwd']);
			$dbPrefix = empty($_POST['dbPrefix']) ? 'yourphp_' : trim($_POST['dbPrefix']);


			$username =  trim($_POST['username']);
			$password = trim($_POST['password']);
			$site_name = addslashes(trim($_POST['site_name']));
			$site_url = trim($_POST['site_url']);
			$site_email = trim($_POST['site_email']);
			$seo_description = trim($_POST['seo_description']);
			$seo_keywords = trim($_POST['seo_keywords']);

			$conn = @ mysql_connect($dbHost, $dbUser, $dbPwd);
			if(!$conn){
				$arr['msg'] = "连接数据库失败!";
				echo json_encode($arr);exit;
			}
			mysql_query("SET NAMES 'utf8'");//,character_set_client=binary,sql_mode='';
			$version = mysql_get_server_info($conn);
			if($version < 4.1){
				$arr['msg'] = '数据库版本太低!';
				echo json_encode($arr);exit;
			}

			if(!mysql_select_db($dbName, $conn)){
				if(!mysql_query("CREATE DATABASE IF NOT EXISTS `".$dbName."`;", $conn)){
					$arr['msg'] = '数据库 '.$dbName.' 不存在，也没权限创建新的数据库！';
					echo json_encode($arr);exit;
				}
				if(empty($n)){
					$arr['n']=1;
					$arr['msg'] = "成功创建数据库:{$dbName}<br>";
					echo json_encode($arr);exit;
				}
				mysql_select_db($dbName, $conn);
			}

			//读取数据文件
			$sqldata = file_get_contents(SITEDIR.'Install/'.$sqlFile);
			$sqlFormat = sql_split($sqldata, $dbPrefix);


			/**
			执行SQL语句
			*/
			$counts =count($sqlFormat);

			for ($i=$n; $i < $counts; $i++){
				$sql = trim($sqlFormat[$i]);
				$i++;
				if (strstr($sql, 'CREATE TABLE')){
					preg_match('/CREATE TABLE `([^ ]*)`/', $sql, $matches);
					$ret = mysql_query($sql);
					if($ret){
						$message =  '成功创建数据表：'.$matches[0].' <br />';
					}else{
						$message =  '<font color="red">创建数据表失败：'.$matches[0].' </font><br />';
					}
					$arr=array('n'=>$i,'msg'=>$message);
					echo json_encode($arr); exit;

				}else{
					$ret = mysql_query($sql);
					$message='';
					$arr=array('n'=>$i,'msg'=>$message);
					echo json_encode($arr); exit;
				}
			}
			if($i==999999)exit;


			mysql_query("UPDATE `{$dbPrefix}config` SET  `value` = '$site_name' WHERE varname='site_name'");
			mysql_query("UPDATE `{$dbPrefix}config` SET  `value` = '$site_url' WHERE varname='site_url'");
			mysql_query("UPDATE `{$dbPrefix}config` SET  `value` = '$site_email' WHERE varname='site_email'");
			mysql_query("UPDATE `{$dbPrefix}config` SET  `value` = '$seo_description' WHERE varname='seo_description'");
			mysql_query("UPDATE `{$dbPrefix}config` SET  `value` = '$seo_keywords' WHERE varname='seo_keywords'");

			//读取配置文件，并替换真实配置数据
			$strConfig = file_get_contents(SITEDIR.'Install/'.$configFile);
			$strConfig = str_replace('#DB_HOST#', $dbHost, $strConfig);
			$strConfig = str_replace('#DB_NAME#', $dbName, $strConfig);
			$strConfig = str_replace('#DB_USER#', $dbUser, $strConfig);
			$strConfig = str_replace('#DB_PWD#', $dbPwd, $strConfig);
			$strConfig = str_replace('#DB_PORT#', $dbPort, $strConfig);
			$strConfig = str_replace('#DB_PREFIX#', $dbPrefix, $strConfig);
			@file_put_contents(SITEDIR.'/'.$configFile, $strConfig);
			$code=md5(time());
			$query = "UPDATE `{$dbPrefix}config` SET value='$code' WHERE varname='ADMIN_ACCESS'";
			mysql_query($query);

 			//插入管理员
			$time=time();
			$ip = get_client_ip();
			$password = hash ( sha1, $password.$code );
			$query = "INSERT INTO `{$dbPrefix}user` (`groupid`, `username`, `password`, `realname`, `email`, `createtime`, `updatetime`, `reg_ip`, `status`) VALUES( 1, '$username', '$password', '$username', '$site_email', '$time', '$time', '$ip', '1')";
			mysql_query($query);

			$message  = '成功添加管理员<br />成功写入配置文件<br>安装完成．';
			$arr=array('n'=>999999,'msg'=>$message);
			echo json_encode($arr);exit;
	}

	 include_once ("./templates/s4.html");
	 exit();

case '5':
	if(is_file(SITEDIR.'Cache/~app.php'))@unlink(SITEDIR.'Cache/~app.php');
	if(is_file(SITEDIR.'Cache/~runtime.php'))@unlink(SITEDIR.'Cache/~runtime.php');
	if(is_file(SITEDIR.'Cache/~allinone.php'))@unlink(SITEDIR.'Cache/~allinone.php');
	$scriptName = !empty ($_SERVER["REQUEST_URI"]) ?  $scriptName = $_SERVER["REQUEST_URI"] :  $scriptName = $_SERVER["PHP_SELF"];
    $rootpath = @preg_replace("/\/Install\/index\.php(.*)$/", "", $scriptName);
	$domain = empty ($_SERVER['HTTP_HOST']) ?  $_SERVER['HTTP_HOST']  : $_SERVER['SERVER_NAME'] ;
	$domain = $domain.$rootpath;
	include_once ("./templates/s5.html");
	@touch('../install.lock');
    exit ();
}

function testwrite( $d )
{
	$tfile = "_test.txt";
	$fp = @fopen( $d."/".$tfile, "w" );
	if ( !$fp )
	{
		return false;
	}
	fclose( $fp );
	$rs = @unlink( $d."/".$tfile );
	if ( $rs )
	{
		return true;
	}
	return false;
}

function  sql_split($sql,$tablepre) {

	if($tablepre != "yourphp_") $sql = str_replace("yourphp_", $tablepre, $sql);
	$sql = preg_replace("/TYPE=(InnoDB|MyISAM|MEMORY)( DEFAULT CHARSET=[^; ]+)?/", "ENGINE=\\1 DEFAULT CHARSET=utf8",$sql);

	if($r_tablepre != $s_tablepre) $sql = str_replace($s_tablepre, $r_tablepre, $sql);
	$sql = str_replace("\r", "\n", $sql);
	$ret = array();
	$num = 0;
	$queriesarray = explode(";\n", trim($sql));
	unset($sql);
	foreach($queriesarray as $query)
	{
		$ret[$num] = '';
		$queries = explode("\n", trim($query));
		$queries = array_filter($queries);
		foreach($queries as $query)
		{
			$str1 = substr($query, 0, 1);
			if($str1 != '#' && $str1 != '-') $ret[$num] .= $query;
		}
		$num++;
	}
	return $ret;
}

function _dir_path($path) {
	$path = str_replace('\\', '/', $path);
	if(substr($path, -1) != '/') $path = $path.'/';
	return $path;
}
?>