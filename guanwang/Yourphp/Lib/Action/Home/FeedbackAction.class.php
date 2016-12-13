<?php
if(!defined("YOURPHP")) exit("Access Denied");
class FeedbackAction extends BaseAction
{
	function _initialize()
    {
        parent::_initialize();    
    }

    public function index()
    {
		$p= max(intval($_REQUEST[C('VAR_PAGE')]),1);
		if(empty($catid)) $catid =  intval($_REQUEST['id']);		
		$cat = $this->categorys[$catid];
		$this->assign($cat);
		$this->assign('catid',$catid);
		$bcid = explode(",",$cat['arrparentid']); 
		$bcid = $bcid[1]; 
		if($bcid == '') $bcid=intval($catid);
		$this->assign('bcid',$bcid);

		$this->assign ( 'fields', F($this->moduleid.'_Field') ); 
		$this->assign ( 'form', new Form() );

        $this->display();
    } 

	public function _before_insert(){
		$_POST['ip'] = get_client_ip();
	}

}
?>