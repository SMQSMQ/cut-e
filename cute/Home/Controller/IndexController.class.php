<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	/**
	 * 获取启动页图片
	 */
	public function guid(){		
		$ads = D('ads');		
		$start_list = $ads->where('ad_type=5')->order('id desc')->select();
		$count = $ads->where('ad_type=5')->count();
		foreach ($start_list as $key=>$start){
			$pics =  json_decode($start['pics'],true);
			$start_list[$key]['pics'] = "<img src='".$pics[0]['url']."' />";
			$start_list[$key]['pic'] = $pics[0]['url'];
		};
		$list['count'] = $count;
		$list['list'] = $start_list;
		echo json_encode($list);
	}	
	/**
	 * 首页
	 */
    public function index(){//
    	$ads = D('ads');      	
    	//广告图

    	$ad_list = $ads->where('ad_type=4')->order('id desc')->find();
    	$ad_list['pics'] = json_decode($ad_list['pics'],true);

    	$ad_list['pic'] = $ad_list['pics'][0]['url'];
    	$this->assign('ad',$ad_list);

    	//焦点图
    	$ba_list = $ads->where('ad_type=1')->order('id desc')->select();
    	foreach ($ba_list as $key=>$ba){
    		$pics =  json_decode($ba['pics'],true);
    		$ba_list[$key]['pics'] = $pics[0]['url'];   		   		
			if($ba_list[$key]['ad_url']=='' || !preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $ba_list[$key]['ad_url'])){
	    			$ba_list[$key]['ad_url']= '';
	    		} 
    	};
    	
    	$this->assign('ba_list',$ba_list);
      //首页头部广告=>4
      $ad_list = $ads->where('ad_type=2')->order('id desc')->find();
    	$ad_list['pics'] = json_decode($ad_list['pics'],true);

    	$ad_list['pic'] = $ad_list['pics'][0]['url'];
    	$this->assign('ad2',$ad_list);

    	$ad_list = $ads->where('ad_type=3')->order('id desc')->find();
    	$ad_list['pics'] = json_decode($ad_list['pics'],true);

    	$ad_list['pic'] = $ad_list['pics'][0]['url'];
    	$this->assign('ad3',$ad_list);


    	//表情
    	$Emotion = D('Emotion');
    	$elist = $Emotion->where('recommend=1')->order('id desc')->limit(4)->select();

    	$this->assign('elist', $elist);
    	//语音贺卡
    	$voice_card = D('voice_card');
    	$vlist = $voice_card->where('recommend=1')->order('id desc')->limit(4)->select();
    	$this->assign('vlist', $vlist);
    	//壁纸
    	$Album = D('Album');
    	$alist = $Album->where('recommend=1')->order('id desc')->limit(4)->select();
    	$this->assign('alist', $alist);
    	$this->assign('title', '首页');
    	$this->display(isset($_GET['type'])?'ios_index':'');
    }
    /**
     * 壁纸
     */
    public function wallpaper(){
    	//分类
    	$page = 8;
    	$p = isset($_GET['p'])?$_GET['p']:1;
    	$class = M('Class');
    	$fl = $class->where('cid=0')->page($p.','.$page)->select();
    	$this->assign('fl', $fl);
    	//推荐
    	$Album = D('Album');
    	$list = $Album->where('recommend=1')->order('orderby asc,id desc')->page($p.','.$page)->select();
    	$this->assign('list', $list);
    	//人气
    	$rq_list = $Album->order('pv desc,id desc')->page($p.','.$page)->select();
    	$this->assign('rq_list', $rq_list);
    	//最新
    	$new_list = $Album->order('orderby asc,id desc')->page($p.','.$page)->select();
    	$this->assign('new_list', $new_list);
    	//获取tag
    	$Tag = M('Tag');
    	$tag_list = $Tag->where('tag_class=1')->select();
    	foreach ($tag_list as $key=>$z){
    		$list = $Album->where('cid='.$z['id'])->page($p.','.$page)->select();//将一个分类下的所有内容查找出；
    		$tag_list[$key]['list'] = $list;
    	}
    	$this->assign('tag_list', $tag_list);//所有分类下的所有内容
    	$this->assign('empty','<span class="empty">暂无内容</span>');
    	$this->assign('title', '壁纸');
    	$this->display(isset($_GET['type'])?'ios_wallpaper':'');
    }


    /**
     * 壁纸列表
     */
    public function wallpaper_list(){
    	$class = M('Class');
    	$fl = $class->where('id='.$_GET['id'])->find();
    	$this->assign('fl', $fl);

    	//获取分类列表
    	$Album = D('Album');
    	$list = $Album->where('class_id='.$_GET['id'])->order('id desc')->select();
    	$this->assign('list', $list);

    	$this->assign('title', $fl['title']);

    	$this->assign('empty','<span class="empty">暂无内容</span>');
    	$this->display(isset($_GET['type'])?'ios_wallpaper_list':'');



      // echo json_encode($list);

    }
    public function wallpaper_list_data(){
    	$page = 8;
    	$p = isset($_GET['p'])?$_GET['p']:1;
    	//获取分类列表
    	$Album = D('Album');
    	$list = $Album->where('class_id='.$_GET['id'])->order('id desc')->page($p.','.$page)->select();
    	$count = $Album->where('class_id='.$_GET['id'])->count();
    	$this->assign('list', $list);
    	$this->assign('title', $fl['title']);
    	$data['p'] = ceil($count/8);
    	$data['list'] = $list;
    	$data['msg'] = '';//这里处理获取数据错误提示如没加p
    	$data['type'] = $count;
    	echo json_encode($data);

    }
    /**
     * 壁纸异步加载
     */

     public function wallpaper_data(){

    	//获取tag
    	$Tag = M('Tag');
    	$tag_list = $Tag->where('tag_class=1')->select();

    	$page = 8;
    	$p = isset($_GET['p'])?$_GET['p']:1;
    	$tab_id=isset($_GET['tab_id'])?$_GET['tab_id']:-3;

    	foreach ($tag_list as $key =>$value){
    		$tag_id[]=$tag_list[$key]['id'];//查出对应标签的ID号，从而找出其子类
    	}

    	$Album = D('Album');
    	$total=$Album->select();
        $count =count($total);//所要的记录条数；
    	//分类
    	if ($tab_id==-3){
                $total=$Album->where('cid=0')->select();
                $count =count($total);//所要的记录条数；
        		$class = M('Class');
    			$list = $class->where('cid=0')->order('id desc')->page($p.','.$page)->select();
    		}
    	//推荐
    	if ($tab_id==0){
            $total=$Album->where('recommend=1')->select();
            $count =count($total);//所要的记录条数；
    		$list = $Album->where('recommend=1')->order('id desc')->page($p.','.$page)->select();
    	}
    	//人气
    	if ($tab_id==-1){
    		$list = $Album->order('pv desc')->page($p.','.$page)->select();//查看次数
    	}

    	//最新
    	if ($tab_id==-2){
    		$list = $Album->order('id desc')->page($p.','.$page)->select();
    	}
    	//获取tag

    	foreach ($tag_id as $z){

    		if ($tab_id==$z){
    			$list = $Album->where('cid='.$z)->order('id desc')->page($p.','.$page)->select();
    			$total=$Album->where('cid='.$z)->select();
    			$count =count($total);

    		}
    	}


    	$data['allp'] = ceil($count/8);
    	$data['list'] = $list;
    	$data['msg'] = '';//这里处理获取数据错误提示如没加p
    	$data['total'] = $count;
    	echo json_encode($data);


    }
    /**
     * 表情
     */
    public function expression(){

    	$Emotion = D('Emotion');

    	$list = $Emotion->where('recommend=1')->order('orderby asc,id desc')->select();
    	$this->assign('list', $list);
    	//人气
    	$rq_list = $Emotion->order('pv desc')->select();
    	$this->assign('rq_list', $rq_list);
    	//最新
    	$new_list = $Emotion->order('orderby asc,id desc')->select();
    	$this->assign('new_list', $new_list);
    	//获取tag
    	$Tag = M('Tag');
    	$tag_list = $Tag->where('tag_class=2')->select();
    	foreach ($tag_list as $key=>$z){
    		$list = $Emotion->where('cid='.$z['id'])->select();
    		$tag_list[$key]['list'] = $list;
    	}
    	$this->assign('tag_list', $tag_list);
    	$this->assign('empty','<span class="empty">暂无内容</span>');

    	$this->assign('title', '表情');
    	$this->display(isset($_GET['type'])?'ios_expression':'');
    }
    /**
     * 表情异步加载
     */
    public function expression_data(){

   	//获取tag
	    	$Tag = M('Tag');
	    	$tag_list = $Tag->where('tag_class=2')->select();
        	foreach ($tag_list as $key =>$value){
    		$tag_id[]=$tag_list[$key]['id'];
    				}
    		$page = 8;
    		$p = isset($_GET['p'])?$_GET['p']:1;
 			$tab_id=isset($_GET['tab_id'])?$_GET['tab_id']:0;

 			$Emotion = D('Emotion');
 			$total=$Emotion->select();
 			$count =count($total);//所要的记录条数；

    		//推荐
    		if ($tab_id==0){
        		$list = $Emotion->where('recommend=1')->order('id desc')->page($p.','.$page)->select();
                $total=$Emotion->where('recommend=1')->select();
                $count =count($total);//所要的记录条数；
    		}
    		//人气
			if ($tab_id==-1){
    		$list = $Emotion->order('pv desc')->page($p.','.$page)->select();
				}
    		//最新
				if ($tab_id==-2){
    		$list = $Emotion->order('id desc')->page($p.','.$page)->select();
				}
    		//获取tag

    		foreach ($tag_id as $z){
    			if ($tab_id==$z){
    			$list = $Emotion->where('cid='.$z)->order('id desc')->page($p.','.$page)->select();
    			$total=$Emotion->where('cid='.$z)->select();
    			$count =count($total);
    		}
			}
			$data['allp'] = ceil($count/8);
			$data['list'] = $list;
			$data['msg'] = '';//这里处理获取数据错误提示如没加p
			$data['total'] = $count;
			echo json_encode($data);

   }
    /**
     * 语音贺卡
     */

    public function greeting_card(){
    	$Emotion = D('voice_card');
    	$where['user_type'] = 0;


    	//获取tag
    	$Tag = M('Tag');
    	$tag_list = $Tag->where('tag_class=3')->select();
    	foreach ($tag_list as $key=>$z){
    		$list = $Emotion->where($where)->where('cid='.$z['id'])->select();
    		$tag_list[$key]['list'] = $list;
    	}
    	$this->assign('tag_list', $tag_list);
    	$this->assign('empty','<span class="empty">暂无内容</span>');
    	$this->assign('title', '语音贺卡');
    	$this->display(isset($_GET['type'])?'ios_greeting_card':'');
    }
        /**
     * 语音贺卡异步加载
     */

    public function greeting_card_data(){

    	//获取tag
 		$Tag = M('Tag');
    	$tag_list = $Tag->where('tag_class=3')->select();

    	$page = 8;
    	$p = isset($_GET['p'])?$_GET['p']:1;
    	$tab_id=isset($_GET['tab_id'])?$_GET['tab_id']:0;

    	foreach ($tag_list as $key =>$value){
    		$tag_id[]=$tag_list[$key]['id'];
    	}

 	 	$voice_card = D('voice_card');
 	 	$where['user_type'] = 0;	 	
 	 	$total=$voice_card->where($where)->select();
 	 	$count =count($total);//所要的记录条数；

    	//推荐;
    	if ($tab_id==0){
    		$list = $voice_card->where('recommend=1')->order('id desc')->page($p.','.$page)->select();
            $total=$voice_card->where('recommend=1')->select();
            $count =count($total);//所要的记录条数；
    	}
    	//人气
    	if ($tab_id==-1){
    		$list = $voice_card->where($where)->order('pv desc')->page($p.','.$page)->select();
    	}

    	//最新
    	if ($tab_id==-2){
    		$list = $voice_card->where($where)->order('id desc')->page($p.','.$page)->select();
    	}
    	//获取tag

    	foreach ($tag_id as $z){

    		if ($tab_id==$z){
    			$list = $voice_card->where($where)->where('cid='.$z)->order('id desc')->page($p.','.$page)->select();
    			$total=$voice_card->where($where)->where('cid='.$z)->select();
    			$count =count($total);

    		}

    	}

    	$data['allp'] = ceil($count/8);
      // dump($data['allp']);
    	$data['list'] = $list;
    	$data['msg'] = '';//这里处理获取数据错误提示如没加p
    	$data['total'] = $count;
    	echo json_encode($data);

    }

    /**
     * 我
     */
    public function me(){
    	if(isset($_COOKIE[md5('cute')])){
    		$a = unserialize($_COOKIE[md5('cute')]);
    		if($a['user_name']=='') $a['user_name'] = '设置昵称';
    	}else                     $a['user_name'] = '登录';

    	$this->assign('see', $a);
    	$this->assign('title', '我');
    	$this->display(isset($_GET['type'])?'ios_me':'');
    }
    /**
     * 搜索
     */

    public function search(){
    	$search = D('search');
    	$hot=$search->order('id desc')->select();
    	if(isset($_GET['wd'])){
    		$map['title']  = array('like','%'.$_GET['wd'].'%');
    		$road = D('emotion');
    		$list = $road->where($map)->select();
    		$road = D('voice_card');
    		$list2 = $road->where($map)->select();
    		$road = D('album');
    		$list1 = $road->where($map)->select();
    	}
    	$this->assign('hot', $hot);
    	$this->assign('list', $list);
    	$this->assign('list1', $list1);
    	$this->assign('list2', $list2);
    	$this->assign('title', '搜索');
    	$this->assign('empty','<span class="empty">暂无内容</span>');
    	$this->display(isset($_GET['type'])?'ios_search':'');
    }
    /**
     * 壁纸内容
     */
    public function wallpaper_con(){
    	$Album = D('Album');
    	$see = $Album->where('id='.$_GET['id'])->find();
    	$see['pics'] = json_decode($see['pics']);
    	$data['pv'] = array('exp','pv+1');//浏览量+1
    	$Album->where('id='.$_GET['id'])->save($data); // 根据条件保存修改的数据
    	$see['pv']=$see['pv']+1;
    	$Focus = D('Focus');
        if($_GET['newid'] != ''){
            $newid = is_login_ios($_GET['newid']);
        }else{
            $id = getuser();
            $newid = $id['user_id'];
        }
    	$wf['uid'] = $newid;
    	$wf['type'] = 1;
    	$wf['cid'] = $_GET['id'];
    	$f = $Focus->where($wf)->find();
    	if($f) $see['is_gz'] = 1;
    	else   $see['is_gz'] = 0;
    	//$this->assign('see', $see);
    	$ads = D('ads');
    	$ad_url = $ads->where('ad_type=7')->find();
    	$this->assign('ad_url', $ad_url);
    	
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
    	$wf2['uid'] = $newid;
    	$wf2['type'] = 1;
    	$wf2['targetid'] = $_GET['id'];
    	$f = $like->where($wf2)->find();
    	if($f) $see['is_zan'] = 1;
    	else   $see['is_zan'] = 0;
    	
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
    	$see = $Emotion->where('id='.$_GET['id'])->find();
    	$data['pv'] = array('exp','pv+1');//浏览量+1
    	$Emotion->where('id='.$_GET['id'])->save($data); // 根据条件保存修改的数据
    	$see['pv']=$see['pv']+1;
    	$see['pics'] = json_decode($see['pics']);
    	$Focus = D('Focus');
        if($_GET['newid'] != ''){
            $newid = is_login_ios($_GET['newid']);
        }else{
            $id = getuser();
            $newid = $id['user_id'];
        }
    	$wf['uid'] = $newid;
    	$wf['type'] = 0;
    	$wf['cid'] = $_GET['id'];
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
    	$wf2['uid'] = $newid;
    	$wf2['type'] = 0;
    	$wf2['targetid'] = $_GET['id'];
    	$f = $like->where($wf2)->find();
    	if($f) $see['is_zan'] = 1;
    	else   $see['is_zan'] = 0;
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
    	$data['pv'] = array('exp','pv+1');//浏览量+1
    	$Voice_card->where('id='.$_GET['id'])->save($data); // 根据条件保存修改的数据
    	$see['pv']=$see['pv']+1;
    	$Focus = D('Focus');
        if($_GET['newid'] != ''){
            $newid = is_login_ios($_GET['newid']);
        }else{
            $id = getuser();
            $newid = $id['user_id'];
        }
    	$wf['uid'] = $newid;
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
    	$wf2['uid'] = $newid;
    	$wf2['type'] = 2;
    	$wf2['targetid'] = $_GET['id'];
    	$f = $like->where($wf2)->find();
    	if($f) $see['is_zan'] = 1;
    	else   $see['is_zan'] = 0;
    	$this->assign('slist', $slist);
    	$this->assign('count', $count);
    	$this->assign('see', $see);
    	$this->assign('title', '语音贺卡详情');
    	$this->display(isset($_GET['type'])?'ios_greeting_card_con':'');
    }


    /**
     * 网络
     */
    public function iswork(){
    	echo 1;
    }
    /**
     * 安卓关注
     */
    public function is_guanzhu(){
    	$id = getuser();
    	if($id['user_id']>0){//写入
    		$focus = D('focus');

    		$see = $focus->where('uid='.$id['user_id'].'&&cid='.$_POST['id'].'&&type='.$_POST['type'])->find();
    		if($see){
           		 $focus->where('id='.$see['id'])->delete();
    		}else{
          $data['uid'] = $id['user_id'];
          $data['cid'] = $_POST['id'];
          $data['type'] = $_POST['type'];
          $data['add_time'] = time();
          $aid = $focus->add($data);
        }
    	}
    	echo $id['user_id'];
    }
    /**
     *苹果关注
     */
    public function ios_is_guanzhu(){
    	if(isset($_POST['newid']) && $_POST['newid'] !=''){
        $newid = is_login_ios($_POST['newid']);
    	}
    	if($newid>0){//写入
    		$focus = D('focus');
    
    		$see = $focus->where('uid='.$newid.'&&cid='.$_POST['id'].'&&type='.$_POST['type'])->find();
    		if($see){
    			$focus->where('id='.$see['id'])->delete();
    		}else{
    			$data['uid'] = $newid;
    			$data['cid'] = $_POST['id'];
    			$data['type'] = $_POST['type'];
    			$data['add_time'] = time();
    			$aid = $focus->add($data);
    		}
    	}
    	echo $newid;
    }
    
    /**
     * 安卓赞
     */
    public function is_zan(){
    	$id = getuser();
    	if($id['user_id']>0){//写入
    		$focus = D('like');
    		$see = $focus->where('uid='.$id['user_id'].'&&targetid='.$_POST['id'].'&&type='.$_POST['type'])->find();
    		if($see){
    			$focus->where('id='.$see['id'])->delete();
    		}else{
                $data['uid'] = $id['user_id'];
                $data['targetid'] = $_POST['id'];
                $data['type'] = $_POST['type'];
                $data['add_time'] = time();
                $aid = $focus->add($data);
            }
    	}
    	echo $id['user_id'];
    }
    /**
     * 苹果赞
     */
    public function ios_is_zan(){
        if(isset($_POST['newid']) && $_POST['newid'] !=''){
        $newid = is_login_ios($_POST['newid']);
    	}
    	if($newid>0){//写入
    		$focus = D('like');
    		$see = $focus->where('uid='.$newid.'&&targetid='.$_POST['id'].'&&type='.$_POST['type'])->find();
    		if($see){
				$focus->where('id='.$see['id'])->delete();
    		}else{
                $data['uid'] = $newid;
                $data['targetid'] = $_POST['id'];
                $data['type'] = $_POST['type'];
                $data['add_time'] = time();
                $aid = $focus->add($data);
            }
    	}
    	echo $newid;
    }

    /**
     * 下载
     */
    public function is_down(){
    	$id = getuser();
    	if($id['user_id']>0){//写入
    		$focus = D('down');
    		$see = $focus->where('uid='.$id['user_id'].'&&targetid='.$_POST['id'].'&&type='.$_POST['type'])->find();
    		if($see){
    			$focus->where('id='.$see['id'])->delete();
    		}
    		$data['uid'] = $id['user_id'];
    		$data['targetid'] = $_POST['id'];
    		$data['type'] = $_POST['type'];
    		$data['add_time'] = time();
    		$aid = $focus->add($data);
    	}
    	echo $id['user_id'];
    }
    /**
     * 赞列表
     */
    public function like_list(){

    	$like = D('like');
    	$list = $like->where('targetid='.$_GET['id'].'&&type='.$_GET['t'])->order('id desc')->select();
    	$user = D('user');
    	foreach ($list as $key=>$z){
    		$see = $user->where('id='.$z['uid'])->find();
    		$list[$key]['cover'] = $see['cover']=='http://www.cuteyep.com/app/public/images/cute-logo.png'?'':$see['cover'];
    		$list[$key]['name'] = $see['nickname'];
    	}
    	$this->assign('list', $list);
    	$this->assign('empty','<span class="empty">还没收到赞</span>');
    	$this->assign('title', '全部赞');
    	$this->display(isset($_GET['type'])?'ios_like_list':'');
    }

    /**
     * auto页面自定义
     */
    public function auto_page(){
    	$html = file_get_contents($_POST['posturl']);
    	preg_match("/<body.*?>(.*?)<\/body>/is", $html, $match1);
    	echo $bodystr = trim($match1[1]);
    }
    /**
     * 自定义
     */
    public function wallpaper_con_view(){
    	$Album = D('Album');
    	$see = $Album->where('id='.$_GET['id'])->find();
    	$see['pics'] = json_decode($see['pics']);
    	$this->assign('see', $see);

    	$this->assign('title', '壁纸查看');
    	$this->display(isset($_GET['type'])?'ios_wallpaper_con_view':'');
    }



}
