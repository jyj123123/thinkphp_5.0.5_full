<?php
namespace app\admin\controller;
use think\Controller;
use app\common\model\Admin;
class Login extends Controller
{
	
	public function  login(){
	    
	
		
		
		if(request()->isPost()){
			
			//halt($_POST);
			
			$res = (new Admin())->login(input('post.'));
			
			if($res['valid']){
				
				//登录成功
				 $this->success($res['msg'],'index/index');exit;
				
			}else{
				
				//登录失败
				$this->error($res['msg']);exit;
				
			}
			
		}
		
		//加载登录模板
		return $this->fetch();
		
	}
	
	
	
	public function  loginout(){
		session(null);
		return $this->fetch('login/login');
	}
	
	
}




?>