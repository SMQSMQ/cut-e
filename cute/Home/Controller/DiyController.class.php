<?php
namespace Home\Controller;
use Think\Controller;
class DiyController extends Controller {
/*     public function index(){
    	//echo json_encode($_SESSION);
    	//print_r($_SESSION['cuty_hk']);
    	$this->assign('title', '制作贺卡');
    	$this->display();
    } */
		/**
		 * 
		 */
     public function add(){

    	foreach ($_POST as $k=>$z){
    		$_SESSION['cuty_hk'][$k] = $z;
    	}
    	echo json_encode($_SESSION).json_encode($_COOKIE);
    	//if($_SESSION['cuty_hk']['ak']==1) $this->greeting_sava();

    	
    	
    } 
    /**
     * 制做选 择动画
     */
/*     public function greeting_card1(){
    	//获取
    	$voice_card_select = D('voice_card_select');
    	$list  = $voice_card_select->select();
    	$this->assign('list', $list);
    	$this->assign('title', '制作贺卡');
    	$this->display(isset($_GET['type'])?'ios_greeting_card1.html':'');
    } */
    /**
     * 制做选择音乐
     */
/*     public function greeting_card2_line(){
    	//获取
    	$voice_card_select = D('voice_card_select');
    	$list  = $voice_card_select->select();
    	$this->assign('list', $list);
    	$this->assign('title', '选择贺卡音乐');
    	$this->display(isset($_GET['type'])?'ios_greeting_card1.html':'');
    } */
    /**
     * 制做完成页面
     */
/*     public function greeting_card3(){
    	$id = isset($_GET['id'])?$_GET['id']:$_SESSION['cuty_hk']['voice_card_select_id'];
    	$voice_card_select = D('voice_card');
    	$see = $voice_card_select->where('id='.$id)->find();
    	$see['pics'] = json_decode($see['pics'],true);
    	$this->assign('see', $see);
    	$voice_card_select = D('voice_card_select');
    	$see2 = $voice_card_select->where('id='.$_SESSION['cuty_hk']['y_id'])->find();
    	if($see['media_url']!='') $see2['media_url'] = $see['media_url'];
    	$this->assign('see2', $see2);
    	//$this->assign('con', json_encode($_COOKIE));
    	$this->assign('title', '贺卡音乐制做预览');
    	//echo json_encode($_SESSION);
    	$this->display(isset($_GET['type'])?'ios_greeting_card1.html':'');
    } */
    /**
     * 制做薄层
     */
     public function greeting_sava(){
    	//is_login();
        if(isset($_POST['newid']) && $_POST['newid'] != ''){
            $newid = is_login_ios($_POST['newid']);
        }else{
            $id = getuser();
            $newid = $id['user_id'];
            if(!isset($id['user_id'])){
                $aid['id'] = 0;
                echo json_encode($aid);
                exit();
            }
        }
    	$voice_card = D('voice_card');																					
    	$voice_card_select = D('voice_card_select');
    	$data['title'] = isset($_SESSION['cuty_hk']['title'])?$_SESSION['cuty_hk']['title']:$_SESSION['cuty_hk']['title_mr'];
    	$data['uid'] = $newid;
    	$_SESSION['cuty_hk']['y_id'] = isset($_SESSION['cuty_hk']['y_id'])?$_SESSION['cuty_hk']['y_id']:$_SESSION['cuty_hk']['y_id_mr'];
    	if(isset($_SESSION['cuty_hk']['y_id'])){
    		$data['media'] = isset($_SESSION['cuty_hk']['y_id'])?$_SESSION['cuty_hk']['y_id']:$_SESSION['cuty_hk']['y_id_mr'];
    		$see2 = $voice_card_select->where('id='.$data['media'])->find();
    	}
    	$see = $voice_card_select->where('id='.$_SESSION['cuty_hk']['voice_card_select_id'])->find();
    	$data['cover']=$_SESSION['cuty_hk']['cover_mr'];
    	$data['h5_url']=$_SESSION['cuty_hk']['h5_url_mr'];
    	$data['pics'] = $see['pics'];
    	//
    	$data['media_url'] = $_SESSION['cuty_hk']['line_id']==0?$see2['media_url']:'http://www.cuteyep.com/app/public/user/'.$_POST['ly_file'];
    	$data['add_time'] = date('Y-m-d H:i:s');
    	$data['user_type'] = 1;
    	$data['is_line'] = isset($_SESSION['cuty_hk']['line_id'])?$_SESSION['cuty_hk']['line_id']:$_SESSION['cuty_hk']['line_id_mr'];
    	$data['memo'] = isset($_SESSION['cuty_hk']['con'])?$_SESSION['cuty_hk']['con']:$_SESSION['cuty_hk']['con_mr'];
    	$id = $voice_card->add($data);
    	$aid['id'] = $id;
    	$aid['title'] = $data['title'];
    	$aid['media_url'] = $data['media_url'];
    	$aid['memo'] = str_replace('，','',mb_substr($data['memo'],0,40,'utf-8'));//$_SESSION['cuty_hk']['con'];
        if(isset($_POST['newid']) && $_POST['newid'] != ''){
            $aid['url'] = "http://www.cuteyep.com/h5/index.php?s=Diy/greeting_card3_opp/type/1/id/".$id;       
        }else{
            $aid['url'] = "http://www.cuteyep.com/h5/index.php?s=Diy/greeting_card3_opp/id/".$id;       
        }
    	$aid['cover'] = $data['cover']==''?'http://www.cuteyep.com/app/public/images/cute-logo.png':$data['cover'];
    	echo json_encode($aid);
    } 
    
