<?php
namespace Home\Controller;
use Think\Controller;
class MeController extends Controller {
    public function index(){
    //	is_login();
    	$this->assign('title', '首页');
    	$this->display();
    }
    /**
     * 服务条款
     */
    public function article(){
    	$see = D('content')->where('id='.$_GET['id'])->find();
    	$this->assign('see', $see);
    	$this->assign('title', $see['title']);
    	$this->display(isset($_GET['type'])?'ios_article':'');
    }
    /**
     * 我的制做
     */
    public function diy(){
    	is_login();
    	//赞
    	$id = getuser();
    	$like = D('voice_card');
    	$where['uid'] = $id['user_id'];
    	$list0 = $like->where($where)->order('id desc')->select();//表情
    	$this->assign('list', $list0);
    	$this->assign('empty','<span class="empty">暂无内容</span>');
    	$this->assign('title', '我的制做');
    	$this->display(isset($_GET['type'])?'ios_diy':'');
    }
    /**
     * 我的下载
     */
    public function down(){
        if(isset($_GET['newid']) && $_GET['newid'] !=''){
            $newid = is_login_ios($_GET['newid']);
            if($newid<=0){
                $this->assign('empty','<span class="empty">暂无内容</span>');
                $this->assign('title', '我的下载');
                $this->display(isset($_GET['type'])?'ios_down':'');
                exit();
            }else{
                $where['uid']=$newid;
            }
        }else{
            is_login();
            $id = getuser();
            $where['uid'] = $id['user_id'];
        }
    	$like = D('down');
    	$where['type'] = 1;
    	$list0 = $like->where($where)->order('id desc')->select();//表情
    	$album = D('album');
    	$new_list0 = array();
    	foreach ($list0 as $key=>$z){
    		$s = $album->where('id='.$z['targetid'])->find();
    		if($s){   	
    			$new_list0[]= array('targetid'=>$s['id'],'title'=>$s['title'],'cover'=>$s['cover']);
	/*     		$list0[$key]['title'] = $s['title'];
	    		$list0[$key]['cover'] = $s['cover']; */
    		}
    	}
    	$this->assign('list0', $new_list0);
    	$this->assign('empty','<span class="empty">暂无内容</span>');
    	$this->assign('title', '我的下载');
    	$this->display(isset($_GET['type'])?'ios_down':'');
    }
    /**
     * 我的关注
     */
    public function follow(){
        if(isset($_GET['newid']) && $_GET['newid'] !=''){
            $newid = is_login_ios($_GET['newid']);
            if($newid<=0){
                $this->assign('empty','<span class="empty">暂无内容</span>');
                $this->assign('title', '我的关注');
                $this->display(isset($_GET['type'])?'ios_follow':'');
                exit();
            }else{
                $where['uid']=$newid;
            }
        }else{
            is_login();
            $id = getuser();
            $where['uid'] = $id['user_id'];
        }
    	$like = D('focus');
    	$where['type'] = 0;
    	$list0 = $like->where($where)->order('id desc')->select();//表情将该用户的所有喜爱查找出来
    	$emotion = D('emotion');
    	$new_list0 = array();
    	foreach ($list0 as $key=>$z){
    		$s = $emotion->where('id='.$z['cid'])->find();
    		if($s){
	    		$new_list0[]= array('cid'=>$s['id'],'title'=>$s['title'],'cover'=>$s['cover']);
	    		//$new_list0[$key]['cover'] = $s['cover'];
    		}
    	}
    	
    	$this->assign('list0', $new_list0);
    	$where['type'] = 1;
    	$list1 = $like->where($where)->order('id desc')->select();//壁纸
    	$album = D('album');
    	$new_list1 = array();
    	foreach ($list1 as $key=>$z){
    		$s = $album->where('id='.$z['cid'])->find();
    		if($s){
    			$new_list1[]= array('cid'=>$s['id'],'title'=>$s['title'],'cover'=>$s['cover']);
    		}
    	}
    	$this->assign('list1', $new_list1);
    	$where['type'] = 2;
    	$list2 = $like->where($where)->order('id desc')->select();//语音
    	$voice_card = D('voice_card');
    	$new_list2 = array();
    	foreach ($list2 as $key=>$z){
    		$s = $voice_card->where('id='.$z['cid'])->find();
    		if($s){
    			$new_list1[]= array('cid'=>$s['id'],'title'=>$s['title'],'cover'=>$s['cover']);
    		}
    	}
    	$this->assign('list2', $new_list2);
    	$this->assign('empty','<span class="empty">暂无内容</span>');
    	$this->assign('title', '我的关注');
    	$this->display(isset($_GET['type'])?'ios_follow':'');
    }
    /**
     * 更多
     */
    public function more(){
        if(isset($_GET['newid']) && $_GET['newid'] != ''){
            $newid = is_login_ios($_GET['newid']);
            $this->assign('is_login', $newid);
        }else{
            $id = getuser();
            $this->assign('is_login', $id['user_id']);
        }
    	$this->assign('title', '更多');
    	$this->display(isset($_GET['type'])?'ios_more':'');
    }
    /**
     * 我的点赞
     */
    public function nice(){
        //赞
    	$like = D('like');
        if(isset($_GET['newid']) && $_GET['newid'] !=''){
            $newid = is_login_ios($_GET['newid']);
            if($newid<=0){
                $this->assign('empty','<span class="empty">暂无内容</span>');
                $this->assign('title', '我的点赞');
                $this->display(isset($_GET['type'])?'ios_nice':'');
                exit();
            }else{
                $where['uid']=$newid;
            }
        }else{
            is_login();
            $id = getuser();
            $where['uid'] = $id['user_id'];
        }
    	$where['type'] = 0;
    	$list0 = $like->where($where)->order('id desc')->select();//表情
    	$emotion = D('emotion');
    	$new_list0 = array();
    	foreach ($list0 as $key=>$z){
    		$s = $emotion->where('id='.$z['targetid'])->find();
    		if($s){
    			$new_list0[]= array('targetid'=>$s['id'],'title'=>$s['title'],'cover'=>$s['cover']);
    			/* $list0[$key]['title'] = $s['title'];
    			$list0[$key]['cover'] = $s['cover']; */
    		}
    		
    	}
    	$this->assign('list0', $new_list0);
    	$where['type'] = 1;
    	$list1 = $like->where($where)->order('id desc')->select();//壁纸
    	$album = D('album');
    	$new_list1 = array();
    	foreach ($list1 as $key=>$z){
    		$s = $album->where('id='.$z['targetid'])->find();
    		if($s){
    			$new_list1[]= array('targetid'=>$s['id'],'title'=>$s['title'],'cover'=>$s['cover']);
    /* 			$list1[$key]['title'] = $s['title'];
    			$list1[$key]['cover'] = $s['cover']; */
    		}
    		
    	}
    	$this->assign('list1', $new_list1);
    	$where['type'] = 2;
    	$list2 = $like->where($where)->order('id desc')->select();//语音
    	$voice_card = D('voice_card');
    	$new_list2 = array();
    	foreach ($list2 as $key=>$z){
    		$s = $voice_card->where('targetid='.$z['targetid'])->find();
    		if($s){
    			$new_list2[]= array('targetid'=>$s['id'],'title'=>$s['title'],'cover'=>$s['cover']);
    			 /* $list2[$key]['title'] = $s['title'];
    			$list2[$key]['cover'] = $s['cover'];*/
    		}
    		
    	}
    	$this->assign('list2', $new_list2);
    	$this->assign('empty','<span class="empty">暂无内容</span>');
    	$this->assign('title', '我的点赞');
    	$this->display(isset($_GET['type'])?'ios_nice':'');
    }
    
