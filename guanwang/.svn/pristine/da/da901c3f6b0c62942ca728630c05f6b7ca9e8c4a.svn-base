-- Yourphp SQL Backup
-- Time:2011-06-01 17:22:43
-- http://www.yourphp.cn

--
-- 表的结构 `yourphp_access`
--
DROP TABLE IF EXISTS `yourphp_access`;
CREATE TABLE `yourphp_access` (
  `role_id` smallint(6) unsigned NOT NULL DEFAULT '0',
  `node_id` smallint(6) unsigned NOT NULL DEFAULT '0',
  `level` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `pid` smallint(6) unsigned NOT NULL DEFAULT '0',
  `model` varchar(50) DEFAULT NULL DEFAULT '',
  KEY `groupId` (`role_id`),
  KEY `nodeId` (`node_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 表的结构 `yourphp_article`
--
DROP TABLE IF EXISTS `yourphp_article`;
CREATE TABLE `yourphp_article` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `catid` smallint(5) unsigned NOT NULL DEFAULT '0' ,
  `userid` int(11) unsigned NOT NULL DEFAULT '0' ,
  `username` varchar(40) NOT NULL DEFAULT '' ,
  `title` varchar(120) NOT NULL DEFAULT '' ,
  `title_style` varchar(40) NOT NULL DEFAULT '' ,
  `keywords` varchar(120) NOT NULL DEFAULT '' ,
  `copyfrom` varchar(40) NOT NULL DEFAULT '' ,
  `fromlink` varchar(80) NOT NULL DEFAULT '0' ,
  `description` mediumtext NOT NULL ,
  `content` text NOT NULL,
  `template` varchar(30) NOT NULL DEFAULT '',
  `thumb` varchar(100) NOT NULL DEFAULT '' ,
  `posid` tinyint(2) unsigned NOT NULL DEFAULT '0' ,
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0' ,
  `recommend` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `readgroup` varchar(255) NOT NULL DEFAULT '',
  `readpoint` int(10) unsigned NOT NULL DEFAULT '0',
  `listorder` int(10) unsigned NOT NULL DEFAULT '0' ,
  `url` varchar(50) NOT NULL DEFAULT '',
  `hits` int(11) unsigned NOT NULL DEFAULT '0' ,
  `createtime` int(11) unsigned NOT NULL DEFAULT '0' ,
  `updatetime` int(11) unsigned NOT NULL DEFAULT '0' ,
  PRIMARY KEY (`id`),
  KEY `status` (`id`,`status`,`listorder`),
  KEY `catid` (`id`,`catid`,`status`),
  KEY `listorder` (`id`,`catid`,`status`,`listorder`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
--
-- 表的结构 `yourphp_attachment`
--
DROP TABLE IF EXISTS `yourphp_attachment`;
CREATE TABLE `yourphp_attachment` (
  `aid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `moduleid` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `catid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `id` int(8) unsigned NOT NULL DEFAULT '0',
  `filename` varchar(50) NOT NULL DEFAULT '',
  `filepath` varchar(80) NOT NULL DEFAULT '',
  `filesize` int(10) unsigned NOT NULL DEFAULT '0',
  `fileext` char(10) NOT NULL DEFAULT '',
  `isimage` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `isthumb` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `createtime` int(10) unsigned NOT NULL DEFAULT '0',
  `uploadip` char(15) NOT NULL DEFAULT '',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
--
-- 表的结构 `yourphp_category`
--
DROP TABLE IF EXISTS `yourphp_category`;
CREATE TABLE `yourphp_category` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `catname` varchar(255) NOT NULL DEFAULT '' ,
  `catdir` varchar(30) NOT NULL DEFAULT '',
  `parentdir` varchar(50) NOT NULL DEFAULT '',
  `parentid` smallint(5) unsigned NOT NULL DEFAULT '0' ,
  `moduleid` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `module` char(24) NOT NULL DEFAULT '',
  `arrparentid` varchar(100) NOT NULL DEFAULT '',
  `arrchildid` varchar(100) NOT NULL DEFAULT '',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0' ,
  `title` varchar(150) NOT NULL DEFAULT '',
  `keywords` varchar(200) NOT NULL DEFAULT '' ,
  `description` varchar(255) NOT NULL DEFAULT '' ,
  `listorder` smallint(5) unsigned NOT NULL DEFAULT '0' ,
  `ishtml` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `ismenu` tinyint(1) unsigned NOT NULL DEFAULT '0' ,
  `hits` int(10) unsigned NOT NULL DEFAULT '0' ,
  `image` varchar(100) NOT NULL DEFAULT '',
  `child` tinyint(1) unsigned NOT NULL DEFAULT '0' ,
  `url` varchar(100) NOT NULL DEFAULT '',
  `template_list` varchar(20) NOT NULL DEFAULT '',
  `template_show` varchar(20) NOT NULL DEFAULT '',
  `pagesize` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `readgroup` varchar(100) NOT NULL DEFAULT '',
  `listtype` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `lang` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `parentid` (`parentid`),
  KEY `listorder` (`listorder`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
--
-- 导出`yourphp_category`表中的数据 `yourphp_category`
--
INSERT INTO `yourphp_category` VALUES ('1','新闻中心','news','','0','2','Article','0','1,2,3,10,16','0','公司新闻11','公司新闻','公司新闻','0','0','1','0','','1','/index.php?m=Article&a=index&id=1','','','0','','1','0');
INSERT INTO `yourphp_category` VALUES ('2','行业新闻','hangye','news/','1','2','Article','0,1','2','0','行业新闻','行业新闻','行业新闻','0','0','1','0','','0','/index.php?m=Article&a=index&id=2','','','0','','0','0');
INSERT INTO `yourphp_category` VALUES ('3','公司新闻','gongsi','news/','1','2','Article','0,1','3','0','公司新闻','公司新闻','公司新闻','0','0','1','0','','0','/index.php?m=Article&a=index&id=3','','','0','','0','0');
INSERT INTO `yourphp_category` VALUES ('4','产品展示','Product','','0','3','Product','0','4,5,6,7,9,13','0','产品展示标题','产品展示关键词','产品展示栏目简介','0','0','1','0','','1','/index.php?m=Product&a=index&id=4','','','0','','0','0');
INSERT INTO `yourphp_category` VALUES ('5','产品分类1','cp1','Product/','4','3','Product','0,4','5','0','产品分类1','产品分类1产品分类1','产品分类1','0','0','1','0','','0','/index.php?m=Product&a=index&id=5','','','0','2,3,4','0','0');
INSERT INTO `yourphp_category` VALUES ('6','产品分类2','cp2','Product/','4','3','Product','0,4','6','0','产品分类2','产品分类2','产品分类2','0','0','1','0','','0','/index.php?m=Product&a=index&id=6','','','0','','0','0');
INSERT INTO `yourphp_category` VALUES ('7','产品分类3','cp3','Product/','4','3','Product','0,4','7','0','产品分类3','产品分类3','产品分类3','0','0','1','0','','0','/index.php?m=Product&a=index&id=7','','','0','','0','0');
INSERT INTO `yourphp_category` VALUES ('8','关于我们','about','','0','1','Page','0','8,11,12','0','','','','99','0','1','0','','1','/index.php?m=Page&a=index&id=8','','','0','','0','0');
INSERT INTO `yourphp_category` VALUES ('10','行业资讯','zixun','news/','1','2','Article','0,1','10','0','','','','0','0','1','0','','0','/index.php?m=Article&a=index&id=10','','','0','','0','0');
INSERT INTO `yourphp_category` VALUES ('13','产品分类5','cp5','Product/cp4/','9','3','Product','0,4,9','13','0','','','','0','0','1','0','','0','/index.php?m=Product&a=index&id=13','','Product_show','0','','0','0');
INSERT INTO `yourphp_category` VALUES ('9','产品分类4','cp4','Product/','4','3','Product','0,4','9,13','0','','','','0','0','1','0','','1','/index.php?m=Product&a=index&id=9','','','0','2,3','0','0');
INSERT INTO `yourphp_category` VALUES ('11','公司简介','info','about/','8','1','Page','0,8','11','0','','','','0','0','1','0','','0','/index.php?m=Page&a=index&id=11','','','0','','0','0');
INSERT INTO `yourphp_category` VALUES ('12','联系我们','contactus','about/','8','1','Page','0,8','12','0','联系我们','联系我们','联系我们','0','0','1','0','','0','/index.php?m=Page&a=index&id=12','','','0','','0','0');
INSERT INTO `yourphp_category` VALUES ('14','图片展示','pics','','0','4','Picture','0','14','0','','','','0','0','1','0','','0','/index.php?m=Picture&a=index&id=14','','','0','','0','0');
INSERT INTO `yourphp_category` VALUES ('17','文档下载','down','','0','5','Download','0','17','0','','','','0','0','1','0','','0','/index.php?m=Download&a=index&id=17','','','0','','0','0');
INSERT INTO `yourphp_category` VALUES ('16','国内新闻','cnnews','news/','1','2','Article','0,1','16','0','','','','0','0','1','0','','0','/index.php?m=Article&a=index&id=16','','','0','','0','0');
INSERT INTO `yourphp_category` VALUES ('18','信息反馈','Feedback','Guestbook/','19','34','Feedback','0,19','18','0','','','','0','0','1','0','','0','/index.php?m=Feedback&a=index&id=18','','','0','','0','0');
INSERT INTO `yourphp_category` VALUES ('19','在线留言','Guestbook','','0','36','Guestbook','0','19,18','0','','','','0','0','1','0','','1','/index.php?m=Guestbook&a=index&id=19','','','5','','0','0');
--
-- 表的结构 `yourphp_config`
--
DROP TABLE IF EXISTS `yourphp_config`;
CREATE TABLE `yourphp_config` (
  `id` smallint(8) unsigned NOT NULL AUTO_INCREMENT,
  `varname` varchar(20) NOT NULL DEFAULT '',
  `info` varchar(100) NOT NULL DEFAULT '',
  `groupid` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `value` text NOT NULL,
  `type` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `varname` (`varname`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;
--
-- 导出`yourphp_config`表中的数据 `yourphp_config`
--
INSERT INTO `yourphp_config` VALUES ('1','site_name','网站名称','2','yourphp企业网站管理系统','2');
INSERT INTO `yourphp_config` VALUES ('2','site_url','网站网址','2','http://demo.yourphp.cn','2');
INSERT INTO `yourphp_config` VALUES ('3','logo','网站LOGO','2','./Public/Images/logo.gif','2');
INSERT INTO `yourphp_config` VALUES ('4','site_company_name','企业名称','2','yourphp企业建站系统','2');
INSERT INTO `yourphp_config` VALUES ('5','site_email','站点邮箱','2','admin@yourphp.cn','2');
INSERT INTO `yourphp_config` VALUES ('6','site_contact_name','联系人','2','liuxun','2');
INSERT INTO `yourphp_config` VALUES ('7','site_tel','联系电话','2','0317-5022625','2');
INSERT INTO `yourphp_config` VALUES ('8','site_mobile','手机号码','2','13292793176','2');
INSERT INTO `yourphp_config` VALUES ('9','site_fax','传真号码','2','0317-5022625','2');
INSERT INTO `yourphp_config` VALUES ('10','site_address','公司地址','2','河北省沧州市肃宁县宅南村','2');
INSERT INTO `yourphp_config` VALUES ('11','qq','客服QQ','2','147613338','2');
INSERT INTO `yourphp_config` VALUES ('12','seo_title','网站标题','3','yourphp企业网站管理系统-企业建站-企业网站-行业网站建设-门户网站建设','2');
INSERT INTO `yourphp_config` VALUES ('13','seo_keywords','关键词','3','php企业网站管理系统,企业建站,企业网站,行业网站建设,门户网站建设','2');
INSERT INTO `yourphp_config` VALUES ('14','seo_description','网站简介','3','yourphp企业建站系统企业建站-企业网站-行业网站建设-门户网站建设seo_keywordsyourphp企业建站系统企业建站-企业网站-行业网站建设-门户网站建设seo_keywordsyourphp企业建站系统企业建站-企业网站-行业网站建设-门户网站建设seo_keywords','2');
INSERT INTO `yourphp_config` VALUES ('15','mail_type','邮件发送模式','4','1','2');
INSERT INTO `yourphp_config` VALUES ('16','mail_server','邮件服务器','4','smtp.yourphp.cn','2');
INSERT INTO `yourphp_config` VALUES ('17','mail_port','邮件发送端口','4','25','2');
INSERT INTO `yourphp_config` VALUES ('18','mail_from','发件人地址','4','admin@yourphp.cn','2');
INSERT INTO `yourphp_config` VALUES ('19','mail_auth','AUTH LOGIN验证','4','1','2');
INSERT INTO `yourphp_config` VALUES ('20','mail_user','验证用户名','4','admin@yourphp.cn','2');
INSERT INTO `yourphp_config` VALUES ('21','mail_password','验证密码','4','','2');
INSERT INTO `yourphp_config` VALUES ('22','attach_maxsize','允许上传附件大小','5','5200000','1');
INSERT INTO `yourphp_config` VALUES ('23','attach_allowext','允许上传附件类型','5','jpg,jpeg,gif,png,doc,docx,rar,zip,swf','2');
INSERT INTO `yourphp_config` VALUES ('24','watermark_enable','是否开启图片水印','5','1','1');
INSERT INTO `yourphp_config` VALUES ('25','watemard_text','水印文字内容','5','YourPHP','2');
INSERT INTO `yourphp_config` VALUES ('26','watemard_text_size','文字大小','5','18','1');
INSERT INTO `yourphp_config` VALUES ('27','watemard_text_color','watemard_text_color','5','#FFFFFF','2');
INSERT INTO `yourphp_config` VALUES ('28','watemard_text_face','字体','5','elephant.ttf','2');
INSERT INTO `yourphp_config` VALUES ('29','watermark_minwidth','图片最小宽度','5','300','1');
INSERT INTO `yourphp_config` VALUES ('30','watermark_minheight','水印最小高度','5','300','1');
INSERT INTO `yourphp_config` VALUES ('31','watermark_img','水印图片名称','5','mark.png','2');
INSERT INTO `yourphp_config` VALUES ('32','watermark_pct','水印透明度','5','80','1');
INSERT INTO `yourphp_config` VALUES ('33','watermark_quality','JPEG 水印质量','5','100','1');
INSERT INTO `yourphp_config` VALUES ('34','watermark_pospadding','水印边距','5','10','1');
INSERT INTO `yourphp_config` VALUES ('35','watermark_pos','水印位置','5','9','1');
INSERT INTO `yourphp_config` VALUES ('36','PAGE_LISTROWS','列表分页数','6','15','1');
INSERT INTO `yourphp_config` VALUES ('37','URL_MODEL','URL访问模式','6','0','1');
INSERT INTO `yourphp_config` VALUES ('38','URL_PATHINFO_DEPR','参数分割符','6','/','2');
INSERT INTO `yourphp_config` VALUES ('39','URL_HTML_SUFFIX','URL伪静态后缀','6','.html','2');
INSERT INTO `yourphp_config` VALUES ('40','TOKEN_ON','令牌验证','6','1','1');
INSERT INTO `yourphp_config` VALUES ('41','TOKEN_NAME','令牌表单字段','6','__hash__','2');
INSERT INTO `yourphp_config` VALUES ('42','TMPL_CACHE_ON','模板编译缓存','6','0','1');
INSERT INTO `yourphp_config` VALUES ('43','TMPL_CACHE_TIME','模板缓存有效期','6','-1','1');
INSERT INTO `yourphp_config` VALUES ('44','HTML_CACHE_ON','静态缓存','6','0','1');
INSERT INTO `yourphp_config` VALUES ('45','HTML_CACHE_TIME','缓存有效期','6','60','1');
INSERT INTO `yourphp_config` VALUES ('46','HTML_READ_TYPE','缓存读取方式','6','0','1');
INSERT INTO `yourphp_config` VALUES ('47','HTML_FILE_SUFFIX','静态文件后缀','6','.html','2');
INSERT INTO `yourphp_config` VALUES ('48','ADMIN_ACCESS','ADMIN_ACCESS','6','2bf6f62c327cbd49dfbd4cea71865a5e','2');
INSERT INTO `yourphp_config` VALUES ('49','DEFAULT_THEME','默认模板','6','Default','2');
INSERT INTO `yourphp_config` VALUES ('50','HOME_ISHTML','首页生成html','6','0','1');
--
-- 表的结构 `yourphp_download`
--
DROP TABLE IF EXISTS `yourphp_download`;
CREATE TABLE `yourphp_download` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `catid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `userid` int(8) unsigned NOT NULL DEFAULT '0',
  `username` varchar(40) NOT NULL DEFAULT '',
  `title` varchar(120) NOT NULL DEFAULT '',
  `title_style` varchar(40) NOT NULL DEFAULT '',
  `thumb` varchar(100) NOT NULL DEFAULT '',
  `keywords` varchar(120) NOT NULL DEFAULT '',
  `description` mediumtext NOT NULL,
  `content` mediumtext NOT NULL,
  `template` varchar(40) NOT NULL DEFAULT '',
  `posid` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `recommend` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `readgroup` varchar(100) NOT NULL DEFAULT '',
  `readpoint` smallint(5) unsigned NOT NULL,
  `listorder` int(10) unsigned NOT NULL DEFAULT '0',
  `hits` int(11) unsigned NOT NULL DEFAULT '0',
  `createtime` int(11) unsigned NOT NULL DEFAULT '0',
  `updatetime` int(11) unsigned NOT NULL DEFAULT '0',
  `url` varchar(60) NOT NULL DEFAULT '',
  `file` varchar(80) NOT NULL DEFAULT '',
  `ext` varchar(10) NOT NULL DEFAULT '',
  `size` varchar(10) NOT NULL DEFAULT '',
  `downs` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `status` (`id`,`status`,`listorder`),
  KEY `catid` (`id`,`catid`,`status`),
  KEY `listorder` (`id`,`catid`,`status`,`listorder`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
--
-- 表的结构 `yourphp_feedback`
--
DROP TABLE IF EXISTS `yourphp_feedback`;
CREATE TABLE `yourphp_feedback` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `listorder` int(10) unsigned NOT NULL DEFAULT '0',
  `username` varchar(20) NOT NULL DEFAULT '',
  `telephone` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `content` mediumtext NOT NULL,
  `ip` varchar(255) NOT NULL DEFAULT '',
  `title` varchar(50) NOT NULL DEFAULT '',
  `createtime` int(11) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `typeid` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
--
-- 表的结构 `yourphp_field`
--
DROP TABLE IF EXISTS `yourphp_field`;
CREATE TABLE `yourphp_field` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `moduleid` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `field` varchar(20) NOT NULL DEFAULT '',
  `name` varchar(30) NOT NULL DEFAULT '',
  `tips` varchar(150) NOT NULL DEFAULT '',
  `required` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `minlength` int(10) unsigned NOT NULL DEFAULT '0',
  `maxlength` int(10) unsigned NOT NULL DEFAULT '0',
  `pattern` varchar(255) NOT NULL DEFAULT '',
  `errormsg` varchar(255) NOT NULL DEFAULT '',
  `class` varchar(20) NOT NULL DEFAULT '',
  `type` varchar(20) NOT NULL DEFAULT '',
  `setup` mediumtext NOT NULL,
  `ispost` tinyint(1) NOT NULL DEFAULT '0',
  `unpostgroup` varchar(60) NOT NULL DEFAULT '',
  `listorder` int(10) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `issystem` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=103 DEFAULT CHARSET=utf8;
--
-- 导出`yourphp_field`表中的数据 `yourphp_field`
--
INSERT INTO `yourphp_field` VALUES ('1','1','title','标题','','1','3','80','','标题必填3-80个字','','title','array (\n  \'thumb\' => \'1\',\n  \'style\' => \'0\',\n  \'size\' => \'\',\n)','1','','0','1','1');
INSERT INTO `yourphp_field` VALUES ('2','1','keywords','关键词','','0','0','0','','','','text','array (\n  \'size\' => \'55\',\n  \'default\' => \'\',\n  \'ispassword\' => \'0\',\n)','1','','0','1','1');
INSERT INTO `yourphp_field` VALUES ('3','1','description','SEO简介','','0','0','0','','','','textarea','array (\n  \'rows\' => \'4\',\n  \'cols\' => \'55\',\n  \'default\' => \'\',\n)','1','','0','1','1');
INSERT INTO `yourphp_field` VALUES ('4','1','content','内容','','0','0','0','','','','editor','array (\n  \'toolbar\' => \'full\',\n  \'default\' => \'\',\n  \'height\' => \'\',\n  \'showpage\' => \'1\',\n  \'enablekeylink\' => \'0\',\n  \'replacenum\' => \'\',\n  \'enablesaveimage\' => \'0\',\n  \'flashupload\' => \'1\',\n  \'alowuploadexts\' => \'*.jpg;*.jpeg;*.gif;*.doc;*.rar;*.zip;*.xls\',\n)','1','','0','1','1');
INSERT INTO `yourphp_field` VALUES ('5','2','catid','栏目','','1','1','6','digits','必须选择一个栏目','','catid','','1','','0','1','1');
INSERT INTO `yourphp_field` VALUES ('6','2','title','标题','','1','0','0','','标题必须为1-80个字符','','title','array (\n  \'thumb\' => \'1\',\n  \'style\' => \'1\',\n  \'size\' => \'55\',\n)','1','','0','1','1');
INSERT INTO `yourphp_field` VALUES ('7','2','keywords','关键词','','0','0','0','','','','text','array (\n  \'size\' => \'55\',\n  \'default\' => \'\',\n  \'ispassword\' => \'0\',\n)','1','','0','1','1');
INSERT INTO `yourphp_field` VALUES ('8','2','description','SEO简介','','0','0','0','','','','textarea','array (\n  \'rows\' => \'4\',\n  \'cols\' => \'55\',\n  \'default\' => \'\',\n)','1','','0','1','1');
INSERT INTO `yourphp_field` VALUES ('9','2','content','内容','','0','0','0','','','','editor','array (\n  \'toolbar\' => \'full\',\n  \'default\' => \'\',\n  \'height\' => \'\',\n  \'show_add_description\' => \'1\',\n  \'show_auto_thumb\' => \'1\',\n  \'showpage\' => \'1\',\n  \'enablekeylink\' => \'0\',\n  \'replacenum\' => \'\',\n  \'enablesaveimage\' => \'0\',\n  \'flashupload\' => \'1\',\n  \'alowuploadexts\' => \'\',\n)','1','','0','1','1');
INSERT INTO `yourphp_field` VALUES ('10','2','createtime','发布时间','','1','0','0','','','','datetime','','1','','0','1','1');
INSERT INTO `yourphp_field` VALUES ('11','2','copyfrom','来源','','0','0','0','','','','text','array (\n  \'size\' => \'20\',\n  \'default\' => \'\',\n  \'ispassword\' => \'0\',\n)','1','','0','1','1');
INSERT INTO `yourphp_field` VALUES ('12','2','fromlink','来源网址','','0','0','0','','','','text','array (\n  \'size\' => \'20\',\n  \'default\' => \'\',\n  \'ispassword\' => \'0\',\n)','1','','0','1','1');
INSERT INTO `yourphp_field` VALUES ('13','2','readgroup','访问权限','','0','0','0','','','','groupid','array (\n  \'inputtype\' => \'checkbox\',\n  \'fieldtype\' => \'varchar\',\n  \'numbertype\' => \'1\',\n  \'labelwidth\' => \'85\',\n  \'default\' => \'\',\n)','1','','0','1','1');
INSERT INTO `yourphp_field` VALUES ('14','2','posid','推荐位','','0','0','0','','','','posid','','1','','0','1','1');
INSERT INTO `yourphp_field` VALUES ('15','2','template','模板','','0','0','0','','','','template','','1','','0','1','1');
INSERT INTO `yourphp_field` VALUES ('16','2','status','状态','','0','0','0','','','','radio','array (\n  \'options\' => \'发布|1\r\n定时发布|0\',\n  \'fieldtype\' => \'tinyint\',\n  \'labelwidth\' => \'75\',\n  \'default\' => \'1\',\n)','1','','0','1','1');
INSERT INTO `yourphp_field` VALUES ('17','3','catid','栏目','','1','1','6','','必须选择一个栏目','','catid','','1','','0','1','1');
INSERT INTO `yourphp_field` VALUES ('18','3','title','标题','','1','1','80','','标题必须为1-80个字符','','title','array (\n  \'thumb\' => \'1\',\n  \'style\' => \'1\',\n  \'size\' => \'55\',\n)','1','','0','1','1');
INSERT INTO `yourphp_field` VALUES ('19','3','keywords','关键词','','0','0','80','','','','text','array (\n  \'size\' => \'55\',\n  \'default\' => \'\',\n  \'ispassword\' => \'0\',\n  \'fieldtype\' => \'varchar\',\n)','1','','0','1','1');
INSERT INTO `yourphp_field` VALUES ('20','3','description','SEO简介','','0','0','0','','','','textarea','array (\n  \'fieldtype\' => \'mediumtext\',\n  \'rows\' => \'4\',\n  \'cols\' => \'55\',\n  \'default\' => \'\',\n)','1','','0','1','1');
INSERT INTO `yourphp_field` VALUES ('21','3','content','内容','','0','0','0','','','','editor','array (\n  \'toolbar\' => \'full\',\n  \'default\' => \'\',\n  \'height\' => \'\',\n  \'showpage\' => \'1\',\n  \'enablekeylink\' => \'0\',\n  \'replacenum\' => \'\',\n  \'enablesaveimage\' => \'0\',\n  \'flashupload\' => \'1\',\n  \'alowuploadexts\' => \'\',\n)','1','','10','1','1');
INSERT INTO `yourphp_field` VALUES ('22','3','createtime','发布时间','','1','0','0','','','','datetime','','1','','93','1','1');
INSERT INTO `yourphp_field` VALUES ('31','2','recommend','允许评论','','0','0','1','','','','radio','array (\n  \'options\' => \'允许评论|1\r\n不允许评论|0\',\n  \'fieldtype\' => \'tinyint\',\n  \'numbertype\' => \'1\',\n  \'labelwidth\' => \'\',\n  \'default\' => \'1\',\n)','1','','0','0','0');
INSERT INTO `yourphp_field` VALUES ('30','3','xinghao','型号','','0','0','30','','','','text','array (\n  \'size\' => \'20\',\n  \'default\' => \'\',\n  \'ispassword\' => \'0\',\n  \'fieldtype\' => \'varchar\',\n)','1','','0','1','1');
INSERT INTO `yourphp_field` VALUES ('25','3','readgroup','访问权限','','0','0','0','','','','groupid','array (\n  \'inputtype\' => \'checkbox\',\n  \'fieldtype\' => \'tinyint\',\n  \'labelwidth\' => \'85\',\n  \'default\' => \'\',\n)','1','','96','0','1');
INSERT INTO `yourphp_field` VALUES ('26','3','posid','推荐位','','0','0','0','','','','posid','','1','','97','1','1');
INSERT INTO `yourphp_field` VALUES ('27','3','template','模板','','0','0','0','','','','template','','1','','98','1','1');
INSERT INTO `yourphp_field` VALUES ('28','3','status','状态','','0','0','0','','','','radio','array (\n  \'options\' => \'发布|1\r\n定时发布|0\',\n  \'fieldtype\' => \'tinyint\',\n  \'numbertype\' => \'1\',\n  \'labelwidth\' => \'75\',\n  \'default\' => \'1\',\n)','1','','99','1','1');
INSERT INTO `yourphp_field` VALUES ('29','3','price','价格','','0','0','0','','','','number','array (\n  \'numbertype\' => \'1\',\n  \'decimaldigits\' => \'2\',\n  \'default\' => \'0\',\n)','1','','0','1','1');
INSERT INTO `yourphp_field` VALUES ('34','3','recommend','允许评论','','0','0','1','','','','radio','array (\n  \'options\' => \'允许评论|1\r\n不允许评论|0\',\n  \'fieldtype\' => \'tinyint\',\n  \'numbertype\' => \'1\',\n  \'labelwidth\' => \'\',\n  \'default\' => \'\',\n)','1','','0','0','0');
INSERT INTO `yourphp_field` VALUES ('32','2','readpoint','阅读收费','','0','0','3','','','','number','array (\n  \'size\' => \'5\',\n  \'numbertype\' => \'1\',\n  \'decimaldigits\' => \'0\',\n  \'default\' => \'\',\n)','1','','0','0','0');
INSERT INTO `yourphp_field` VALUES ('33','2','hits','点击次数','','0','0','8','','','','number','array (\n  \'size\' => \'5\',\n  \'numbertype\' => \'1\',\n  \'decimaldigits\' => \'0\',\n  \'default\' => \'\',\n)','1','','0','0','0');
INSERT INTO `yourphp_field` VALUES ('35','3','readpoint','阅读收费','','0','0','5','','','','number','array (\n  \'size\' => \'5\',\n  \'numbertype\' => \'1\',\n  \'decimaldigits\' => \'0\',\n  \'default\' => \'0\',\n)','1','','0','0','0');
INSERT INTO `yourphp_field` VALUES ('36','3','hits','点击次数','','0','0','8','','','','number','array (\n  \'size\' => \'10\',\n  \'numbertype\' => \'1\',\n  \'decimaldigits\' => \'0\',\n  \'default\' => \'0\',\n)','1','','0','0','0');
INSERT INTO `yourphp_field` VALUES ('37','4','catid','栏目','','1','1','6','','必须选择一个栏目','','catid','','1','','0','1','1');
INSERT INTO `yourphp_field` VALUES ('38','4','title','标题','','1','1','80','','标题必须为1-80个字符','','title','array (\n  \'thumb\' => \'1\',\n  \'style\' => \'1\',\n  \'size\' => \'55\',\n)','1','','0','1','1');
INSERT INTO `yourphp_field` VALUES ('39','4','keywords','关键词','','0','0','80','','','','text','array (\n  \'size\' => \'55\',\n  \'default\' => \'\',\n  \'ispassword\' => \'0\',\n  \'fieldtype\' => \'varchar\',\n)','1','','0','1','1');
INSERT INTO `yourphp_field` VALUES ('40','4','description','SEO简介','','0','0','0','','','','textarea','array (\n  \'fieldtype\' => \'mediumtext\',\n  \'rows\' => \'4\',\n  \'cols\' => \'55\',\n  \'default\' => \'\',\n)','1','','0','1','1');
INSERT INTO `yourphp_field` VALUES ('41','4','content','内容','','0','0','0','','','','editor','array (\n  \'toolbar\' => \'full\',\n  \'default\' => \'\',\n  \'height\' => \'\',\n  \'showpage\' => \'1\',\n  \'enablekeylink\' => \'0\',\n  \'replacenum\' => \'\',\n  \'enablesaveimage\' => \'0\',\n  \'flashupload\' => \'1\',\n  \'alowuploadexts\' => \'\',\n)','1','','10','1','1');
INSERT INTO `yourphp_field` VALUES ('42','4','createtime','发布时间','','1','0','0','','','','datetime','','1','','93','1','1');
INSERT INTO `yourphp_field` VALUES ('43','4','recommend','允许评论','','0','0','1','','','','radio','array (\n  \'options\' => \'允许评论|1\r\n不允许评论|0\',\n  \'fieldtype\' => \'tinyint\',\n  \'numbertype\' => \'1\',\n  \'labelwidth\' => \'\',\n  \'default\' => \'\',\n)','1','','0','0','0');
INSERT INTO `yourphp_field` VALUES ('44','4','readpoint','阅读收费','','0','0','5','','','','number','array (\n  \'size\' => \'5\',\n  \'numbertype\' => \'1\',\n  \'decimaldigits\' => \'0\',\n  \'default\' => \'0\',\n)','1','','0','0','0');
INSERT INTO `yourphp_field` VALUES ('45','4','hits','点击次数','','0','0','8','','','','number','array (\n  \'size\' => \'10\',\n  \'numbertype\' => \'1\',\n  \'decimaldigits\' => \'0\',\n  \'default\' => \'0\',\n)','1','','0','0','0');
INSERT INTO `yourphp_field` VALUES ('46','4','readgroup','访问权限','','0','0','0','','','','groupid','array (\n  \'inputtype\' => \'checkbox\',\n  \'fieldtype\' => \'tinyint\',\n  \'labelwidth\' => \'85\',\n  \'default\' => \'\',\n)','1','','96','0','1');
INSERT INTO `yourphp_field` VALUES ('47','4','posid','推荐位','','0','0','0','','','','posid','','1','','97','1','1');
INSERT INTO `yourphp_field` VALUES ('48','4','template','模板','','0','0','0','','','','template','','1','','98','1','1');
INSERT INTO `yourphp_field` VALUES ('49','4','status','状态','','0','0','0','','','','radio','array (\n  \'options\' => \'发布|1\r\n定时发布|0\',\n  \'fieldtype\' => \'tinyint\',\n  \'numbertype\' => \'1\',\n  \'labelwidth\' => \'75\',\n  \'default\' => \'1\',\n)','1','','99','1','1');
INSERT INTO `yourphp_field` VALUES ('50','5','catid','栏目','','1','1','6','','必须选择一个栏目','','catid','','1','','0','1','1');
INSERT INTO `yourphp_field` VALUES ('51','5','title','标题','','1','1','80','','标题必须为1-80个字符','','title','array (\n  \'thumb\' => \'1\',\n  \'style\' => \'1\',\n  \'size\' => \'55\',\n)','1','','0','1','1');
INSERT INTO `yourphp_field` VALUES ('52','5','keywords','关键词','','0','0','80','','','','text','array (\n  \'size\' => \'55\',\n  \'default\' => \'\',\n  \'ispassword\' => \'0\',\n  \'fieldtype\' => \'varchar\',\n)','1','','0','1','1');
INSERT INTO `yourphp_field` VALUES ('53','5','description','SEO简介','','0','0','0','','','','textarea','array (\n  \'fieldtype\' => \'mediumtext\',\n  \'rows\' => \'4\',\n  \'cols\' => \'55\',\n  \'default\' => \'\',\n)','1','','0','1','1');
INSERT INTO `yourphp_field` VALUES ('54','5','content','内容','','0','0','0','','','','editor','array (\n  \'toolbar\' => \'full\',\n  \'default\' => \'\',\n  \'height\' => \'\',\n  \'showpage\' => \'1\',\n  \'enablekeylink\' => \'0\',\n  \'replacenum\' => \'\',\n  \'enablesaveimage\' => \'0\',\n  \'flashupload\' => \'1\',\n  \'alowuploadexts\' => \'\',\n)','1','','10','1','1');
INSERT INTO `yourphp_field` VALUES ('55','5','createtime','发布时间','','1','0','0','','','','datetime','','1','','93','1','1');
INSERT INTO `yourphp_field` VALUES ('56','5','recommend','允许评论','','0','0','1','','','','radio','array (\n  \'options\' => \'允许评论|1\r\n不允许评论|0\',\n  \'fieldtype\' => \'tinyint\',\n  \'numbertype\' => \'1\',\n  \'labelwidth\' => \'\',\n  \'default\' => \'\',\n)','1','','0','0','0');
INSERT INTO `yourphp_field` VALUES ('57','5','readpoint','阅读收费','','0','0','5','','','','number','array (\n  \'size\' => \'5\',\n  \'numbertype\' => \'1\',\n  \'decimaldigits\' => \'0\',\n  \'default\' => \'0\',\n)','1','','0','0','0');
INSERT INTO `yourphp_field` VALUES ('58','5','hits','点击次数','','0','0','8','','','','number','array (\n  \'size\' => \'10\',\n  \'numbertype\' => \'1\',\n  \'decimaldigits\' => \'0\',\n  \'default\' => \'0\',\n)','1','','0','0','0');
INSERT INTO `yourphp_field` VALUES ('59','5','readgroup','访问权限','','0','0','0','','','','groupid','array (\n  \'inputtype\' => \'checkbox\',\n  \'fieldtype\' => \'tinyint\',\n  \'labelwidth\' => \'85\',\n  \'default\' => \'\',\n)','1','','96','0','1');
INSERT INTO `yourphp_field` VALUES ('60','5','posid','推荐位','','0','0','0','','','','posid','','1','','97','1','1');
INSERT INTO `yourphp_field` VALUES ('61','5','template','模板','','0','0','0','','','','template','','1','','98','1','1');
INSERT INTO `yourphp_field` VALUES ('62','5','status','状态','','0','0','0','','','','radio','array (\n  \'options\' => \'发布|1\r\n定时发布|0\',\n  \'fieldtype\' => \'tinyint\',\n  \'numbertype\' => \'1\',\n  \'labelwidth\' => \'75\',\n  \'default\' => \'1\',\n)','1','','99','1','1');
INSERT INTO `yourphp_field` VALUES ('63','3','pics','图片','','0','0','0','','','','images','array (\n  \'size\' => \'55\',\n  \'default\' => \'\',\n  \'upload_maxnum\' => \'10\',\n  \'upload_maxsize\' => \'2\',\n  \'upload_allowext\' => \'*.jpeg;*.jpg;*.gif\',\n  \'watermark\' => \'0\',\n  \'more\' => \'1\',\n)','1','','0','1','0');
INSERT INTO `yourphp_field` VALUES ('64','4','pics','图组','','0','0','0','','','','images','array (\n  \'size\' => \'55\',\n  \'default\' => \'\',\n  \'upload_maxnum\' => \'20\',\n  \'upload_maxsize\' => \'2\',\n  \'upload_allowext\' => \'*.jpeg;*.jpg;*.png;*.gif\',\n  \'watermark\' => \'0\',\n  \'more\' => \'1\',\n)','1','','0','1','0');
INSERT INTO `yourphp_field` VALUES ('65','5','file','上传文件','','0','0','0','','','','file','array (\n  \'size\' => \'55\',\n  \'default\' => \'\',\n  \'upload_maxsize\' => \'2\',\n  \'upload_allowext\' => \'*.zip;*.rar;*.doc;*.ppt\',\n  \'more\' => \'1\',\n)','1','','0','1','0');
INSERT INTO `yourphp_field` VALUES ('66','5','ext','文档类型','','0','0','10','','','','text','array (\n  \'size\' => \'10\',\n  \'default\' => \'\',\n  \'ispassword\' => \'0\',\n  \'fieldtype\' => \'varchar\',\n)','1','','0','1','0');
INSERT INTO `yourphp_field` VALUES ('67','5','size','文档大小','','0','0','10','','','','text','array (\n  \'size\' => \'10\',\n  \'default\' => \'\',\n  \'ispassword\' => \'0\',\n  \'fieldtype\' => \'varchar\',\n)','1','','0','1','0');
INSERT INTO `yourphp_field` VALUES ('68','5','downs','下载次数','','0','0','0','','','','number','array (\n  \'size\' => \'10\',\n  \'numbertype\' => \'1\',\n  \'decimaldigits\' => \'0\',\n  \'default\' => \'\',\n)','1','','0','0','0');
INSERT INTO `yourphp_field` VALUES ('69','6','username','姓名','','1','2','20','cn_username','','','text','array (\n  \'size\' => \'10\',\n  \'default\' => \'\',\n  \'ispassword\' => \'0\',\n  \'fieldtype\' => \'varchar\',\n)','1','','2','1','0');
INSERT INTO `yourphp_field` VALUES ('70','6','telephone','电话','','0','0','0','tel','','','text','array (\n  \'size\' => \'20\',\n  \'default\' => \'\',\n  \'ispassword\' => \'0\',\n  \'fieldtype\' => \'varchar\',\n)','1','','4','1','0');
INSERT INTO `yourphp_field` VALUES ('71','6','email','邮箱','','1','0','50','email','','','text','array (\n  \'size\' => \'20\',\n  \'default\' => \'\',\n  \'ispassword\' => \'0\',\n  \'fieldtype\' => \'varchar\',\n)','1','','2','1','0');
INSERT INTO `yourphp_field` VALUES ('72','6','content','内容','','1','4','200','','','','textarea','array (\n  \'fieldtype\' => \'mediumtext\',\n  \'rows\' => \'5\',\n  \'cols\' => \'60\',\n  \'default\' => \'\',\n)','1','','5','1','0');
INSERT INTO `yourphp_field` VALUES ('81','7','status','状态','','0','0','1','','','','radio','array (\n  \'options\' => \'已审核|1\r\n未审核|0\',\n  \'fieldtype\' => \'tinyint\',\n  \'numbertype\' => \'1\',\n  \'labelwidth\' => \'75\',\n  \'default\' => \'1\',\n)','1','','99','1','1');
INSERT INTO `yourphp_field` VALUES ('73','6','ip','提交IP','','0','0','0','','','','text','array (\n  \'size\' => \'20\',\n  \'default\' => \'\',\n  \'ispassword\' => \'0\',\n  \'fieldtype\' => \'varchar\',\n)','0','','6','1','0');
INSERT INTO `yourphp_field` VALUES ('74','6','title','标题','','1','4','50','','','','text','array (\n  \'size\' => \'40\',\n  \'default\' => \'\',\n  \'ispassword\' => \'0\',\n  \'fieldtype\' => \'varchar\',\n)','1','3,4','1','1','0');
INSERT INTO `yourphp_field` VALUES ('80','35','createtime','发布时间','','1','0','0','','','','datetime','','1','','93','1','1');
INSERT INTO `yourphp_field` VALUES ('76','6','createtime','提交时间','','0','0','0','','','','datetime','','0','','98','1','0');
INSERT INTO `yourphp_field` VALUES ('79','6','typeid','反馈类别','','0','0','0','','','','typeid','array (\n  \'inputtype\' => \'select\',\n  \'fieldtype\' => \'smallint\',\n  \'numbertype\' => \'1\',\n  \'labelwidth\' => \'\',\n  \'default\' => \'4\',\n)','1','','0','1','0');
INSERT INTO `yourphp_field` VALUES ('78','6','status','审核状态','','0','0','1','','','','radio','array (\n  \'options\' => \'己审核|1\r\n未审核|0\',\n  \'fieldtype\' => \'tinyint\',\n  \'numbertype\' => \'1\',\n  \'labelwidth\' => \'\',\n  \'default\' => \'0\',\n)','0','','99','1','0');
INSERT INTO `yourphp_field` VALUES ('82','7','name','网站名称','','1','2','50','','','','text','array (\n  \'size\' => \'40\',\n  \'default\' => \'\',\n  \'ispassword\' => \'0\',\n  \'fieldtype\' => \'varchar\',\n)','1','','1','1','0');
INSERT INTO `yourphp_field` VALUES ('83','7','logo','网站LOGO','','0','0','0','','','','image','array (\n  \'size\' => \'50\',\n  \'default\' => \'\',\n  \'upload_maxsize\' => \'\',\n  \'upload_allowext\' => \'jpg,jpeg,gif,png\',\n  \'watermark\' => \'0\',\n  \'more\' => \'0\',\n)','1','','2','1','0');
INSERT INTO `yourphp_field` VALUES ('84','7','siteurl','网站地址','','1','10','150','url','','','text','array (\n  \'size\' => \'50\',\n  \'default\' => \'\',\n  \'ispassword\' => \'0\',\n  \'fieldtype\' => \'varchar\',\n)','1','','3','1','0');
INSERT INTO `yourphp_field` VALUES ('85','7','typeid','友情链接分类','','0','0','0','','','','typeid','array (\n  \'inputtype\' => \'select\',\n  \'fieldtype\' => \'smallint\',\n  \'numbertype\' => \'1\',\n  \'labelwidth\' => \'\',\n  \'default\' => \'1\',\n)','1','','0','1','0');
INSERT INTO `yourphp_field` VALUES ('86','7','linktype','链接类型','','0','0','1','','','','radio','array (\n  \'options\' => \'文字链接|1\r\nLOGO链接|2\',\n  \'fieldtype\' => \'tinyint\',\n  \'numbertype\' => \'1\',\n  \'labelwidth\' => \'\',\n  \'default\' => \'1\',\n)','1','','0','1','0');
INSERT INTO `yourphp_field` VALUES ('87','7','siteinfo','站点简介','','0','0','0','','','','textarea','array (\n  \'fieldtype\' => \'mediumtext\',\n  \'rows\' => \'3\',\n  \'cols\' => \'60\',\n  \'default\' => \'\',\n)','1','','4','1','0');
INSERT INTO `yourphp_field` VALUES ('88','8','createtime','提交时间','','1','0','0','','','','datetime','','0','','93','1','1');
INSERT INTO `yourphp_field` VALUES ('89','8','status','状态','','0','0','0','','','','radio','array (\n  \'options\' => \'已审核|1\r\n未审核|0\',\n  \'fieldtype\' => \'tinyint\',\n  \'numbertype\' => \'1\',\n  \'labelwidth\' => \'75\',\n  \'default\' => \'0\',\n)','0','','99','1','1');
INSERT INTO `yourphp_field` VALUES ('90','8','title','标题','','1','2','50','','','','text','array (\n  \'size\' => \'40\',\n  \'default\' => \'\',\n  \'ispassword\' => \'0\',\n  \'fieldtype\' => \'varchar\',\n)','1','','0','1','0');
INSERT INTO `yourphp_field` VALUES ('91','8','username','姓名','','1','2','20','','','','text','array (\n  \'size\' => \'10\',\n  \'default\' => \'\',\n  \'ispassword\' => \'0\',\n  \'fieldtype\' => \'varchar\',\n)','1','','0','1','0');
INSERT INTO `yourphp_field` VALUES ('92','8','telephone','电话','','0','0','0','tel','','','text','array (\n  \'size\' => \'20\',\n  \'default\' => \'\',\n  \'ispassword\' => \'0\',\n  \'fieldtype\' => \'varchar\',\n)','1','','1','1','0');
INSERT INTO `yourphp_field` VALUES ('93','8','email','邮箱','','1','0','40','email','','','text','array (\n  \'size\' => \'20\',\n  \'default\' => \'\',\n  \'ispassword\' => \'0\',\n  \'fieldtype\' => \'varchar\',\n)','1','','0','1','0');
INSERT INTO `yourphp_field` VALUES ('94','8','content','内容','','1','2','200','','','','textarea','array (\n  \'fieldtype\' => \'mediumtext\',\n  \'rows\' => \'4\',\n  \'cols\' => \'50\',\n  \'default\' => \'\',\n)','1','','10','1','0');
INSERT INTO `yourphp_field` VALUES ('95','8','reply_content','回复','','0','0','0','','','','textarea','array (\n  \'fieldtype\' => \'mediumtext\',\n  \'rows\' => \'4\',\n  \'cols\' => \'50\',\n  \'default\' => \'\',\n)','0','','10','1','0');
INSERT INTO `yourphp_field` VALUES ('96','8','ip','IP','','0','0','15','','','','text','array (\n  \'size\' => \'15\',\n  \'default\' => \'\',\n  \'ispassword\' => \'0\',\n  \'fieldtype\' => \'varchar\',\n)','0','','90','1','0');
INSERT INTO `yourphp_field` VALUES ('97','9','createtime','发布时间','','1','0','0','','','','datetime','','0','','93','1','1');
INSERT INTO `yourphp_field` VALUES ('98','9','status','状态','','0','0','0','','','','radio','array (\n  \'options\' => \'已审核|1\r\n未审核|0\',\n  \'fieldtype\' => \'tinyint\',\n  \'numbertype\' => \'1\',\n  \'labelwidth\' => \'75\',\n  \'default\' => \'1\',\n)','0','','99','1','1');
INSERT INTO `yourphp_field` VALUES ('99','9','name','客服名称','','0','2','20','','','','text','array (\n  \'size\' => \'20\',\n  \'default\' => \'\',\n  \'ispassword\' => \'0\',\n  \'fieldtype\' => \'varchar\',\n)','0','','0','1','0');
INSERT INTO `yourphp_field` VALUES ('100','9','type','客服类型','','1','1','2','','','','select','array (\n  \'options\' => \'QQ|1\r\nMSN|2\r\n旺旺|3\r\n电话|4\r\n代码|5\',\n  \'multiple\' => \'0\',\n  \'fieldtype\' => \'tinyint\',\n  \'numbertype\' => \'1\',\n  \'size\' => \'\',\n  \'default\' => \'\',\n)','0','','0','1','0');
INSERT INTO `yourphp_field` VALUES ('101','9','code','ID或代码','','0','2','150','','','','text','array (\n  \'size\' => \'50\',\n  \'default\' => \'\',\n  \'ispassword\' => \'0\',\n  \'fieldtype\' => \'varchar\',\n)','0','','10','1','0');
INSERT INTO `yourphp_field` VALUES ('102','9','skin','风格样式','','0','0','3','','','','select','array (\n  \'options\' => \'无风格图标|0\r\nQQ风格1|q1\r\nQQ风格2|q2\r\nQQ风格3|q3\r\nQQ风格4|q4\r\nQQ风格5|q5\r\nQQ风格6|q6\r\nQQ风格7|q7\r\nMSN小图|m1\r\nMSN大图1|m2\r\nMSN大图2|m3\r\nMSN大图3|m4\r\n旺旺小图|w2\r\n旺旺大图|w1\',\n  \'multiple\' => \'0\',\n  \'fieldtype\' => \'varchar\',\n  \'numbertype\' => \'1\',\n  \'size\' => \'\',\n  \'default\' => \'\',\n)','0','','0','1','0');
--
-- 表的结构 `yourphp_guestbook`
--
DROP TABLE IF EXISTS `yourphp_guestbook`;
CREATE TABLE `yourphp_guestbook` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL DEFAULT '',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `listorder` int(10) unsigned NOT NULL DEFAULT '0',
  `createtime` int(11) unsigned NOT NULL DEFAULT '0',
  `username` varchar(20) NOT NULL DEFAULT '',
  `telephone` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(40) NOT NULL DEFAULT '',
  `content` mediumtext NOT NULL,
  `reply_content` mediumtext NOT NULL,
  `ip` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
--
-- 表的结构 `yourphp_kefu`
--
DROP TABLE IF EXISTS `yourphp_kefu`;
CREATE TABLE `yourphp_kefu` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `listorder` int(10) unsigned NOT NULL DEFAULT '0',
  `createtime` int(11) unsigned NOT NULL DEFAULT '0',
  `name` varchar(20) NOT NULL DEFAULT '',
  `type` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `code` varchar(150) NOT NULL DEFAULT '',
  `skin` varchar(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
--
-- 导出`yourphp_kefu`表中的数据 `yourphp_kefu`
--
INSERT INTO `yourphp_kefu` VALUES ('1','1','4','1306807701','咨询电话','4','0317-5022625','0');
INSERT INTO `yourphp_kefu` VALUES ('2','1','3','1306808546','技术咨询','1','147613338','q3');
INSERT INTO `yourphp_kefu` VALUES ('3','1','3','1306808886','QQ客服','1','147613338','q3');
INSERT INTO `yourphp_kefu` VALUES ('4','1','2','1306811439','MSN客服','2','snliuxun@msn.cn','m2');
INSERT INTO `yourphp_kefu` VALUES ('5','1','0','1306830001','旺旺客服','3','snliuxun','w1');
--
-- 表的结构 `yourphp_link`
--
DROP TABLE IF EXISTS `yourphp_link`;
CREATE TABLE `yourphp_link` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `listorder` int(10) unsigned NOT NULL DEFAULT '0',
  `createtime` int(11) unsigned NOT NULL DEFAULT '0',
  `name` varchar(50) NOT NULL DEFAULT '',
  `logo` varchar(80) NOT NULL DEFAULT '',
  `siteurl` varchar(150) NOT NULL DEFAULT '',
  `typeid` smallint(5) unsigned NOT NULL,
  `linktype` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `siteinfo` mediumtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
--
-- 导出`yourphp_link`表中的数据 `yourphp_link`
--
INSERT INTO `yourphp_link` VALUES ('1','1','0','1306547518','Yourphp企业网站管理系统','http://demo.yourphp.cn/Public/Images/logo.gif','http://www.yourphp.cn','2','2','php企业网站管理系统');
INSERT INTO `yourphp_link` VALUES ('2','1','0','1306554684','企业网站管理系统','','http://www.yourphp.cn','2','1','');
--
-- 表的结构 `yourphp_menu`
--
DROP TABLE IF EXISTS `yourphp_menu`;
CREATE TABLE `yourphp_menu` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `parentid` smallint(6) unsigned NOT NULL  DEFAULT '0',
  `model` char(20) NOT NULL  DEFAULT '',
  `action` char(20) NOT NULL  DEFAULT '',
  `data` char(50) NOT NULL  DEFAULT '',
  `type` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `group_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `name` varchar(50) NOT NULL  DEFAULT '',
  `remark` varchar(255) NOT NULL  DEFAULT '',
  `listorder` smallint(6) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `status` (`status`),
  KEY `parentid` (`parentid`),
  KEY `model` (`model`)
) ENGINE=MyISAM AUTO_INCREMENT=59 DEFAULT CHARSET=utf8;
--
-- 导出`yourphp_menu`表中的数据 `yourphp_menu`
--
INSERT INTO `yourphp_menu` VALUES ('1','0','Main','main','menuid=42','1','1','0','后台首页','','0');
INSERT INTO `yourphp_menu` VALUES ('2','0','Config','','menuid=50','1','1','0','系统设置','系统设置','1');
INSERT INTO `yourphp_menu` VALUES ('3','0','Category','','menuid=17','1','1','0','内容管理','模型管理','2');
INSERT INTO `yourphp_menu` VALUES ('4','0','Module','index','type=2&menuid=51','1','1','0','模块管理','','4');
INSERT INTO `yourphp_menu` VALUES ('5','0','User','','menuid=9','1','1','0','会员管理','','90');
INSERT INTO `yourphp_menu` VALUES ('6','0','Createhtml','','menuid=33','1','1','0','网站更新','','99');
INSERT INTO `yourphp_menu` VALUES ('7','0','Template','index','menuid=60','1','1','0','模板管理','','99');
INSERT INTO `yourphp_menu` VALUES ('39','2','Menu','','','1','1','0','后台管理菜单','后台管理菜单','11');
INSERT INTO `yourphp_menu` VALUES ('15','39','Menu','add','','1','1','0','添加菜单','','0');
INSERT INTO `yourphp_menu` VALUES ('50','2','Config','','','1','1','0','站点配置','','0');
INSERT INTO `yourphp_menu` VALUES ('22','3','Product','','','1','1','0','产品模型','','3');
INSERT INTO `yourphp_menu` VALUES ('8','50','Config','sys','','1','1','0','系统参数','','0');
INSERT INTO `yourphp_menu` VALUES ('32','50','Config','seo','','1','1','0','SEO设置','','0');
INSERT INTO `yourphp_menu` VALUES ('59','50','Config','add','','1','1','0','添加系统变量','','99');
INSERT INTO `yourphp_menu` VALUES ('9','5','User','','','1','1','0','会员资料管理','','0');
INSERT INTO `yourphp_menu` VALUES ('10','9','User','add','','1','1','0','添加会员','','0');
INSERT INTO `yourphp_menu` VALUES ('11','5','Role','','','1','1','0','会员组管理','','0');
INSERT INTO `yourphp_menu` VALUES ('12','11','Role','add','','1','1','0','添加会员组','','0');
INSERT INTO `yourphp_menu` VALUES ('13','5','Node','','','1','1','0','权限节点管理','','0');
INSERT INTO `yourphp_menu` VALUES ('14','13','Node','add','','1','1','0','添加权限节点','','0');
INSERT INTO `yourphp_menu` VALUES ('16','3','Module','','','1','1','0','模型管理','','99');
INSERT INTO `yourphp_menu` VALUES ('17','3','Category','','','1','1','0','栏目管理','栏目管理','1');
INSERT INTO `yourphp_menu` VALUES ('18','16','Module','add','','1','1','0','添加模型','','0');
INSERT INTO `yourphp_menu` VALUES ('19','17','Category','add','','1','1','0','添加栏目','','0');
INSERT INTO `yourphp_menu` VALUES ('20','3','Article','','','1','1','0','文章模型','','2');
INSERT INTO `yourphp_menu` VALUES ('21','20','Article','add','','1','1','0','添加文章','','0');
INSERT INTO `yourphp_menu` VALUES ('23','2','Posid','','','1','1','0','推荐位管理','','0');
INSERT INTO `yourphp_menu` VALUES ('24','23','Posid','add','','1','1','0','添加推荐位','','0');
INSERT INTO `yourphp_menu` VALUES ('25','22','Product','add','','1','1','0','添加产品','','0');
INSERT INTO `yourphp_menu` VALUES ('26','3','Picture','','','1','1','0','图片模型','','4');
INSERT INTO `yourphp_menu` VALUES ('27','3','Download','','','1','1','0','下载模型','','5');
INSERT INTO `yourphp_menu` VALUES ('28','2','Type','','','1','1','0','类别管理','','6');
INSERT INTO `yourphp_menu` VALUES ('29','50','Config','mail','','1','1','0','系统邮箱','','0');
INSERT INTO `yourphp_menu` VALUES ('30','50','Config','attach','','1','1','0','附件配置','','0');
INSERT INTO `yourphp_menu` VALUES ('31','17','Category','repair_cache','','1','1','0','恢复栏目数据','','0');
INSERT INTO `yourphp_menu` VALUES ('33','6','Createhtml','index','','1','1','0','更新首页','','0');
INSERT INTO `yourphp_menu` VALUES ('34','6','Createhtml','Createlist','','1','1','0','更新列表页','','0');
INSERT INTO `yourphp_menu` VALUES ('35','6','Createhtml','Createshow','','1','1','0','更新内容页','','0');
INSERT INTO `yourphp_menu` VALUES ('36','6','Createhtml','Updateurl','','1','1','0','更新内容页url','','0');
INSERT INTO `yourphp_menu` VALUES ('37','26','Picture','add','','1','1','0','添加图片','','0');
INSERT INTO `yourphp_menu` VALUES ('38','27','Download','add','','1','1','0','添加文件','','0');
INSERT INTO `yourphp_menu` VALUES ('40','1','Main','password','','1','1','0','修改密码','','2');
INSERT INTO `yourphp_menu` VALUES ('41','1','Main','profile','','1','1','0','个人资料','','3');
INSERT INTO `yourphp_menu` VALUES ('42','1','Main','main','','1','1','0','后台首页','','1');
INSERT INTO `yourphp_menu` VALUES ('43','17','Category','add','&type=1','1','1','0','添加外部链接','','0');
INSERT INTO `yourphp_menu` VALUES ('44','2','Database','','','1','1','0','数据库管理','','0');
INSERT INTO `yourphp_menu` VALUES ('45','44','Database','query','','1','1','0','执行SQL语句','','0');
INSERT INTO `yourphp_menu` VALUES ('46','44','Database','recover','','1','1','0','恢复数据库','','0');
INSERT INTO `yourphp_menu` VALUES ('47','1','Main','cache','menuid=47','1','1','0','更新缓存','','4');
INSERT INTO `yourphp_menu` VALUES ('48','51','Module','add','type=2','1','1','0','创建模块','','0');
INSERT INTO `yourphp_menu` VALUES ('49','3','Feedback','index','','1','1','0','信息反馈','信息反馈','7');
INSERT INTO `yourphp_menu` VALUES ('51','4','Module','index','type=2','1','1','0','模块管理','','0');
INSERT INTO `yourphp_menu` VALUES ('52','28','Type','add','','1','1','0','添加类别','','0');
INSERT INTO `yourphp_menu` VALUES ('53','4','Link','index','','1','1','0','友情链接','','0');
INSERT INTO `yourphp_menu` VALUES ('54','53','Link','add','','1','1','0','添加链接','','0');
INSERT INTO `yourphp_menu` VALUES ('55','3','Guestbook','index','','1','1','0','在线留言','','8');
INSERT INTO `yourphp_menu` VALUES ('56','4','Order','index','','1','1','0','订单管理','','0');
INSERT INTO `yourphp_menu` VALUES ('57','4','Kefu','index','','1','1','0','在线客服','','0');
INSERT INTO `yourphp_menu` VALUES ('58','57','Kefu','add','','1','1','0','添加客服','','0');
INSERT INTO `yourphp_menu` VALUES ('60','7','Template','index','','1','1','0','模板管理','','0');
INSERT INTO `yourphp_menu` VALUES ('61','60','Template','add','','1','1','0','添加模板','','0');
INSERT INTO `yourphp_menu` VALUES ('62','60','Template','index','type=css','1','1','0','CSS管理','','0');
INSERT INTO `yourphp_menu` VALUES ('63','60','Template','index','type=js','1','1','0','JS管理','','0');
INSERT INTO `yourphp_menu` VALUES ('64','60','Template','images','','1','1','0','媒体文件管理','','0');
INSERT INTO `yourphp_menu` VALUES ('65','7','Theme','index','menuid=65','1','1','0','风格管理','','0');
INSERT INTO `yourphp_menu` VALUES ('66','65','Theme','upload','','1','1','0','上传风格','','0');
--
-- 表的结构 `yourphp_module`
--
DROP TABLE IF EXISTS `yourphp_module`;
CREATE TABLE `yourphp_module` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL  DEFAULT '',
  `name` varchar(50) NOT NULL DEFAULT '' ,
  `description` varchar(200) NOT NULL  DEFAULT '',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `issystem` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `listfields` varchar(255) NOT NULL DEFAULT '',
  `setup` text NOT NULL,
  `listorder` smallint(3) unsigned NOT NULL DEFAULT '0' ,
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0' ,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
--
-- 导出`yourphp_module`表中的数据 `yourphp_module`
--
INSERT INTO `yourphp_module` VALUES ('1','单页模型','Page','单页模型','1','1','id,catid,url,title,title_style,keywords,description,thumb,createtime','','0','1');
INSERT INTO `yourphp_module` VALUES ('2','文章模型','Article','新闻文章','1','1','id,catid,url,title,userid,username,hits,title_style,keywords,description,thumb,createtime','','0','1');
INSERT INTO `yourphp_module` VALUES ('3','产品模型','Product','产品展示','1','1','id,catid,url,title,userid,username,hits,title_style,keywords,description,thumb,createtime,xinghao,price','','0','1');
INSERT INTO `yourphp_module` VALUES ('4','图片模型','Picture','图片展示','1','1','id,catid,url,title,userid,username,hits,title_style,keywords,description,thumb,createtime','','0','1');
INSERT INTO `yourphp_module` VALUES ('5','下载模型','Download','文件下载','1','1','id,catid,url,title,title_style,userid,username,hits,keywords,description,thumb,createtime,ext,size','','0','1');
INSERT INTO `yourphp_module` VALUES ('6','信息反馈','Feedback','信息反馈','1','0','*','','0','1');
INSERT INTO `yourphp_module` VALUES ('7','友情链接','Link','友情链接','2','0','*','','0','1');
INSERT INTO `yourphp_module` VALUES ('8','在线留言','Guestbook','在线留言','1','0','*','','0','1');
INSERT INTO `yourphp_module` VALUES ('9','在线客服','Kefu','在线客服','2','0','*','','0','1');
--
-- 表的结构 `yourphp_node`
--
DROP TABLE IF EXISTS `yourphp_node`;
CREATE TABLE `yourphp_node` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL DEFAULT '',
  `title` varchar(50) NOT NULL DEFAULT '',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `remark` varchar(255) NOT NULL DEFAULT '',
  `listorder` smallint(5) unsigned NOT NULL DEFAULT '0',
  `pid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `level` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `name` (`name`,`status`,`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;
--
-- 导出`yourphp_node`表中的数据 `yourphp_node`
--
INSERT INTO `yourphp_node` VALUES ('1','Admin','后台管理','1','后台项目','0','0','1');
INSERT INTO `yourphp_node` VALUES ('2','Index','后台默认','1','控制器','0','1','2');
INSERT INTO `yourphp_node` VALUES ('3','Config','系统设置','1','控制器','0','1','2');
INSERT INTO `yourphp_node` VALUES ('4','index','站点配置','1','动作','0','3','3');
INSERT INTO `yourphp_node` VALUES ('5','sys','系统参数','1','动作','0','3','3');
INSERT INTO `yourphp_node` VALUES ('6','seo','SEO设置','1','动作','0','3','3');
INSERT INTO `yourphp_node` VALUES ('7','add','添加变量','1','动作','0','3','3');
INSERT INTO `yourphp_node` VALUES ('8','Menu','菜单管理','1','菜单控制器','0','1','2');
INSERT INTO `yourphp_node` VALUES ('9','index','菜单列表','1','菜单列表-动作','0','8','3');
INSERT INTO `yourphp_node` VALUES ('10','add','添加菜单','1','添加菜单-动作','0','8','3');
INSERT INTO `yourphp_node` VALUES ('11','index','后台默认动作','1','后台默认动作','0','2','3');
INSERT INTO `yourphp_node` VALUES ('12','Main','后台首页','1','控制器','0','1','2');
INSERT INTO `yourphp_node` VALUES ('13','profile','个人资料','1','动作','0','12','3');
INSERT INTO `yourphp_node` VALUES ('14','password','修改密码','1','动作','0','12','3');
INSERT INTO `yourphp_node` VALUES ('15','index','后台首页','1','动作','0','12','3');
INSERT INTO `yourphp_node` VALUES ('16','main','欢迎首页','1','动作','0','12','3');
INSERT INTO `yourphp_node` VALUES ('17','attach','附件设置','1','动作','0','3','3');
INSERT INTO `yourphp_node` VALUES ('18','mail','系统邮箱','1','动作','0','3','3');
INSERT INTO `yourphp_node` VALUES ('19','Posid','推荐位','1','控制器','0','1','2');
INSERT INTO `yourphp_node` VALUES ('20','index','列表','1','动作','0','19','3');
INSERT INTO `yourphp_node` VALUES ('21','Category','模型管理','1','','0','1','2');
INSERT INTO `yourphp_node` VALUES ('22','User','会员管理','1','','0','1','2');
INSERT INTO `yourphp_node` VALUES ('23','Createhtml','网站更新','1','','0','1','2');
INSERT INTO `yourphp_node` VALUES ('24','index','栏目管理','1','','0','21','3');
INSERT INTO `yourphp_node` VALUES ('25','index','会员资料管理','1','','0','22','3');
INSERT INTO `yourphp_node` VALUES ('26','index','更新首页','1','','0','23','3');
INSERT INTO `yourphp_node` VALUES ('27','Createlist','更新列表页','1','','0','23','3');
INSERT INTO `yourphp_node` VALUES ('28','Createshow','更新内容页','1','','0','23','3');
INSERT INTO `yourphp_node` VALUES ('29','Updateurl','更新URL','1','','0','23','3');
--
-- 表的结构 `yourphp_order`
--
DROP TABLE IF EXISTS `yourphp_order`;
CREATE TABLE `yourphp_order` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `sn` char(22) NOT NULL DEFAULT '',
  `password` varchar(30) NOT NULL DEFAULT '',
  `module` varchar(20) NOT NULL DEFAULT '',
  `userid` int(8) unsigned NOT NULL DEFAULT '0',
  `username` varchar(40) NOT NULL DEFAULT '',
  `price` decimal(10,0) unsigned NOT NULL DEFAULT '0',
  `productlist` mediumtext NOT NULL,
  `note` mediumtext NOT NULL,
  `realname` varchar(40) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `tel` varchar(50) NOT NULL DEFAULT '',
  `mobile` varchar(18) NOT NULL DEFAULT '',
  `fax` varchar(50) NOT NULL DEFAULT '',
  `address` varchar(80) NOT NULL DEFAULT '',
  `zipcode` varchar(10) NOT NULL DEFAULT '',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `ip` char(15) NOT NULL DEFAULT '',
  `createtime` int(11) unsigned NOT NULL DEFAULT '0',
  `updatetime` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `sn` (`sn`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
--
-- 表的结构 `yourphp_page`
--
DROP TABLE IF EXISTS `yourphp_page`;
CREATE TABLE `yourphp_page` (
  `id` smallint(5) NOT NULL,
  `title` varchar(100) NOT NULL DEFAULT '' ,
  `thumb` varchar(100) NOT NULL DEFAULT '',
  `keywords` varchar(250) NOT NULL DEFAULT '' ,
  `description` mediumtext NOT NULL ,
  `content` mediumtext NOT NULL ,
  `template` varchar(30) NOT NULL DEFAULT '',
  `listorder` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
--
-- 导出`yourphp_page`表中的数据 `yourphp_page`
--
INSERT INTO `yourphp_page` VALUES ('8','关于我们','./Uploads/201104/4d9764a7b953d.jpg','yourphp,企业建站系统,发布','yourphp,企业建站系统,发布','<p>\r\n	关于我们关于我们关于我们关于我们关于我们关于我们关于我们关于我们关于我们关于我们关于我们关于我们关于我们关于我们关于我们关于我们关于我们关于我们关于我们关于我们关于我们关于我们关于我们关于我们关于我们关于我们lllll</p>\r\n<p>\r\n	[page]</p>\r\n<p>\r\n	sdfgasdfaf中华人民共和国关于我们关于我们关于我们关于我们关于我们关于我们关于我们关于我们关于我们关于我们关于我们关于我们关于我们关于我们关于我们关于我</p>\r\n<p>\r\n	111</p>\r\n','','0');
INSERT INTO `yourphp_page` VALUES ('11','公司简介','','','公司简介','<p>\r\n	公司简介</p>\r\n','','0');
INSERT INTO `yourphp_page` VALUES ('12','联系我们','./Uploads/201104/4d96e3f1522b3.jpg','联系我们','联系我们','<p>\r\n	联系我们</p>\r\n','','0');
--
-- 表的结构 `yourphp_picture`
--
DROP TABLE IF EXISTS `yourphp_picture`;
CREATE TABLE `yourphp_picture` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `catid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `userid` int(11) unsigned NOT NULL DEFAULT '0',
  `username` varchar(40) NOT NULL DEFAULT '',
  `title` varchar(120) NOT NULL DEFAULT '',
  `title_style` varchar(40) NOT NULL DEFAULT '',
  `thumb` varchar(100) NOT NULL DEFAULT '',
  `keywords` varchar(120) NOT NULL DEFAULT '',
  `description` mediumtext NOT NULL,
  `content` mediumtext NOT NULL,
  `url` varchar(60) NOT NULL DEFAULT '',
  `template` varchar(40) NOT NULL DEFAULT '',
  `posid` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `recommend` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `readgroup` varchar(100) NOT NULL DEFAULT '',
  `readpoint` smallint(5) NOT NULL DEFAULT '0',
  `listorder` int(10) unsigned NOT NULL DEFAULT '0',
  `hits` int(11) unsigned NOT NULL DEFAULT '0',
  `createtime` int(11) unsigned NOT NULL DEFAULT '0',
  `updatetime` int(11) unsigned NOT NULL DEFAULT '0',
  `pics` mediumtext NOT NULL,
  PRIMARY KEY (`id`),
  KEY `status` (`id`,`status`,`listorder`),
  KEY `catid` (`id`,`catid`,`status`),
  KEY `listorder` (`id`,`catid`,`status`,`listorder`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
--
-- 表的结构 `yourphp_posid`
--
DROP TABLE IF EXISTS `yourphp_posid`;
CREATE TABLE `yourphp_posid` (
  `id` tinyint(2) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL DEFAULT '',
  `listorder` tinyint(2) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
--
-- 导出`yourphp_posid`表中的数据 `yourphp_posid`
--
INSERT INTO `yourphp_posid` VALUES ('1','首页推荐','0');
INSERT INTO `yourphp_posid` VALUES ('2','首页幻灯片','0');
INSERT INTO `yourphp_posid` VALUES ('3','推荐产品','0');
INSERT INTO `yourphp_posid` VALUES ('4','促销产品','0');
--
-- 表的结构 `yourphp_product`
--
DROP TABLE IF EXISTS `yourphp_product`;
CREATE TABLE `yourphp_product` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `catid` smallint(5) unsigned NOT NULL DEFAULT '0' ,
  `userid` int(11) unsigned NOT NULL DEFAULT '0' ,
  `username` varchar(40) NOT NULL DEFAULT '' ,
  `title` varchar(120) NOT NULL DEFAULT '' ,
  `title_style` varchar(40) NOT NULL DEFAULT '' ,
  `keywords` varchar(80) NOT NULL DEFAULT '',
  `description` mediumtext NOT NULL,
  `content` mediumtext NOT NULL ,
  `template` varchar(40) NOT NULL  DEFAULT '',
  `thumb` varchar(100) NOT NULL DEFAULT '' ,
  `posid` tinyint(2) unsigned NOT NULL DEFAULT '0' ,
  `status` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `recommend` tinyint(1) unsigned NOT NULL DEFAULT '0' ,
  `readgroup` varchar(100) NOT NULL DEFAULT '',
  `readpoint` smallint(5) NOT NULL DEFAULT '0',
  `listorder` int(10) unsigned NOT NULL DEFAULT '0' ,
  `hits` int(11) unsigned NOT NULL DEFAULT '0' ,
  `createtime` int(11) unsigned NOT NULL DEFAULT '0' ,
  `updatetime` int(11) unsigned NOT NULL DEFAULT '0' ,
  `price` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `url` varchar(60) NOT NULL DEFAULT '',
  `xinghao` varchar(30) NOT NULL DEFAULT '',
  `pics` mediumtext NOT NULL,
  PRIMARY KEY (`id`),
  KEY `status` (`id`,`status`,`listorder`),
  KEY `catid` (`id`,`catid`,`status`),
  KEY `listorder` (`id`,`catid`,`status`,`listorder`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
--
-- 表的结构 `yourphp_role`
--
DROP TABLE IF EXISTS `yourphp_role`;
CREATE TABLE `yourphp_role` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL  DEFAULT '',
  `status` tinyint(1) unsigned NOT NULL  DEFAULT '0',
  `remark` varchar(255) NOT NULL  DEFAULT '',
  `pid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `listorder` smallint(6) unsigned NOT NULL  DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
--
-- 导出`yourphp_role`表中的数据 `yourphp_role`
--
INSERT INTO `yourphp_role` VALUES ('1','超级管理员','1','超级管理','0','0');
INSERT INTO `yourphp_role` VALUES ('2','普通管理员','1','普通管理员','0','0');
INSERT INTO `yourphp_role` VALUES ('3','注册用户','1','注册用户','0','0');
INSERT INTO `yourphp_role` VALUES ('4','游客','1','游客','0','0');
--
-- 表的结构 `yourphp_role_user`
--
DROP TABLE IF EXISTS `yourphp_role_user`;
CREATE TABLE `yourphp_role_user` (
  `role_id` mediumint(9) unsigned DEFAULT NULL  DEFAULT '0',
  `user_id` char(32) DEFAULT NULL  DEFAULT '0',
  KEY `group_id` (`role_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 表的结构 `yourphp_type`
--
DROP TABLE IF EXISTS `yourphp_type`;
CREATE TABLE `yourphp_type` (
  `typeid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL DEFAULT '',
  `parentid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `description` varchar(200) NOT NULL DEFAULT '',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `listorder` smallint(5) unsigned NOT NULL DEFAULT '0',
  `keyid` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`typeid`),
  KEY `parentid` (`parentid`,`listorder`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
--
-- 导出`yourphp_type`表中的数据 `yourphp_type`
--
INSERT INTO `yourphp_type` VALUES ('1','友情链接','0','友情链接分类','1','0','1');
INSERT INTO `yourphp_type` VALUES ('3','合作伙伴','1','合作伙伴','1','1','1');
INSERT INTO `yourphp_type` VALUES ('2','默认分类','1','默认分类','1','0','1');
INSERT INTO `yourphp_type` VALUES ('4','反馈类别','0','信息反馈类别','1','0','4');
INSERT INTO `yourphp_type` VALUES ('5','产品购买','4','产品购买','1','0','5');
INSERT INTO `yourphp_type` VALUES ('6','商务合作','4','商务合作','1','0','6');
INSERT INTO `yourphp_type` VALUES ('7','其他反馈','4','其他反馈','1','0','7');
--
-- 表的结构 `yourphp_user`
--
DROP TABLE IF EXISTS `yourphp_user`;
CREATE TABLE `yourphp_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `groupid` tinyint(2) unsigned NOT NULL DEFAULT '0' ,
  `username` varchar(50) NOT NULL  DEFAULT '',
  `password` varchar(50) NOT NULL  DEFAULT '',
  `email` varchar(50) NOT NULL  DEFAULT '',
  `realname` varchar(50) NOT NULL DEFAULT '',
  `question` varchar(50) NOT NULL DEFAULT '',
  `answer` varchar(50) NOT NULL DEFAULT '',
  `sex` tinyint(1) NOT NULL DEFAULT '0',
  `tel` varchar(50) NOT NULL DEFAULT '',
  `mobile` varchar(50) NOT NULL DEFAULT '',
  `fax` varchar(50) NOT NULL DEFAULT '',
  `web_url` varchar(100) NOT NULL DEFAULT '',
  `address` varchar(100) NOT NULL DEFAULT '',
  `login_count` int(11) unsigned NOT NULL DEFAULT '0' ,
  `createtime` int(11) unsigned NOT NULL DEFAULT '0' ,
  `updatetime` int(11) unsigned NOT NULL DEFAULT '0' ,
  `last_logintime` int(11) unsigned NOT NULL DEFAULT '0' ,
  `reg_ip` char(15) NOT NULL DEFAULT '',
  `last_ip` char(15) NOT NULL DEFAULT '',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;