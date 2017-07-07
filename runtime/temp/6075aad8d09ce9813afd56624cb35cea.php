<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:90:"D:\WorkSofe\wamp\www\thinkphp_5.0.5_full\public/../application/index\view\index\index.html";i:1499129163;s:92:"D:\WorkSofe\wamp\www\thinkphp_5.0.5_full\public/../application/index\view\public\header.html";i:1498725692;s:90:"D:\WorkSofe\wamp\www\thinkphp_5.0.5_full\public/../application/index\view\public\menu.html";i:1498640147;s:92:"D:\WorkSofe\wamp\www\thinkphp_5.0.5_full\public/../application/index\view\public\footer.html";i:1498639441;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="author" content="$Id$" />
    <meta http-equiv="copyright" content="Copyright (C) 2013 * All rights reserved." />
    <meta http-equiv="keywords" content="关键字" />
    <meta http-equiv="description" content="描述" />
    <link type="text/css" href="__CSS__/index/css/style.css" rel="stylesheet" rev="stylesheet" media="screen" />
    <title>首页</title>
</head>

<body>


<div class="centBox">
	<div class="top">
    	<span>【<a href="<?php echo url('login/login'); ?>">登陆管理</a> 】 【<a href="#">申请入驻</a>】  【<a href="#">前往采购</a>】  【<a href="#">联系我们</a>】【<a href="<?php echo url('login/login'); ?>">退出登录</a>】</span>
    	<?php echo session('index.username'); ?>您好！欢迎来到中江县名优产品展销平台!     您遇到任何疑问请致电：0838 -6668888   
    </div>
    <div class="top2">
    	<div class="top2R">
        	<div class="soru">
            	<input name="" type="text" class="soru_input" />
            </div>
            <input name="" type="submit" class="soru_banu" />
        </div>
    	<div class="logo">
        	<a href="#" class="logo_a">中江名优特产</a>
        </div>
    </div>
</div>
<div class="nav">
    <div class="nav_nei">
        <div class="natebia_ji"></div>
        <div class="natebia"><a href="#" class="natebia_a">特别推荐</a></div>
        <div class="navR">
            <ul>
                <li class="navR_bg"><a href="<?php echo url('message/message'); ?>">给我留言</a></li>
                <li><a href="<?php echo url('py/py'); ?>">交易专区</a></li>
                <li><a href="<?php echo url('cooperation/cooperation'); ?>">合作社</a></li>
                <li><a href="<?php echo url('dynamic/dynamic'); ?>" >行业动态</a></li>
                <li><a href="<?php echo url('index/index'); ?>">网站首页</a></li>
            </ul>
        </div>
    </div>
