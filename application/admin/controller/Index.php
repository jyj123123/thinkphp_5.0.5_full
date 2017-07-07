<?php
namespace app\admin\controller;
use think\Controller;
class Index extends Dengluyanzheng
{
	
	public function index()
	{   
	   //echo 'asdsadsad';
		return $this->fetch("index");
	}
	public function welcome()
	{   
	   
		return $this->fetch();
	}

}




?>