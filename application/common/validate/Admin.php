<?php
namespace app\common\validate;

use think\Validate;

class Admin extends Validate{

	protected $rule=[

		['username','require|alphaNum','用户名不能为空|用户名必须为字母或者数字'],
		['password','require|alphaNum','密码不能为空|密码必须为字母或者数字'],
		['spassword','require|alphaNum|confirm:password','密码不能为空|密码必须为字母或者数字|两次密码不一致'],
		['email','require|email','email不能为空|输入的email格式不正确'],
		['code','require|captcha','验证码不能为空|验证码不正确'],

	];
	protected $message=[
		'username.require'=>'请输入用户名',
		'password.require|length'=>'请输入密码|密码长度最少6位最多10位',
		'code.require'=>'请输入验证码',
		'code.captcha'=>'输入验证码错误',
		'new.require'=>'新密码不能为空',
		'pwd.require|confirm'=>'确认密码不能为空|两次密码不一致',
	];

	protected $scene=[
		'login'=>['username','password'],
		'change'=>['password','new','pwd'],
	];
}