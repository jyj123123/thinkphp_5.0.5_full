<?php
namespace app\admin\controller;
use think\Controller;
use think\Request;
class Dengluyanzheng extends Controller
{
	
	public function __construct(Request $request = null)
	{   
	   parent::__construct($request);
	  // $_SESSION['admin']['id'];
	if(!session('admin.id'))
		{
			$this->redirect('admin/login/Login');
		}
	}
	
	
}




?>