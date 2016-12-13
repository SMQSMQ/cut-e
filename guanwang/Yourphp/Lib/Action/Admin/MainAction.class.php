<?php
/**
 * 
 * Main(后台登陆页面)
 *
 * @package      	YOURPHP
 * @author          liuxun QQ:147613338 <web@yourphp.cn>
 * @copyright     	Copyright (c) 2008-2011  (http://www.yourphp.cn)
 * @license         http://www.yourphp.cn/license.txt
 * @version        	yourphp企业建站系统 v2.0 2011-03-01 yourphp.cn $
 */
class MainAction extends AdminbaseAction {
	protected   $cache_model;
	function _initialize()
    {
		parent::_initialize();
		if(empty($_SESSION['username']) || empty($_SESSION['adminid']) || $_SESSION['adminaccess'] != C('ADMIN_ACCESS') ){
			$this->assign ( 'jumpUrl', U('Login/index') );
			$this->error(L('no_login'));
		}
    }
	public function index()
	{
		  $this->display();
	}
	public function right()
	{
		  $this->display();
	}
	public function footer() {
		$this->display();
	}

	public function cache() {
		if(is_file('./Yourphp/Runtime/~app.php'))@unlink('./Yourphp/Runtime/~app.php');
		if(is_file('./Yourphp/Runtime/~runtime.php'))@unlink('./Yourphp/Runtime/~runtime.php');
		if(is_file('./Yourphp/Runtime/~allinone.php'))@unlink('./Yourphp/Runtime/~allinone.php');	
		R('Category','repair','Admin');
		R('Category','repair','Admin');

		foreach($this->cache_model as $r){			
			savecache($r);
		}
		$this->assign ( 'jumpUrl', U('main/main') );
		$this->success(L('do_success'));
	}

	public function top() {
		$role	=	F("Role");
		$this->assign('usergroup',$role[$_SESSION['groupid']]['name']); 
		$menu = $this->getnav(0);
		$this->assign('menuGroupList',$menu['nav']);
		$this->assign($this->siteConfig);
		$this->display();
	}


	public function menu() {

		$parentid =	intval($_GET['parentid']);
		if($parentid){ 
			$menu = $this->getnav($parentid);
			$this->assign('pname',$menu['bnav']);
            $this->assign('menu',$menu['nav']);
		}
		$this->display();
	}

    public function main() {
		
		$db=D('');
		$db =   DB::getInstance();
		$tables = $db->getTables();
		
		$info = array(
            'PHP_OS'=>PHP_OS,
            'SERVER_SOFTWARE'=>$_SERVER["SERVER_SOFTWARE"],
            'mysql_get_server_info'=>php_sapi_name(),
			'MYSQL_VERSION' => mysql_get_server_info(),
            'yourphp_VERSION'=> VERSION.' '.UPDATETIME.' [ <a href="http://www.yourphp.cn" target="_blank">'.L('view_new_VERSION').'</a> ]',
            'upload_max_filesize'=> ini_get('upload_max_filesize'),
            'max_execution_time'=>ini_get('max_execution_time').L('miao'),
			'disk_free_space'=>round((@disk_free_space(".")/(1024*1024)),2).'M',
            );
        $this->assign('server_info',$info);		
		foreach ((array)$this->module as $rw){
			if($rw['type']==1){  
				$molule= M($rw['name']);
				$rw['counts'] = $molule->count();;
				$mdata['moduledata'][] = $rw;
			}
        }



		$molule= M('User');
		$counts = $molule->count(); 
		$userinfos = $molule->find($_SESSION['adminid']);
		$mdata['moduledata'][]=array('title'=>L('user_counts'),'counts'=>$counts);
		
		$molule= M('Category');$counts = $molule->count(); 
		$mdata['moduledata'][]=array('title'=>L('Category_counts'),'counts'=>$counts);
		$this->assign($mdata);
		$role =F('Role');
		
		$userinfo=array(
			'username'=>$userinfos['username'],	
			'groupname'=>$role[$userinfos['groupid']]['name'],
			'logintime'=>toDate($userinfos['last_logintime']),			
			'last_ip'=>$userinfos['last_ip'],	
			'login_count'=>$userinfos['login_count'].L('ci'),	
		);
		$this->assign('userinfo',$userinfo);

        $this->display();
    }

 
    // 更换密码
    public function password(){
		if($_POST['dosubmit']){
			if(md5($_POST['verify'])	!= $_SESSION['verify']) {
				$this->error(L('error_verify'));
			}
			if($_POST['password'] != $_POST['repassword']){
				$this->error(L('password_repassword'));
			}
			$map	=	array();
			$map['password']= sysmd5($_POST['oldpassword']);
			if(isset($_POST['username'])) {
				$map['username']	 =	 $_POST['username'];
			}elseif(isset($_SESSION['adminid'])) {
				$map['id']		=	$_SESSION['adminid'];
			}
			//检查用户
			$User    =   M("user");
			if(!$User->where($map)->field('id')->find()) {
				$this->error(L('error_oldpassword'));
			}else {
				$User->update_time = time();
				$User->password	=	sysmd5($_POST['password']);
				$User->save();
				$this->success(L('do_success'));
			 }
		}else{
			 $this->display();
		}
    }

	// 修改资料
	public function profile() {	
		if($_POST['dosubmit']){
			$User	 =	M("user");
			if(!$User->create()) {
				$this->error($User->getError());
			}
			$User->update_time = time();
			$User->last_ip = get_client_ip();
			$result	=	$User->save();
			if(false !== $result) {
				$this->success(L('do_success'));
			}else{
				$this->error(L('do_error'));
			}
		}else{
			$User	 =	 M("user");
			$vo	=	$User->getById($_SESSION['adminid']);
			$this->assign('vo',$vo);
			$this->display();
		}
	}
}
?>