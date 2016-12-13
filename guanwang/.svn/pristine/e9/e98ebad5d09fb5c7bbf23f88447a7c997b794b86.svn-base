<?php
/**
 *
 * Login(后台登陆页面)
 *
 * @package      	YOURPHP
 * @author          liuxun QQ:147613338 <web@yourphp.cn>
 * @copyright     	Copyright (c) 2008-2011  (http://www.yourphp.cn)
 * @license         http://www.yourphp.cn/license.txt
 * @version        	yourphp企业建站系统 v2.0 2011-03-01 yourphp.cn $
 */

class LoginAction extends Action{
    private $adminid ,$groupid ,$sysConfig ,$cache_model,$siteConfig,$menudata ;
    function _initialize()
    {
		$this->siteConfig = F('Config');
		$this->sysConfig = F('sys.config');
		C('ADMIN_ACCESS',$this->sysConfig['ADMIN_ACCESS']);

		import('@.TagLib.TagLibYP');
        $this->adminid = $_SESSION['adminid'];
        $this->groupid = $_SESSION['groupid'];
    }
    /**
     * 登录页
     *
     */
    public function index()
    {
		if(is_file('./Yourphp/Runtime/~app.php'))unlink('./Yourphp/Runtime/~app.php');
		if(is_file('./Yourphp/Runtime/~runtime.php'))unlink('./Yourphp/Runtime/~runtime.php');
		if(is_file('./Yourphp/Runtime/~allinone.php'))@unlink('./Yourphp/Runtime/~allinone.php');

		$this->menudata = F('Menu');
		$this->cache_model=array('Menu','Config','Module','Role','Category','Posid','Field','Type');
		if(empty($this->siteConfig) || empty($this->sysConfig) || empty($this->menudata)){
			foreach($this->cache_model as $r){
				savecache($r);
			}
		}
		if($this->_adminid){
			$this->assign('jumpUrl',U('Index/index'));
			$this->success(L('logined'));
		}
        $this->display();
    }

    /**
     * 提交登录
     *
     */
    public function doLogin()
    {

        if(!$_POST[C('TOKEN_NAME')] || $_POST[C('TOKEN_NAME')]!=$_SESSION[C('TOKEN_NAME')]){
				$this->error (L('_TOKEN_ERROR_'));
		}
        unset($_POST['__hash__']);

		if(empty($this->sysConfig)) $this->error(L('NO SYSTEM CONFIG FILE'));
		$username = trim($_POST['username']);
        $password = trim($_POST['password']);
        $verifyCode = trim($_POST['verifyCode']);

        if(empty($username) || empty($password)){
           $this->error(L('empty_username_empty_password'));
        }elseif(md5($verifyCode) != $_SESSION['verify']){
           $this->error(L('error_verify'));
        }


        $condition = array();
        $condition['username'] = $username;

		import ( '@.ORG.RBAC' );
        $authInfo = RBAC::authenticate($condition);
        //使用用户名、密码和状态的方式进行认证
        if(false === $authInfo) {
            $this->error(L('empty_userid'));
        }else {
            if($authInfo['password'] != sysmd5($_POST['password'])) {
            	$this->error(L('password_error'));
            }

			$_SESSION['username'] = $authInfo['username'];
			$_SESSION['adminid'] = $_SESSION['userid'] = $authInfo['id'];
			$_SESSION['groupid'] = $authInfo['groupid'];
			$_SESSION['adminaccess'] = C('ADMIN_ACCESS');
            $_SESSION[C('USER_AUTH_KEY')]	=	$authInfo['id'];
            $_SESSION['email']	=	$authInfo['email'];
            $_SESSION['lastLoginTime']		=	$authInfo['last_logintime'];
			$_SESSION['login_count']	=	$authInfo['login_count']+1;

            if($authInfo['groupid']==1) {
				$_SESSION[C('ADMIN_AUTH_KEY')]=true;
            }

            //保存登录信息
			$dao = M('User');
			$data = array();
			$data['id']	=	$authInfo['id'];
			$data['last_logintime']	=	time();
			$data['last_ip']	=	 get_client_ip();
			$data['login_count']	=	array('exp','login_count+1');
			$dao->save($data);

           // 缓存访问权限
            RBAC::saveAccessList();
			$this->ajaxReturn($authInfo,L('login_ok'),1);
		}

    }

    /**
     * 验证码
     *
     */
    public function verify()
    {
        $type	 =	 isset($_GET['type'])?$_GET['type']:'gif';
        import("@.ORG.Image");
        Image::buildImageVerify(4,1,$type);
    }


    /**
     * 退出登录
     *
     */
    public function logout()
    {
		if(isset($_SESSION[C('USER_AUTH_KEY')])) {
			unset($_SESSION[C('USER_AUTH_KEY')]);
			unset($_SESSION);
			session_destroy();
            $this->assign('jumpUrl',U('Login/index'));
			$this->success(L('loginouted'));
        }else {
			$this->assign('jumpUrl',U('Login/index'));
            $this->error(L('logined'));
        }
    }

    function checkEmail(){
		$user=M('User');

        $email=$_GET['email'];
		$userid=intval($_GET['userid']);
		if(empty($userid)){
			if($user->getByEmail($email)){
				 echo 'false';
			}else{
				echo 'true';
			}
		}else{
			//判断邮箱是否已经使用
			if($user->where("id!={$userid} and email='{$email}'")->find()){
				 echo 'false';
			}else{
				echo 'true';
			}
		}
        exit;
	}
}
