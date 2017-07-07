<?php
namespace app\index\controller;
use \think\View;
class Gushi
{
    public function gushi()
    {
        $view = new View();
        return $view->fetch("gushi");
    }

}