<?php
return array(
	'LAYOUT_ON'=>false,
    'DEFAULT_MODULE'     => 'Home', //默认模块
	'URL_MODEL'          => '2', //URL模式
    'SESSION_AUTO_START' => true, //是否开启session
	//调试
	'SHOW_PAGE_TRACE' =>true,//开启页面调式
	'SHOW_ERROR_MSG' =>true,
	'DEFAULT_CHARSET'=> 'utf-8',
	'APP_DEBUG' => true, // 开启调试模式
	'TMPL_CACHE_ON'=>false, // 是否开启模板编译缓存
	//'TOKEN_ON'=>false,  // 是否开启令牌验证
	//'SESSION_AUTO_START'=>true,
	'SESSION_NAME' => 'cuteapp',
	//'URL_HTML_SUFFIX'=>'.html',//页面伪静态
	//设置静态页面
	//'HTML_CACHE_ON'=>true,//启用静态缓存
	'HTML_CACHE_RULES'=> array(
		//'News:see'=>array('news{id}'),//单页生成
	),
	//mysql
	//'DB_DEPLOY_TYPE'=> 1,
	'DB_TYPE'       => 'mysql',
	'DB_HOST'       => 'localhost',
	'DB_NAME'       => 'cuteyep_app',
	'DB_USER'       => 'root',
	'DB_PWD'        => '',
	'DB_PORT'       => '3306',
	'DB_PREFIX'     => '',
);
?>