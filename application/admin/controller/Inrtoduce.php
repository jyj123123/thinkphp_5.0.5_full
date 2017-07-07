<?php
namespace app\admin\controller;

use think\Controller;

/**栏目管理
 * Class Category
 * @package app\admin\controller
 */
class Inrtoduce extends Controller
{
 	protected $db;
   protected function _initialize(){
   parent::_initialize();
   $this->db =new \app\common\model\Inrtoduce();
}
   public function Inrtoduce()
    { 
        $field='';
        //资讯管理查询搜索
        if(request()->isPost()){
            $key = input('param.inrtoduce');
            //halt($key);
            $field = db('inrtoduce')->where('id|leibie|guige','like',"{$key}%")->select();
        }
       //halt($field);
        if($field){
               $this->assign('field',$field);
                return $this->fetch();
        }else{
        //获取资讯管理数据
         $field = db ('inrtoduce')->select();
         $this->assign('field',$field);
           return $this->fetch();
    }
    }
       
    
   //添加
    public function inrtoduce_add()
    {   
    	if(request()->isPost())
        {
            // halt($_POST);die;
    		//if($res['vaid']){}
        


           $res= $this->db->add(input('post.'));
           if($res['vaid'])
            {
                $this->success($res['aa'],'Inrtoduce/inrtoduce');exit;
            }else{
                $this->error($res['aa']);exit;
            }
    
     }
        return $this->fetch();
    }
      //资讯管理删除
    public function del(){
          $id =input('get.id');
        $res= db('inrtoduce')->where('id',$id)->delete();
        if($res){
            $this->success('删除成功','inrtoduce');exit;
        }else{
            $this->error('删除失败');exit;
        }

    }
        //资讯管理修改
   public function inrtoduce_upd()
    {
        $id = input('param.id');
      // halt($id);
        $oldData = $this->db->find($id);
        //halt($oldData);
        $this->assign('oldData',$oldData);
        if (request()->isPost())
        {
            //halt(input('post.'));
            $res = $this->db->upd(input('post.'));

            if($res['vaid'])
            {
                $this->success($res['message'],'Inrtoduce/inrtoduce');exit;

            }
            else{
                $this->error($res['message']);exit;
            }
        }
        return $this->fetch();
    }
}

   