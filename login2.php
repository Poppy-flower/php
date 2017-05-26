<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <base href="<?php echo site_url();?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="css/style1.css" rel='stylesheet' type='text/css' />
    <script src="js/jquery.js"></script>
</head>
<body>
<!--SIGN UP-->
<h1>请使用管理员的手机号和密码进行登录</h1>
<div class="login-form">
    <form action="index/do_login2" method="post">
        <input type="text" class="text" placeholder="请输入电话号码" name="tel" id="tel">
        <div class="key">
            <input type="password" name="pass">
        </div>
        <div class="signin">
            <input type="submit" value="登陆">
        </div>
    </form>
    <form action="index" method="post">
        <div class="signin">
            <input type="submit" value="返回主页" >
        </div>
    </form>
</div>
<script src="js/login.js"></script>
</body>
</html>