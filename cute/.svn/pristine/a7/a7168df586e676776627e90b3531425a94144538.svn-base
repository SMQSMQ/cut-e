<?php
namespace Home\Controller;
use Think\Controller;
class GetidController extends Controller {
	/**
	 * 跨域获取newid
	 */
   
    public function getid(){
    	$id = getuser();
    	$con = json_encode($id['user_id']);
    	$data = '{"type":"success","msg":"1","tocon":'.$con.'}'; //json 数据
    	$callback = isset($_GET['callback']) ? trim($_GET['callback']) : '';
    	echo $callback . '(' . $data .')';  //返回格式，必需
    	exit();
    }
    
    
    
    
    
    
    
}