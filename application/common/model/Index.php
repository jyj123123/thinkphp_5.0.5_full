<?php

namespace app\common\model;

use think\Loader;

use think\Model;

use think\Validate;

class  Index  extends  Model {
  
  protected  $pk = "id";  //主键
  
  //设置当前模型对应的完整数据表名称
  protected $table = 'index';
  
  //登录
  public function login($data){
	  
	  //halt($data);
	  
	  //1.执行验证 
		$validate = Loader::validate('Admin');
		
		
		//如果验证码不通过
		if(!$validate->check($data)){
			//dump($validate->getError());
			return ['valid'=>0,'msg'=>$validate->getError()];
		}
	  
	  
	  //2.比对用户名和密码是否正确
	  $userInfo = $this->where('username',$data['username'])->where('password',$data['password'])->find();
	  
	  //halt($userInfo);
	  if(!$userInfo){
		  //说明在数据库未匹配到相关数据
		  return['valid'=>0,'msg'=>'用户或验证码不正确'];
	  }
	  
	  //3.将用户信息存入到session中
	  session('index.id',$userInfo['id']);
	  session('index.username',$userInfo['username']);
	  
	   session('index.password',$userInfo['password']);
	  return ['valid'=>1,'msg'=>'登录成功了！！！！'];
	  
  }
	
	
}
