<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>前端库汇总-登录</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdn.staticfile.org/popper.js/1.12.5/umd/popper.min.js"></script>
  <script src="https://cdn.staticfile.org/twitter-bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>

<?php
//先实现登录，之后显示几个板块的跳转
require_once("./util.php");

print <<<EOT
<div class="row" style="margin-top:150px;">
  <div class="col-sm-2"></div>
  <div class="col-sm-3"></div>
  <div class="col-sm-2" align="center">
    <form class="form-signin" action="http://dxy.zdcd.online/front/index.php" method="post">
      <img class="mb-4" src="https://www.runoob.com/wp-content/uploads/2017/10/bootstrap-stack.png" alt="" width="72" height="72">

      <h1 class="h3 mb-3 font-weight-normal">登录</h1>
      <br>

      <label for="username" class="sr-only">用户名</label>
      <input type="username" name="username" class="form-control" placeholder="用户名" required="" autofocus="">
	  <br>
      <label for="password" class="sr-only">密码</label>
      <input type="password" name="password" class="form-control" placeholder="密码" required="">
      <br>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

    </form>
  </div>
  <div class "col-sm-2"></div>
  <div class "col-sm-2"></div>
</div>
EOT;
show_footer();
?>


</body>