</div><!-- class="xuanz" -->
<div class="centBox">
    <div class="banner">
        <div class="banL">
            <div class="yuyue">
                <p><a href="#"><img src="__CSS__/index/text/1.gif" width="232" height="213" alt="" />
                    中江瓜蒌</a></p>
                <p><a href="#" class="yuyue_a"></a></p>
            </div>
        </div>
        <div class="banR">
            <div class="banR_pt">
                <a href="#"><img src="__CSS__/index/text/2.gif" width="736" height="274" alt="" /></a>            </div>
            <div class="banR_anl">
                <a href="#"></a>
                <a href="#" class="xuanz"></a>
                <a href="#"></a>
            </div>
        </div>
    </div>
    <div class="mian">
        <div class="mianL">
            <div class="mianTop">
                <span class="mianT_span">特产一览│SPECIALTIES LIST</span>
                <a href="#">更多&gt;&gt;</a>
            </div>
            <div class="mianText">
			 <?php if(is_array($field) || $field instanceof \think\Collection || $field instanceof \think\Paginator): if( count($field)==0 ) : echo "" ;else: foreach($field as $key=>$vo): ?>
                <ul>
                    <li>
                        <p><a href="#"><img src="<?php echo $vo['article_image']; ?>" width="208" height="177" alt="" /><?php echo $vo['article_title']; ?></a></p>
                        <p><a href="#" class="yuyue_a"></a></p>
                    </li>
                </ul>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>
        <div class="mianR">
            <div class="hezuo">
                <div class="hezuo_top">推荐合作单位</div>
                <div class="hezuo_text">
                    <ul>
                        <li><a href="<?php echo url('cooperation/cooperation'); ?>"><img src="__CSS__/index/text/9.gif" width="206" height="60" alt="" /></a></li>
                        <li><a href="<?php echo url('cooperation/cooperation'); ?>"><img src="__CSS__/index/text/10.gif" width="206" height="60" alt="" /></a></li>
                        <li><a href="<?php echo url('cooperation/cooperation'); ?>"><img src="__CSS__/index/text/11.gif" width="206" height="60" alt="" /></a></li>
                        <li><a href="<?php echo url('cooperation/cooperation'); ?>"><img src="__CSS__/index/text/12.gif" width="206" height="60" alt="" /></a></li>
                        <li><a href="<?php echo url('cooperation/cooperation'); ?>"><img src="__CSS__/index/text/13.gif" width="206" height="60" alt="" /></a></li>
                    </ul>
                </div>
            </div>
            <div class="hezAd">
                <img src="__CSS__/index/text/14.gif" />
                <a href="#" class="hezL01"></a>
                <a href="#" class="hezL02"></a>
            </div>
        </div>
    </div>
    <div class="mian3">
        <div class="mian3_top">
            <span class="mianT_span">资讯& 商机│IT & BUSINESS</span>
        </div>
        <div class="mian3_text">
            <div class="gonggao">
                <div class="gonggao_top">最新交易公告</div>
                <div class="gonggao_text">
                    <ul>
                        <li><a href="#">&middot;大量优质新鲜的草莓上市啦！</a></li>
                        <li><a href="#">&middot;质优价廉的山核桃大量上市..！</a></li>
                        <li><a href="#">&middot;大量供应红富士苹果！</a></li>
                        <li><a href="#">&middot;春季时令蔬菜已上市！</a></li>
                    </ul>
                </div>
            </div>
            <div class="xiangx">
                <div class="xiangx_top">
                    <a href="#" class="r">更多&gt;&gt;</a>
                    <span class="xian_span">最新信息</span>
                </div>
                <div class="xiangx_text">
                    <div class="xian_img">
                        <a href="#"><img src="__CSS__/index/text/15.gif" width="139" height="112" alt="" /></a>                    </div>
                    <div class="xianWZ">
                        <ul>
                            <li><a href="#">&middot;山东大雨浇“落”无花果 斤..</a></li>
                            <li><a href="#">&middot;江苏常州：近期“菜走势..</a></li>
                            <li><a href="#">&middot;国庆将至 四川内江提前入..</a></li>
                            <li><a href="#">&middot;国庆节前山东青水果价格..</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="xiangx">
                <div class="xiangx_top">
                    <a href="#" class="r">更多&gt;&gt;</a>
                    <span class="xian_span">行业快讯</span>
                </div>
                <div class="xiangx_text">
                    <div class="xian_img">
                        <a href="#"><img src="__CSS__/index/text/15.gif" width="139" height="112" alt="" /></a>                    </div>
                    <div class="xianWZ">
                        <ul>
                            <li><a href="#">&middot;山东大雨浇“落”无花果 斤..</a></li>
                            <li><a href="#">&middot;江苏常州：近期“菜走势..</a></li>
                            <li><a href="#">&middot;国庆将至 四川内江提前入..</a></li>
                            <li><a href="#">&middot;国庆节前山东青水果价格..</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="fooer">
    <div class="fooer_nei"
        <p><a href="#"><img src="__CSS__/index/images/jg.gif" /></a></p>
    </div>
</div>
</body>
</html>