<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>学生选课系统</title>
    <link rel='icon' href='__PUBLIC__/img/logo.ico' type=‘image/x-ico’ />
<!-- 新 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="__PUBLIC__/bootstrap/css/bootstrap.min.css">

<!-- 可选的Bootstrap主题文件（一般不用引入） -->
<link rel="stylesheet" href="__PUBLIC__/bootstrap/css/bootstrap-theme.min.css">

<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="__PUBLIC__/bootstrap/js/jquery-3.2.1.min.js"></script>

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="__PUBLIC__/bootstrap/js/bootstrap.min.js"></script>
<style type="text/css">
body{
    background-color:#F0FFFF;
}
</style>

<style type="text/css">


#main{
    width: 350px;
    margin:0 auto;
    margin-top: 100px;
}

</style>
</head>
<body>


<div id="main">

<h3  style="margin-left: 70px;margin-bottom: 40px;">更改密码</h3>

 <form class="form-inline" action="__URL__/changepass" method="post">
 <input type="hidden" value="<?php echo session('username')?>" name="sss"/>
    <div class="form-group">
                    <label for="exampleInputName2">用户名：</label>
                    <input type="text" class="form-control" id="exampleInputName2" placeholder="请输入用户名" name="username" value="<?php echo session('username')?>" disabled="true">
                  </div><br/><br/>
     <div class="form-group">
                    <label for="exampleInputName2">原密码：</label>
                    <input type="text" class="form-control" id="exampleInputName2" placeholder="请输入原密码" name="oldpassword">
  </div><br/><br/>
   <div class="form-group">
    <label for="exampleInputName2">新密码：</label>
    <input type="text" class="form-control" id="exampleInputName2" placeholder="请输入新密码" name="newpassword">
  </div><br/><br/>
  <button type="submit" class="btn btn-default" style="margin-left: 30px;margin-right: 30px;">更改</button>
  <input type="button" class="btn btn-default" onclick="javascript:history.back(-1);" value="取消">
</div>
</form>




</body>
</html>