    /**
     * 后台上传预览
     */
/*     public function greeting_card3_opp(){
    	$Voice_card = D('Voice_card');
    	$see = $Voice_card->where('id='.$_GET['id'])->find();
    	$voice_card_select = D('voice_card_select');
    	$s = $voice_card_select->where('id='.$see['media'])->find();
    	$see['media_url'] = $s['media_url'];
    	$see['pics'] = json_decode($see['pics']);
    	$this->assign('see', $see);
    	$this->assign('title', '贺卡音乐查看');
    	$this->display(isset($_GET['type'])?'ios_greeting_card3_opp.html':'');
    } */
    
    public function greeting_card3_opp(){
    	$voice_card = D('voice_card');
      $see = $voice_card->where('id='.$_GET['id'])->find();
    	/*     选择标题 */
    	$voice_card_title = D('voice_card_title');
    	$text_title=$voice_card_title->field('id,title,con')->order('id desc')->select();
    	$this->assign('text_title', $text_title);
    	
    	/*    	选择音乐 */
    	$voice_card_select = D('voice_card_select');
    	$voice_title=$voice_card_select->field('id,title,cover,media_url')->order('id asc')->select();
    	$this->assign('voice_title', $voice_title);
    	$_SESSION['cuty_hk']['title_mr'] = $see['title'];
    	$_SESSION['cuty_hk']['con_mr'] = $see['memo'];
    	$_SESSION['cuty_hk']['y_id_mr'] = $voice_title[0]['id'];
    	$_SESSION['cuty_hk']['line_id_mr'] = 0;
    	$_SESSION['cuty_hk']['h5_url_mr'] = $see['h5_url'];
    	$_SESSION['cuty_hk']['cover_mr'] = $see['cover'];
    	$this->assign('title', $see['title']);
    	$this->assign('see', $see);
    	$this->display(isset($_GET['type'])?'ios_greeting_card3_opp':'');
    }
    /**
     *贺卡信息编辑
     */

    public function greeting_card3_opp_save(){
    	
    	foreach ($_POST as $k=>$z){
    		$_SESSION['cuty_hk'][$k] = $z;
    	}

    	
		$voice_card_select = D('voice_card_select');
 		is_login();
    	$id = getuser();
    	//公共的数据
    	$data['user_type'] = 1;
    	$data['title'] = isset($_SESSION['cuty_hk']['title'])?$_SESSION['cuty_hk']['title']:$_SESSION['cuty_hk']['title_mr'];
    	$data['memo'] = isset($_SESSION['cuty_hk']['memo'])?$_SESSION['cuty_hk']['memo']:$_SESSION['cuty_hk']['con_mr'];
    	$data['uid'] = $id['user_id'];
    	$data['add_time'] = date('Y-m-d H:i:s');
    	
    	//在线的数据
    	if(isset($_SESSION['cuty_hk']['id'])){
    		$media['id'] = $_SESSION['cuty_hk']['id'];
    		$see = $voice_card_select->where('id='.$media['id'])->find();
    		$data['cover']=$see['cover'];
    		$data['pics'] = $see['pics'];
    		$data['is_line'] = $_SESSION['cuty_hk']['is_line'];

    	}
    	$data['media_url'] = $_SESSION['cuty_hk']['is_line']==0?$see['media_url']:'http://www.cuteyep.com/app/public/user/'.$_POST['ly_file'];  

    	$voice_card = D('voice_card');    	
    	$id=$voice_card->add($data);
    	$aid['id'] = $id;
    	$aid['title'] = $data['title'];
    	$aid['media_url'] = $data['media_url'];
    	echo json_encode($aid);
   	
    }   
  public function exit_back(){
  	$_SESSION['cuty_hk'] = "";
  }
}