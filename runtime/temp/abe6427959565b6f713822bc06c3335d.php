<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:81:"C:\phpStudy\PHPTutorial\WWW\iot\public/../application/index\view\login\login.html";i:1529768338;}*/ ?>

<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
  <meta http-equiv="Pragma" content="no-cache"> 
  <meta http-equiv="Cache-Control" content="no-cache"> 
  <meta http-equiv="Expires" content="0"> 
  <title>逸凡物联</title>
  <link href="/static/assets/login/login.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div class="login_box">
    <div class="login_l_img"><img src="/static/assets/login/images/login-img.png" /></div>
    <div class="login">
      <div class="login_logo"><a href="#"><img src="/static/assets/login/images/login_logo.png" /></a></div>
      <div class="login_name">
       <p>逸凡物联</p>
     </div>
     <form method="post" action="<?php echo url('index/Login/login'); ?>">
      <input name="useraccount" type="text" placeholder="账号">
      <input name="password" type="password" id="password" placeholder="密码" />
      <input value="登录" style="width:100%;" type="submit">
      <a href="<?php echo url('index/Register/register'); ?>">注册</a>
    </form>
  </div>
  <div class="copyright">辽宁工业大学逸凡创新团队 版权所有©2018</div>
</div>
</body>
</html>
