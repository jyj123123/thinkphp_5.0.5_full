<?php

namespace app\common\model;

use think\Loader;

use think\Model;

use think\Validate;

class  Admin  extends  Model {
  
  protected  $pk = "id";  //主键
  
  //设置当前模型对应的完整数据表名称
  protected $table = 'admin';
  
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
	  session('admin.id',$userInfo['id']);
	  session('admin.username',$userInfo['username']);
	  
	   session('admin.password',$userInfo['password']);
	  return ['valid'=>1,'msg'=>'登录成功了！！！！'];
	  
  }
	public function changepassword($data){
		$validate = new Validate([
			'password'  => 'require',
			'newpassword1' => 'require',
			'newpassword2' => 'require|confirm:newpassword1'
        ],[
			'password.require'=>'请输入原始密码',
			'newpassword1.require'=>'请输入新密码',
			'newpassword2.require'=>'请输入确认密码',
			'newpassword2.confirm'=>'确认密码和新密码不一致',
		]);
		if (!$validate->check($data)) {
			return ['valid'=>0,'msg'=>$validate->getError()];
			//dump($validate->getError());
		}
		
		$userInfo=$this->where('id',session('admin.id'))->where('password',$data['password'])->find();
		if(!$userInfo)
		{
			return ['valid'=>0,'msg'=>'原始密码不正确'];
		}
		$res = $this->save([
			'password'=>($data['newpassword1']),
			],[$this->pk=>session('admin.id')]);
			if($res)
			{
				return['valid'=>1,'msg'=>'密码修改成功'];
			}else{
				return['valid'=>0,'msg'=>'密码修改失败'];
			}
		
	}

	
}
