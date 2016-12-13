<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

    /**
     * 壁纸内容
     */
    public function wallpaper_con(){
    	$Album = D('Album');
    	$see = $Album->where('id='.$_GET['id'])->find();
    	$see['pics'] = json_decode($see['pics']);
    	$Focus = D('Focus');
    	$wf['type'] = 1;
    	$wf['cid'] = $_GET['id'];
    	$f = $Focus->where($wf)->find();
    	if($f) $see['is_gz'] = 1;
    	else   $see['is_gz'] = 0;
    	//$this->assign('see', $see);
    	//相关分类
    	$Class = D('Class');
    	$clist = $Class->where('id in ('.$see['re_class'].')')->select();
    	$this->assign('clist', $clist);
    	//相关壁纸
    	$list = $Album->where('id in ('.$see['re_album'].')')->select();
    	$this->assign('list', $list);
    	//赞
    	$like = D('like');
    	$slist = $like->where('targetid='.$_GET['id'].'&&type=1')->limit(3)->order('id desc')->select();
    	$count = $like->where('targetid='.$_GET['id'].'&&type=1')->count();
    	$user = D('user');
    	foreach ($slist as $key=>$z){
    		$s = $user->where('id='.$z['uid'])->find();
    		$slist[$key]['pic'] = $s['cover']==''?'http://www.cuteyep.com/app/public/images/cute-logo.png':$s['cover'];
    	}
    	$this->assign('slist', $slist);
    	$this->assign('count', $count);
    	$wf2['uid'] = $id['user_id'];
    	$wf2['type'] = 1;
    	$wf2['targetid'] = $_GET['id'];
    	$f = $like->where($wf2)->find();
    	if($f) $see['is_zan'] = 1;
    	else   $see['is_zan'] = 0;

      if ( strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger') ) {//微信浏览器
          $info = 1;
      }else{
          if(strpos($_SERVER["HTTP_USER_AGENT"],"iPhone"))      $info = 2;
          elseif(strpos($_SERVER["HTTP_USER_AGENT"],"Android")) $info = 3;
          else                                                  $info = 0;//pc
      }
      $this->assign('tipid',$info);
      
    	$this->assign('see', $see);
    	$this->assign('empty','<span class="empty">暂无</span>');
    	$this->assign('title', '壁纸详情');
    	$this->display(isset($_GET['type'])?'ios_wallpaper_con':'');
    }
    /**
     * 表情内容
     */
    public function expression_con(){
    	$Emotion = D('Emotion');
    	$see = $Emotion->where('id='.$_GET['id'])->find();//得到相对应的表情内容
    	$see['pics'] = json_decode($see['pics']);
    	$Focus = D('Focus');

    	$wf['uid'] = $id['user_id'];//关注的用户
    	$wf['type'] = 0;//关注的类型，是壁纸表情，还是语音
    	$wf['cid'] = $_GET['id'];//被关注者
    	$f = $Focus->where($wf)->find();
    	if($f) $see['is_gz'] = 1;
    	else   $see['is_gz'] = 0;

    	//相关表情
    	$bq_id = json_decode($see['re_emotion']);
    	$list = $Emotion->where('id in ('.implode(',', $bq_id).')')->select();
    	$this->assign('list', $list);
    	//赞
    	$like = D('like');
    	$slist = $like->where('targetid='.$_GET['id'].'&&type=0')->limit(3)->order('id desc')->select();
    	$count = $like->where('targetid='.$_GET['id'].'&&type=0')->count();
    	$user = D('user');
    	foreach ($slist as $key=>$z){
    		$s = $user->where('id='.$z['uid'])->find();
    		$slist[$key]['pic'] = $s['cover']==''?'http://www.cuteyep.com/app/public/images/cute-logo.png':$s['cover'];
    	}
    	$wf2['uid'] = $id['user_id'];
    	$wf2['type'] = 0;
    	$wf2['targetid'] = $_GET['id'];
    	$f = $like->where($wf2)->find();
    	if($f) $see['is_zan'] = 1;
    	else   $see['is_zan'] = 0;

      if ( strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger') ) {//微信浏览器
          $info = 1;
      }else{
          if(strpos($_SERVER["HTTP_USER_AGENT"],"iPhone"))      $info = 2;
          elseif(strpos($_SERVER["HTTP_USER_AGENT"],"Android")) $info = 3;
          else                                                  $info = 0;//pc
      }
      $this->assign('tipid',$info);

    	$this->assign('see', $see);
    	$this->assign('slist', $slist);
    	$this->assign('count', $count);
    	$this->assign('empty','<span class="empty">暂无内容</span>');
    	$this->assign('title', '表情详情');
    	$this->display(isset($_GET['type'])?'ios_expression_con':'');
    }
    /**
     * 语音贺卡内容
     */
    public function greeting_card_con(){
    	$Voice_card = D('Voice_card');
    	$see = $Voice_card->where('id='.$_GET['id'])->find();
    	$see['pics'] = json_decode($see['pics']);
    	$Focus = D('Focus');
    	$wf['uid'] = $id['user_id'];
    	$wf['type'] = 2;
    	$wf['cid'] = $_GET['id'];
    	$f = $Focus->where($wf)->find();
    	if($f) $see['is_gz'] = 1;
    	else   $see['is_gz'] = 0;

    	//相关表情
    	$list = $Voice_card->where('id in ('.$see['re_voice'].')')->select();
    	$this->assign('list', $list);
    	$this->assign('empty','<span class="empty">暂无</span>');

    	//赞
    	$like = D('like');
    	$slist = $like->where('targetid='.$_GET['id'].'&&type=2')->limit(3)->order('id desc')->select();
    	$count = $like->where('targetid='.$_GET['id'].'&&type=2')->count();
    	$user = D('user');
    	foreach ($slist as $key=>$z){
    		$s = $user->where('id='.$z['uid'])->find();
    		$slist[$key]['pic'] = $s['cover']==''?'http://www.cuteyep.com/app/public/images/cute-logo.png':$s['cover'];
    	}
    	$wf2['uid'] = $id['user_id'];
    	$wf2['type'] = 2;
    	$wf2['targetid'] = $_GET['id'];
    	$f = $like->where($wf2)->find();
    	if($f) $see['is_zan'] = 1;
    	else   $see['is_zan'] = 0;

      if ( strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger') ) {//微信浏览器
          $info = 1;
      }else{
          if(strpos($_SERVER["HTTP_USER_AGENT"],"iPhone"))      $info = 2;
          elseif(strpos($_SERVER["HTTP_USER_AGENT"],"Android")) $info = 3;
          else                                                  $info = 0;//pc
      }
      $this->assign('tipid',$info);

    	$this->assign('slist', $slist);
    	$this->assign('count', $count);
    	$this->assign('see', $see);
    	$this->assign('title', '语音贺卡详情');
    	$this->display(isset($_GET['type'])?'ios_greeting_card_con':'');
    }

    public function downapp(){

    $this->display(isset($_GET['type'])?'ios_downapp':'');

    }
}
