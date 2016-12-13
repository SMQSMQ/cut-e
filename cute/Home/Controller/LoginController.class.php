<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
    	if(isset($_GET['newid']) && $_GET['newid'] !=''){
            $newid = is_login_ios($_GET['newid']);
            if($newid>0){
               redirect('index.php?s=Me/data/type/1/newid/'.$newid);
            }
        }
    	//
    	if(isset($_COOKIE[md5('cute')])){
    		$a = unserialize($_COOKIE[md5('cute')]);
    		$type = isset($_GET['type'])?'/type/1':'';
    		if($a['user_id']>0) redirect('index.php?s=Me/data'.$type);
    	}

    	$this->assign('title', '登录');
    	$this->display(isset($_GET['type'])?'ios_index':'');
    }
    /**
     * 注册
     */
    public function register(){
    	$this->assign('title', '注册');
    	$this->display(isset($_GET['type'])?'ios_register':'');
    }
    
    public function retrieve_password1(){
    	$_SESSION['user_edit_pass'] = 0;
    	$this->assign('title', '重置密码');
    	$this->display(isset($_GET['type'])?'ios_retrieve_password1':'');
    }
    public function retrieve_password2(){
        if(isset($_GET['type'])){
            if(isset($_GET['userid']) && $_GET['userid'] != ''){
                $this->assign('userid', $_GET['userid']);
            }
        }else{
           if($_SESSION['user_edit_pass'] <=0) exit();
        }
    	$this->assign('title', '重置密码');
    	$this->display(isset($_GET['type'])?'ios_retrieve_password2':'');
    }
    /**
     * 登录判断
     */
    public function login(){
    	$user = M('User');
    	$see = $user->where("mobile='".$_POST['u']."'")->find();
    	if($see){
    		if($see['password']==md5($_POST['p'])){
    			$_SESSION[C('SESSION_NAME')]['user_id'] = $see['id'];
    			$_SESSION[C('SESSION_NAME')]['user_name'] = $see['nickname'];
                $_SESSION[C('SESSION_NAME')]['user_pic'] = $see['cover'];
    			$_SESSION[C('SESSION_NAME')]['user_newid'] = encode_pass($see['id']);
    			cookie(md5("cute"),serialize($_SESSION[C('SESSION_NAME')]));  //设置cookie并数给
    			cookie(md5("cute"),serialize($_SESSION[C('SESSION_NAME')]),172800*365);
    			$user_msg['id'] = $see['id'];
    			$user_msg['name'] = $see['nickname'];
                $user_msg['pic'] = urlencode($see['cover']);
    			$user_msg['newid'] = encode_pass($see['id']);
    		}else $user_msg['msg'] = "密码错误";
    	}else   $user_msg['msg'] = "用户名不存在";
    	echo json_encode($user_msg) ;
    }
    /**
     * 注册判断
     */
    public function reg(){
	    $user = M('user');
	    $see = $user->where("mobile='".$_POST['u']."'")->find();
	    if($see) {
	    	echo "此手机号已被占用，请重新输入手机号";
	    }else{
	    	//验证code
	    	$hdcode = M('code');
	    	$s = $hdcode->where("pho='".$_POST['u']."'&&code='".$_POST['code']."'")->find();
	    	if($s){
	    		$data['mobile']       =  $_POST['u'];//标题
	    		$data['nickname']       =  $_POST['u'];
	    		$data['add_time']       =  time();
	    		$data['password']       =  md5($_POST['p']);
	    		$id = $user->add($data);
                $_SESSION[C('SESSION_NAME')]['user_id'] = $id;
	    		$_SESSION[C('SESSION_NAME')]['user_newid'] = encode_pass($id);
	    		$_SESSION[C('SESSION_NAME')]['user_name'] = '';
	    		$_SESSION[C('SESSION_NAME')]['user_pic'] = '';
	    		cookie(md5("cute"),serialize($_SESSION[C('SESSION_NAME')]));  //设置cookie并数给
	    		cookie(md5("cute"),serialize($_SESSION[C('SESSION_NAME')]),172800*365);
	    		echo 1;
	    	}else echo '验证码错误';
	    }
    }
    /**
     * 获取短信码
     */
    public function setmsg(){
    	$code = sj(5);
    	$pho = trim($_POST['pho']);
    	if($pho=='' || !preg_match("/13[0-9]{9}|15[0|1|2|3|5|6|7|8|9]\d{8}|18[0|1|3|2|5|6|7|8|9]\d{8}|17[0|1|3|2|5|6|7|8|9]\d{8}/", $pho)){
    		$data1= '手机号码错误！';
    	}else{
    		$hdcode = M('Code');
    		$count = $hdcode->count();
    		if($count>10){
    			echo '请联系管理员';
    			exit();
    		}
    		$content = $hdcode->where("pho='".$pho."'")->find();
    		$a = 0;
    		$ck = 0;
    		foreach ($content as $z){
    			if($z['pho']==$pho){
    				if(time()-$z['time']<60) $a =1;//是否在60秒内
    				if(time()-$z['time']<=86400) $ck++;//验证次数
    			}
    		}
    
    		if($ck>=3) $data1= '验证次数过多！请稍后在试。';
    		else{
    			if($a==0){
    				$con = '您正在注册APP，验证码是：'.$code.'十分钟内有效。';
    				$isok = msg($pho, $con);
    				if($isok>0){
    					$data2['pho']   =  $pho;
    					$data2['code']  = $code;
    					$data2['start'] = 0;
    					$data2['time']  = time();
    					$id = $hdcode->add($data2);
    				}
    				$data1= $isok;
    			}else $data1= '请过60秒后在次发送';
    		}
    	}
    	echo $data1;
    }
    /**
     * 退出
     */
    public function back(){
    	cookie(md5("cute"),null);
    	echo 1;
    }
    /**
     * auto_login
     */
    public function auto_login(){
    	if(isset($_COOKIE[md5('cute')])){
    		$a = unserialize($_COOKIE[md5('cute')]);
    		if($a['user_name']=='') $a['user_name'] = '设置昵称';
    		if($a['user_pic']=='') $a['user_pic'] = 'http://www.cuteyep.com/app/public/images/cute-logo.png';
    	}else{
    		$a['user_id']   = '';
    		$a['user_name'] = '登录';
    		$a['user_pic']  = 'http://www.cuteyep.com/app/public/images/cute-logo.png';
    	}
    	echo json_encode($a);
    }
    /**
     * 第三方qq登录、微信
     */
    public function qq_login(){
    	$user = M('user');
    	$see = $user->where("openid='".$_POST['id']."'")->find();
    	if($see){//已有
	    	$_SESSION[C('SESSION_NAME')]['user_id'] = $see['id'];
	    	$_SESSION[C('SESSION_NAME')]['user_name'] = $see['nickname'];
            $_SESSION[C('SESSION_NAME')]['user_pic'] = $see['cover'];
	    	$_SESSION[C('SESSION_NAME')]['user_newid'] = encode_pass($see['id']);
    	}else{//从来没登录
    		$data['openid']    =  $_POST['id'];
    		$data['nickname']    =  $_POST['name'];
    		$data['add_time']    =  time();
    		$data['cover']       =    $_POST['pic'];
    		$id = $user->add($data);
    		$_SESSION[C('SESSION_NAME')]['user_id'] = $id;
    		$_SESSION[C('SESSION_NAME')]['user_name'] = $_POST['name'];
            $_SESSION[C('SESSION_NAME')]['user_pic'] = $_POST['pic'];
    		$_SESSION[C('SESSION_NAME')]['user_newid'] = encode_pass($id);
    	}
    	cookie(md5("cute"),serialize($_SESSION[C('SESSION_NAME')]));  //设置cookie并数给
    	cookie(md5("cute"),serialize($_SESSION[C('SESSION_NAME')]),172800*365);
    	echo $_SESSION[C('SESSION_NAME')]['user_newid'];
    }
    /**
     * 找回密码发短信
     */
    public function back_pass(){
     $user = M('user');
	    $see = $user->where("mobile='".$_POST['u']."'")->find();
	    if(!$see) {
	    	echo "无此账号！";
	    }else{
	    	//验证code
	    	$hdcode = M('code');
	    	$s = $hdcode->where("pho='".$_POST['u']."'&&code='".$_POST['code']."'")->find();
	    	if($s){
                if(isset($_GET['type'])){
                    echo $see['id'];
                }else{
                    $_SESSION['user_edit_pass'] = $see['id'];
                    echo 1;
                }
	    	}else echo '验证码错误';
	    }
    }
    public function setmsg_back(){
    	$code = sj(5);
    	$pho = trim($_POST['pho']);
    	if($pho=='' || !preg_match("/13[0-9]{9}|15[0|1|2|3|5|6|7|8|9]\d{8}|18[0|1|3|2|5|6|7|8|9]\d{8}|17[0|1|3|2|5|6|7|8|9]\d{8}/", $pho)){
    		$data1= '手机号码错误！';
    	}else{
    		$hdcode = M('Code');
    		$count = $hdcode->count();
    		if($count>10){
    			echo '请联系管理员';
    			exit();
    		}
    		$content = $hdcode->where("pho='".$pho."'")->find();
    		$a = 0;
    		$ck = 0;
    		foreach ($content as $z){
    			if($z['pho']==$pho){
    				if(time()-$z['time']<60) $a =1;//是否在60秒内
    				if(time()-$z['time']<=86400) $ck++;//验证次数
    			}
    		}
    
    		if($ck>=3) $data1= '验证次数过多！请稍后在试。';
    		else{
    			if($a==0){
    				$con = '您正在找回APP密码，验证码是：'.$code.'十分钟内有效。';
    				$isok = msg($pho, $con);
    				if($isok>0){
    					$data2['pho']   =  $pho;
    					$data2['code']  = $code;
    					$data2['start'] = 0;
    					$data2['time']  = time();
    					$id = $hdcode->add($data2);
    				}
    				$data1= $isok;
    			}else $data1= '请过60秒后在次发送';
    		}
    	}
    	echo $data1;
    }
    /**
     * 用户修改密码
     */
    public function user_edit_pass(){
    	if($_POST['p']=='' || $_POST['p2']==''){
    		echo '请输入密码!';
    		exit();
    	}
    	if($_POST['p']!=$_POST['p2']){
    		echo '两次密码不一至!';
    		exit();
    	}
        $user = M('user');
        if($_POST['userid'] != ''){
            $data['password'] =  md5($_POST['p']);
            $id = $user->where('id='.$_POST['userid'])->data($data)->save();
            $see = $user->where("id='".$_POST['userid']."'")->find();
            $user_msg['id'] = $see['id'];
            $user_msg['name'] = $see['nickname'];
            $user_msg['pic'] = urlencode($see['cover']);
            $user_msg['newid'] = encode_pass($see['id']);
            echo json_encode($user_msg) ;
        }else{
            if($_SESSION['user_edit_pass']>0){
                $data['password'] =  md5($_POST['p']);
                $id = $user->where('id='.$_SESSION['user_edit_pass'])->data($data)->save();
                echo 1;
            }else{
                echo "修改失败";
            }
        }
    }
    
    
    
    
    
    
}