    /**
     * 用户数据
     */
    public function data(){
         if(isset($_GET['newid']) && $_GET['newid'] !=''){
             $newid = is_login_ios($_GET['newid']);
            if($newid>0){
                 $user = M('User');
                 $cover = $user->where('id='.intval($newid))->find();
                 $cover['user_pic'] = $cover['cover'];
                 $this->assign('see', $cover);
            }
         }else{
             is_login();
             $this->assign('see', getuser());
         }
        //is_login();
        //$this->assign('see', getuser());
    	$this->assign('title', '用户信息');
    	$this->display(isset($_GET['type'])?'ios_data':'');
    }
    /**
     * 用户昵称修改
     */
    public function data_name(){
    	//is_login();
    	$this->assign('see', getuser());
    	$this->assign('title', '用户信息修改');
    	$this->display(isset($_GET['type'])?'ios_data_name':'');
    }
    /**
     * 获取用户信息
     */
    public function get_user_data(){
    	is_login();
    	$id = getuser();
    	$user = D('user');
    	$see = $user->where('id='.$id['user_id'])->find();
    	echo json_encode($see);
    }
    /**
     * 修改资料
     */
    public function edit(){
    	is_login();
    	$User = D('User');
    	$id = getuser();
    	$User->where('id='.$id['user_id'])->save($_POST);
    	if($_POST['nickname']!='') $_SESSION[C('SESSION_NAME')]['user_name'] = $_POST['nickname'];
    	cookie(md5("cute"),serialize($_SESSION[C('SESSION_NAME')]));  //设置cookie并数给
    	cookie(md5("cute"),serialize($_SESSION[C('SESSION_NAME')]),172800);
    	echo 1;
    }
    /**
     * 删除下载
     */
    public function del_down(){
    	is_login();
    	//赞
    	$id = getuser();
    	$down = D('down');
    	$where['uid'] = $id['user_id'];
    	$where['id'] = $_POST['id'];
    	$id = $down->where($where)->delete();//表情
    	echo 1;
    }
    /**
     * del_diy
     */
    public function del_diy(){
    	is_login();
    	//赞
    	$id = getuser();
    	$down = D('voice_card');
    	$where['uid'] = $id['user_id'];
    	$where['id'] = $_POST['id'];
    	$id = $down->where($where)->delete();//表情
    	echo 1;
    }
    /**
     * 关注删除
     */
    public function del_guanzhu(){
    	is_login();
    	//赞
    	$id = getuser();
    	$down = D('focus');
    	$where['uid'] = $id['user_id'];
    	$where['id'] = $_POST['id'];
    	$where['type'] = $_POST['type'];
    	$id = $down->where($where)->delete();//表情
    	echo 1;
    }
    /**
     * 用户昵称修改
     */
    public function data_gender(){
    	//is_login();
    	$id = getuser();
    	$user = D('user');
    	$see = $user->where('id='.$id['user_id'])->find();
    	$this->assign('see', $see);
    	$this->assign('title', '用户信息修改');
    	$this->display(isset($_GET['type'])?'ios_data_gender':'');
    }
    public function data_age(){
    	//is_login();
    	$id = getuser();
    	$user = D('user');
    	$see = $user->where('id='.$id['user_id'])->find();
    	$this->assign('see', $see);
    	$this->assign('title', '用户信息修改');
    	$this->display(isset($_GET['type'])?'ios_data_age':'');
    }
    public function data_region(){
    	//is_login();
    	$id = getuser();
    	$user = D('user');
    	$see = $user->where('id='.$id['user_id'])->find();
    	$this->assign('see', $see);
    	$this->assign('title', '用户信息修改');
    	$this->display(isset($_GET['type'])?'ios_data_region':'');
    }
    
