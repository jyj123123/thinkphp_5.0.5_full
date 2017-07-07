<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/27
 * Time: 15:32
 */

namespace app\common\model;


use think\Model;
use think\Validate;

class User extends Model
{
    //protected $autoWriteTimestamp = true;
    protected $pk='id';

    protected $table='admin';

    //查询数据
    public function getIndex($data='')
    {
       // halt($data);
        if(!empty($data))
        {
            $result=$this->where('id',$data['id'])->find();
        }
        else
        {
            $result = $this->where($data)->select();
        }

       // halt($this->getLastSql($result));
        return $result;
    }

    //添加数据
    public function add($data)
    {
        $validate=Validate('User');

        //如果有id则用修改
        if(empty($data['id'])?'':$data['id'])
        {
            //判断原始密码是否正确
            $password=$this->db->where('password',$data['password'])->find();
            if($password)
            {
                $update=$this->allowField(true)->save([$data,['id'=>$data['id']]]);
            }
            else
            {
                $this->error('原密码错误');
            }

        }
        //否则走添加
        else
        {

            if(!$validate->check($data))
            {
                return ['valid'=>0,'msg'=>$validate->getError()];
            }
            $result=$this->allowField(true)->save($data);
            if($result)
            {
                return ['valid'=>1,'msg'=>'添加成功'];
            }
        }
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