<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:90:"D:\WorkSofe\wamp\www\thinkphp_5.0.5_full\public/../application/admin\view\login\login.html";i:1497344085;}*/ ?>
<!doctype html>
<?php
 ob_start();



?>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <link href="__CSS__/denglu/css/admin_login.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="__JS__/denglu/js/jslibs/jquery-1.3.2.min.js"></script>
</head>
<body>
<div class="admin_login_wrap">
    
    <div class="adming_login_border" >
        <div class="admin_input">
            <form action="<?php echo url('login'); ?>" method="post">
                <ul class="admin_items">
                    <li>
                        <label for="user">用户名：</label>
                        <input type="text" name="username" value="" id="username" size="40" class="admin_input_style" />
                    </li>
                    <li>
                        <label for="pwd">密码：</label>
                        <input type="password" name="password" value="" id="password" size="40" class="admin_input_style" />
                    </li>
					<li>
                        <label for="pwd">验证码</label>
                        <input type="text" name="code" value="" -id="password" size="40" style="width:126px;float:left; margin-left:0px; height:50px;" />
						<img src="<?php echo captcha_src(); ?>" alt="captcha" id="images" onclick="this.src=this.src+'?'+Math.random()" style="float:right;width:148px; height:50px;"/>
                    </li>
					
					
					
                    <li>
                        <input type="submit" tabindex="3" value="提交" class="btn btn-primary" />
                    </li>
                </ul>
            </form>
        </div>
    </div>

</div>

<script>



	function check()
	{
		
		//alert("sdfg");
		
		var reg = /^\w{6,15}$/;
		if(!reg.test($("#username").val()))   //$("#username").val()  获取文本框的值
		{
			alert("你输入的用户名内容不符合");
			return false;
		}
		
		var regs = /^\w{6,20}$/;
		if(!regs.test($("#password").val()))   //$("#username").val()  获取文本框的值
		{
			alert("你输入的密码内容不符合");
			return false;
		}
	
	}

</script>

<script>

	function load()
	{
		var src= $("#images").attr("src");
		//alert(src);
		src+="&"+Math.floor(Math.random()*10000);//1000-99999  4
		$("#images").attr("src",src);
	}

</script>
</body>


</html>
<?php
 ob_get_contents();
 file_put_contents("huancun.html","");


?>
