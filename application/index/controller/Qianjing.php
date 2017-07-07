<?php
namespace app\index\controller;
use \think\View;
class Qianjing
{
    public function qianjing()
    {
        $view = new View();
        return $view->fetch("qianjing");
    }

}