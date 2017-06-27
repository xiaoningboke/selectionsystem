<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
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

#sf{
    width: 175px;
}
#main{
    width: 300px;
    margin:0 auto;
    margin-top: 200px;
}
</style>
</head>
<body>
<div id="condent">

        <div id="main">
        <h3  style="margin-left: 40px;">学生选课系统</h3>
        <br/>
                <form class="form-inline" action="__URL__/do_login" method="post">
                  <div class="form-group">
                    <label for="exampleInputName2">身&nbsp; &nbsp;&nbsp;份：</label>
                           <select class="form-control" id="sf" name="distinguish">
                                <option>请选择</option>
                               <option value="1">学生</option>
                               <option value="0">老师</option>
                        </select>
                  </div><br/><br/>

                  <div class="form-group">
                    <label for="exampleInputName2">用户名：</label>
                    <input type="text" class="form-control" id="exampleInputName2" placeholder="请输入用户名" name="username">
                  </div><br/><br/>

                  <div class="form-group">    <label for="exampleInputEmail2">密&nbsp; &nbsp;&nbsp;码：</label>
                    <input type="password" class="form-control" id="exampleInputEmail2" placeholder="请输入密码" name="password">
                  </div><br/><br/>

                  <button type="submit" class="btn btn-default" style="margin-left: 30px;margin-right: 30px;">登录</button>
                  <button type="reset" class="btn btn-default">重置</button>
                </form>
        </div>
</div>
</body>
</html>