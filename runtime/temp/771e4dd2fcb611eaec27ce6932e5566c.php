<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:88:"D:\WorkSofe\wamp\www\thinkphp_5.0.5_full\public/../application/index\view\jidi\jidi.html";i:1498699265;s:92:"D:\WorkSofe\wamp\www\thinkphp_5.0.5_full\public/../application/index\view\public\header.html";i:1498725692;s:92:"D:\WorkSofe\wamp\www\thinkphp_5.0.5_full\public/../application/index\view\public\footer.html";i:1498639441;}*/ ?>
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
        	<div class="natebia"><a href="#" class="natebia_a">中江县宏波养殖</a></div>
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
    </div>
<div class="centBox">
	<div class="neiye clearfix">
    	<div class="neiyeL">
        	<div class="banL noel">
       	 		 <div class="lanmu">
       		  		<ul>
                    	 <li><a href="<?php echo url('cooperation/cooperation'); ?>">合作社介绍</a></li>
                        <li><a href="<?php echo url('jieshao/jieshao'); ?>">产品介绍</a></li>
                        <li><a href="<?php echo url('jishu/jishu'); ?>" >技术支持</a></li>
                        <li><a href="<?php echo url('qianjing/qianjing'); ?>">行业前景</a></li>
                        <li><a href="<?php echo url('gushi/gushi'); ?>">致富故事</a></li>
                        <li><a href="<?php echo url('jidi/jidi'); ?>">生产基地</a></li>
                    </ul>
          		</div>
      		</div>
            <div class="dianhua">
            	<div class="dianhua_top">联系电话</div>
                <div class="dianhua_text">
               	  联  系  人：陈波 （总裁） <br />
                	电       话 ：86 0838 7102727<br />
                	移动电话 ：	138-8180-1576<br />
                	传       真 ：86 0838 7102771<br />
               	地       址 ：	中国 四川 德阳市四川省德阳市中江县双龙镇                </div>
            </div>
        </div>
        <div class="neiyeR">
        	<div class="neiBT">
            	<span class="mianT_span">生产基地 | BASE</span>
            </div>
            <div class="base clearfix">
            	<img src="__CSS__/index/text/17.gif" alt="" />
                <img src="__CSS__/index/text/18.gif" alt="" />
                <img src="__CSS__/index/text/19.gif" alt="" />
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