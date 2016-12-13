<?php
namespace Home\Controller;
use Think\Controller;
class DiyController extends Controller {

    public function greeting_card3_opp(){
    	$voice_card = D('voice_card');
        $see = $voice_card->where('id='.$_GET['id'])->find();
        if($_GET['id']==''){
        	redirect('index.php?s=Diy/noid');
        }
    	/*     选择标题 */
    	$voice_card_title = D('voice_card_title');
    	$text_title=$voice_card_title->field('title,con')->order('id desc')->select();
    	$this->assign('text_title', $text_title);
    
    	/*    	选择音乐 */
    	$voice_card_select = D('voice_card_select');
    	$voice_title=$voice_card_select->field('id,title,cover,media_url')->order('id desc')->select();
    	$title=$see['title'];
    	$this->assign('voice_title', $voice_title);
    	$this->assign('title', $title);
    	$this->assign('see',$see);  
    	$this->display(isset($_GET['type'])?'ios_greeting_card3_opp':'');
    }


    public function greeting_sava(){
     	$voice_card = D('voice_card');
    	$see = $voice_card->where('id='.$_POST['id'])->find();
    	if($_POST['id']==''){
    		redirect('index.php?s=Diy/noid');
    	}
    	$voice_card_select = D('voice_card_select');
 		
    		if(isset($_POST['y_id'])){    			
    			$see1 = $voice_card_select->where('id='.$_POST['y_id'])->find();
    			$data['media_url']=$see1['media_url'];
    			$data['pics']=$see1['pics']; 
    			$data['cover']=$see1['cover'];
    		}else{
    			$data['media_url']=$see['media_url'];
    			$data['pics']=$see['pics'];
    			$data['cover']='http://www.cuteyep.com/app/public/images/cute-logo.png';
    		}  
   			$data['title']= $_POST['title']==''?$see['title']:$_POST['title'];   			 
   			$data['memo'] =$_POST['con']==''?$see['memo']:$_POST['con'];
   			$data['is_line']=0;
   			$data['add_time'] = date('Y-m-d H:i:s');
   			$data['user_type'] = 1;  	
   			$data['h5_url'] = $see['h5_url'];
   			$shareid= $voice_card->add($data);
   		  echo $shareid;
/*     	$aid['title'] = $data['title'];
    	$aid['media_url'] = $data['media_url'];
    	$aid['memo'] = $_SESSION['cuty']['con'];
    	$aid['url'] = "http://www.cuteyep.com/h5/index.php?s=Diy/greeting_card3_opp/id/".$id;   	
    	$aid['cover'] = $data['cover']==''?'http://www.cuteyep.com/app/public/images/cute-logo.png':$data['cover']; */
    }
    
    public function noid(){   	
    	$this->display(isset($_GET['type'])?'ios_noid':'');
    }
    
    
}