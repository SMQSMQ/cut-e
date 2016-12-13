<?php
if(!defined("YOURPHP")) exit("Access Denied");
class GuestbookAction extends BaseAction
{


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

		$this->dao= M(MODULE_NAME);
		$count = $this->dao->where($where)->count();
		if($count){
			import ( "@.ORG.Page" );
			$listRows =  !empty($cat['pagesize']) ? $cat['pagesize'] : C('PAGE_LISTROWS');		
			$page = new Page ( $count, $listRows );
			$page->urlrule = geturl($cat,'');
			$pages = $page->show();
			$field =  $this->module[$cat['moduleid']]['listfields'];
			$field =  $field ? $field : '*';
			$where['status']=1;
			$list = $this->dao->field($field)->where($where)->order('id desc')->limit($page->firstRow . ',' . $page->listRows)->select();
			$this->assign('pages',$pages);
			$this->assign('list',$list);
		}
        $this->display();
    }

	public function _before_insert(){
		$_POST['ip'] = get_client_ip();
	}

}
?>