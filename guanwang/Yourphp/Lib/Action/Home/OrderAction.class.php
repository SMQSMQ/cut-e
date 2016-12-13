<?php
if(!defined("YOURPHP")) exit("Access Denied");
class OrderAction extends BaseAction
{
    public function index()
    {	
		$buy = intval($_REQUEST['buy']);


		import("@.ORG.SysCrypt");
		$productid = $_REQUEST['productid'];
		$sc = new SysCrypt(C('ADMIN_ACCESS'));
		$catid = $_REQUEST['id'];

		$cart=$sc->php_decrypt($_COOKIE['yourphp_cart']);
		$cart=unserialize($cart);
		foreach((array)$cart['productlist'] as $key =>$rs){
			$cart['totalnum'] +=$rs['num'];
			$cart['totalprice'] += $rs['num']*$rs['price'];
			$cart['productlist'][$key]['countprice'] = $rs['num']*$rs['price'];
		}
		$time=time();
		$_POST['module'] = $this->categorys[$catid]['module'];
		$_POST['userid'] = intval($_COOKIE['userid']);
		$_POST['username'] = $_COOKIE['username'];
		$_POST['productlist'] = serialize($cart['productlist']);
		$_POST['price'] = $cart['totalprice'];
		$_POST['createtime'] = $time;
		$_POST['updatetime'] = $time;
		$_POST['ip'] = get_client_ip();
 
		if($_POST['do']){
			
			$model =M('Order');
			if (false === $model->create ()) {
				$this->error ( $model->getError () );
			}
			$orderid = $model->add();

			if ($orderid) {
				$sn =  str_replace("-","",date("Y-m-dH-i-s"));
				$sn = 'YP'.$sn. sprintf('%06d',$orderid);  
				 
				$model->save(array(id=>$orderid,sn=>$sn));
			}else{
				$this->error ($model->getDbError());
			}

			cookie('yourphp_cart',null);
			$orderinfo = $model->find($orderid);
			$cart['sn']=$orderinfo['sn'];
			//$orderinfo['productlist'] = unserialize($orderinfo['productlist']);
		}

		$this->assign('cart',$cart);

		
		


				 
		$p= max(intval($_REQUEST[C('VAR_PAGE')]),1);
		if(empty($catid)) $catid =  intval($_REQUEST['id']);		
		$cat = $this->categorys[$catid];
		$this->assign($cat);
		$this->assign('catid',$catid);
		$bcid = explode(",",$cat['arrparentid']); 
		$bcid = $bcid[1]; 
		if($bcid == '') $bcid=intval($catid);
		$this->assign('bcid',$bcid);
		$this->assign('buy',$buy);

        $this->display();
    }

	public function _before_insert(){
		$_POST['ip'] = get_client_ip();
	}

	public function ajax(){
		import("@.ORG.SysCrypt");
		$productid = $_REQUEST['productid'];
		$num = $_REQUEST['num'];
		$sc = new SysCrypt(C('ADMIN_ACCESS'));

		if($_REQUEST['del']){
			$cart=$sc->php_decrypt($_COOKIE['yourphp_cart']);
			$cart=unserialize($cart);
			unset($cart['productlist'][$productid]);
			$cart_str=$sc->php_encrypt(serialize($cart));
			cookie('yourphp_cart',$cart_str);
			unset($cart_str);
			echo json_encode($cart);exit;
		
		}

		if(!empty($_COOKIE['yourphp_cart'])){			
			$cart=$sc->php_decrypt($_COOKIE['yourphp_cart']);
			$cart=unserialize($cart);
		}else{
			$user=M('User')->find($_COOKIE['userid']);
			$cart=array(
					'realname'=>$user['realname'],
					'tel'=>$user['tel'],
					'address'=>$user['address'],
					'email'=>$user['email'],
					'mobile'=>$user['mobile'],
					'fax'=>$user['fax'],
					'zipcode'=>$user['zipcode'],
					'productlist'=>array()
			);
			unset($user);			
		}
		$num = $num? $num :1;
		if($productid){
			if(empty($cart['productlist'][$productid])){//cookie无此数据
				$rs=M('Product')->find($productid);				
				$cart['productlist'][$rs['id']]=array('id'=>$rs['id'],'catid'=>$rs['catid'],'title'=>$rs['title'],'thumb'=>$rs['thumb'],'num'=>$num,'price'=>$rs['price'] );
			}else{
				$cart['productlist'][$productid]['num'] =$num;
			}
		}
		$cart_str=$sc->php_encrypt(serialize($cart));
		cookie('yourphp_cart',$cart_str);
		unset($cart_str);
		echo json_encode($cart);exit;

	}
	public function show(){
		$sn = $_REQUEST['sn'];
		$id= $_REQUEST['id'];
		$model =M('Order');
		if($sn){
			$cart = $model->getBySn($sn); 
		}elseif($id){
		   $cart = $model->find($orderid); 
		}else{
			$this->error ( L('do_empty'));
		}
		 
		$cart['productlist']=unserialize($cart['productlist']);

		foreach((array)$cart['productlist'] as $key =>$rs){
			$cart['totalnum'] +=$rs['num'];
			$cart['totalprice'] += $rs['num']*$rs['price'];
			$cart['productlist'][$key]['countprice'] = $rs['num']*$rs['price'];
		}
		$this->assign('cart',$cart);
		$this->display();
		
	}

}
?>