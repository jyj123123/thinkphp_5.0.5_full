<?php
namespace app\index\controller;
use \think\View;
class Jidi
{
    public function jidi()
    {
        $view = new View();
        return $view->fetch("jidi");
    }

}