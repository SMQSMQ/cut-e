<?php
/**
 *
 * index(入口文件)
 *
 * @package      	YOURPHP
 * @author          liuxun QQ:147613338 <web@yourphp.cn>
 * @copyright     	Copyright (c) 2008-2011  (http://www.yourphp.cn)
 * @license         http://www.yourphp.cn/license.txt
 * @version        	yourphp企业建站系统 v2.0 2011-03-01 yourphp.cn $
 */
if (!is_file('./config.php')) header("location: ./Install");
header("Content-type: text/html; charset=utf-8");
define('RUNTIME_ALLINONE', true);
define('THINK_PATH', './Core');
define('APP_NAME', 'Yourphp');
define('APP_PATH', './Yourphp');
require(THINK_PATH."/Core.php");
App::run();
?>