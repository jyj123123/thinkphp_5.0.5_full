<?php
namespace app\admin\controller;
use think\Controller;
use app\common\model\Admin;
class Changepassword extends Controller
{
	
	public function changepassword()
	{   
	   if(request()->isPost())
		{
			$res=(new Admin())->changepassword(input('post.'));
			if($res['valid'])
			{
				session(null);
				$this->success($res['msg'],'admin/login/login');exit;
			}else{
				$this->error($res['msg']);exit;
			}
		}
		return $this->fetch();
	}
	
	
}




?>