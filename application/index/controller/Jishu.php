<?php
namespace app\index\controller;
use \think\View;
class Jishu
{
    public function jishu()
    {
        $view = new View();
        return $view->fetch("jishu");
    }

}