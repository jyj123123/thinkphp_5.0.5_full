<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
function status($status)
{
    if($status == 1)
    {
        $str = "<span class='label label-success radius'>审核</span>";
    }elseif($status == 0)
    {
        $str = "<span class='label label-error radius'>未审核</span>";
    }else{

        $str = "<span class='label label-success radius'>删除</span>";
    }
    return $str;
}

