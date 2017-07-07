<?php
namespace app\index\controller;
use \think\View;
class Jieshao
{
    public function jieshao()
    {
        $view = new View();
        return $view->fetch("jieshao");
    }

}