<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:90:"D:\WorkSofe\wamp\www\thinkphp_5.0.5_full\public/../application/index\view\login\login.html";i:1498730655;s:92:"D:\WorkSofe\wamp\www\thinkphp_5.0.5_full\public/../application/index\view\public\footer.html";i:1498639441;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta http-equiv="author" content="$Id$" />
<meta http-equiv="copyright" content="Copyright (C) 2013 * All rights reserved." />
<meta http-equiv="keywords" content="关键字" />
<meta http-equiv="description" content="描述" />
<link type="text/css" href="__CSS__/index/css/style.css" rel="stylesheet" rev="stylesheet" media="screen" />
<title>注册</title>
</head>

<body>
<div class="centBox">
	<div class="top">
    	<span>【<a href="<?php echo url('login/login'); ?>">登陆管理</a> 】 【<a href="#">申请入驻</a>】  【<a href="#">前往采购</a>】  【<a href="#">联系我们</a>】【<a href="<?php echo url('login/login'); ?>">退出登录</a>】</span>
    	<?php echo session('index.username'); ?>您好！欢迎来到中江县名优产品展销平台!     您遇到任何疑问请致电：0838 -6668888   
    </div>
    <div class="top2">
    	<div class="top2R">
        	<div class="fanhui"><a href="<?php echo url('index/index'); ?>">返回首页</a></div>
        </div>
    	<div class="logo">
        	<a href="#" class="logo_a">中江名优特产</a>
        </div>
    </div>
</div>
<div class="denlu">
    <div class="denlu_nei">
        <div class="denluL">
            <img src="__CSS__/index/text/23.gif" class="pt145" />
        </div>
        <div class="denluR">
            <div class="den_bt">
                登录我们
            </div>
            <div class="den_kang">
                <form action="" method="post">
                <table width="100%" height="155" border="0" cellspacing="0" cellpadding="0">
                    <tr >
                        <td width="50" ><span class="den_span">用户名</span></td>
                        <td><input type="text" class="denl_input" value="" name="username"/></td>
                    </tr>
                    <tr>
                        <td width="50"  ><span class="den_span">密&nbsp;&nbsp;&nbsp;&nbsp;码</span></td>
                        <td><input name="password" type="text" class="denl_input" />
                        </td>
                    </tr>
                    <tr>
                        <td width="50"   ><span class="den_span">验证码</span></td>
                        <td><input name="code"   type="text" class="ssdenl_input" />
                        </td>
                        <td><span class="ssden_span"><img class="imgcc" src="<?php echo captcha_src(); ?>" onclick="this.src=src+'?'+Math.random()"alt="captcha"/> <a id="kanbuq" href="javascript:;">看不清，换一张</a></span>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td><p><input name="" type="checkbox" value="" />十天免费登录</p></td>
                    </tr>
                </table>

            </div>
            <div class="deng_ann">
                <input name="" type="submit"  class="deng_a"/>
                <a href="#">忘记密码？</a>
            </div>
            <div class="zhece">
                <span class="zhece_spa">还不是义乌购用户？</span><a href="<?php echo url('cegister/cegister'); ?>">免费注册</a>            </div></div></form>
            
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