    /**
     * 上传制做的语音
     */
    public function up_yuyin(){
    	$target_path  = "./public/user/";//接收文件目录
    	if(!is_dir($target_path)){
    		mkdir($target_path,0777,true);
    	}
    	$ext = pathinfo(basename($_FILES['uploadedfile']['name']));
    	$ext = strtolower($ext['extension']);
    	$new_file_name = substr(md5(time().rand(1000, 9999)),2,13).'.'.$ext;
    	$target_path = rtrim($target_path,'/').'/'.$new_file_name;//$target_path . basename( $_FILES['uploadedfile']['name']);
    	if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
    		$_SESSION['cuty_hk']['ly_url'] = $new_file_name;
    		echo $new_file_name;//"图片".$new_file_name. " 上传成功";
    		//up_qinu('http://www./up.php',array('img_url'=>'/upload/'.$new_file_name,'img'=>'/upload/'.$new_file_name));
    	}  else{
    		echo "no";//"There was an error uploading the file, please try again!" . $_FILES['uploadedfile']['error'];
    	}
    }
    /**
     * 修改用户头像
     */
    public function data_user_pic(){

    	
    	$target_path  = "./public/user/";//接收文件目录
    	if(!is_dir($target_path)){
    		mkdir($target_path,0777,true);
    	}	
    	$ext = pathinfo(basename($_FILES['uploadedfile']['name']));
    	$ext = strtolower($ext['extension']);
    	$new_file_name = substr(md5(time().rand(1000, 9999)),2,13).'.'.$ext;
    	
    	$target_path = rtrim($target_path,'/').'/'.$new_file_name;//$target_path . basename( $_FILES['uploadedfile']['name']);
    	if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
    		$newcover=$this->thumbpic($new_file_name);
    		echo $newcover;//"图片".$new_file_name. " 上传成功";

    		//up_qinu('http://www./up.php',array('img_url'=>'/upload/'.$new_file_name,'img'=>'/upload/'.$new_file_name));
    	}  else{
    		echo "no";//"There was an error uploading the file, please try again!" . $_FILES['uploadedfile']['error'];
    	}
    }
    /**
     * 
     */
    public function up_pic_line(){
    	$User = D('User');
    	$id = getuser();
    	$data['cover'] = $_POST['pic'];
    	//$_POST['user_id'] = $_POST['user_id']==''?720:$_POST['user_id'];
    	$User->where('id='.$id['user_id'])->save($data);
    	$_SESSION[C('SESSION_NAME')]['user_pic'] = $data['cover'];
    	cookie(md5("cute"),serialize($_SESSION[C('SESSION_NAME')]));  //设置cookie并数给
    	cookie(md5("cute"),serialize($_SESSION[C('SESSION_NAME')]),172800*365);
    	echo json_encode($_SESSION);
    }
    /**
     * 灌溉
     */
    public function poster(){
    	$ads = D('ads');
    	$ad_list = $ads->where('ad_type=0')->select();
    	foreach ($ad_list as $key=>$z){
    		$pic = json_decode($z['pics'],true);
    		$ad_list[$key]['pics'] = $pic[0]['url'];
    	}
    	$this->assign('ad_list', $ad_list);
    	$this->assign('title', '公告');
    	$this->display(isset($_GET['type'])?'ios_poster':'');
    }
    
    
    /**
     * 版本更新
     */
    public function version(){
    	echo '1.0';
    }
    /**
     * ios上传头像
     */
    public function iso_up(){
        if(isset($_POST['newid']) && $_POST['newid'] !=''){
            $newid = is_login_ios($_POST['newid']);
    	//有图为上传代码
    	//if(!empty($_FILES ['uploadFile'] ['name'])){
    		$base_path = "./public/user/"; //存放目录
    		if(!is_dir($base_path)){
    			mkdir($base_path,0777,true);
    		}
    		$target_path = $base_path . basename ( $_FILES ['uploadFile'] ['name'] );
    		$new_path2 = $base_path;
    		$ext = pathinfo($_FILES['uploadFile']['name']);
    		$ext = strtolower($ext['extension']);
    		$name = time();
    		$new_name = $new_path2.$name.'.'.$ext;
    		if (move_uploaded_file ( $_FILES ['uploadFile'] ['tmp_name'],  $new_name)) {
    			$array = array (
    					"status" => 1,
    					"msg" => '上传成功',
    					"pic" => $name.'.'.$ext
    			);
    			//$data['pic']         = $name.'.'.$ext;
    			//echo json_encode ( $array );
    			$newcover=$this->thumbpic($name.'.'.$ext);  
    			echo urlencode($newcover);
                $User = D('User');                
                $data['cover'] =$newcover;
                if($newid > 0){
                    $User->where('id='.$newid)->save($data);
                }
    			
    		} else {
    			$array = array (
    					"status" => 0,
    					"msg" => "There was an error uploading the file, please try again!" . $_FILES ['uploadFile'] ['error']
    			);
    			echo json_encode ( $array );
    			exit();
    		}
    	//}
        }
   }
   
   public function thumbpic($oldpic,$width=150,$height=150){
   	$newpic = time().sj(5).'.png';
   	$image = new \Think\Image();
   	$image->open('./public/user/'.$oldpic);
   	$image->thumb($width, $height,\Think\Image::IMAGE_THUMB_CENTER)->save('./public/user/'.$newpic);//保存新的地址
   	return 'http://www.cuteyep.com/app/public/user/'. $newpic;//返回一个新的地址
   }
   /**
    * 上传录音
    */
   public function ios_upfile(){
    $base_path = "./public/user/"; //存放目录
    if(!is_dir($base_path)){
        mkdir($base_path,0777,true);
    }
    $target_path = $base_path . basename ( $_FILES ['uploadFile'] ['name'] );
    $new_path2 = $base_path;
    $ext = pathinfo($_FILES['uploadFile']['name']);
    $ext = strtolower($ext['extension']);
    $name = time();
    $new_name = $new_path2.$name.'.'.$ext;
    if (move_uploaded_file ( $_FILES ['uploadFile'] ['tmp_name'],  $new_name)) {
        $array = array (
                "status" => 1,
                "msg" => '上传成功',
                "pic" => $name.'.'.$ext
        );
        echo json_encode($array);
    }else{
        $array = array (
                "status" => 0,
                "msg" => "There was an error uploading the file, please try again!" . $_FILES ['uploadFile'] ['error']
        );
        echo json_encode ( $array );
        exit();
    }
   	
   }

}