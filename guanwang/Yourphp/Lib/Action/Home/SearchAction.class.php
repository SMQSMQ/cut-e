<?php
if(!defined("YOURPHP")) exit("Access Denied");
class SearchAction extends BaseAction
{

	function _initialize()
    {	
		parent::_initialize();
    }

    public function index()
    {
	
        $this->display();

    } 
}
?>