<?php
if(!defined("YOURPHP")) exit("Access Denied");
class IndexAction extends BaseAction
{
    public function index()
    {

		$this->assign('bcid',0);
        $this->display();
    }
 
}
?>