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

</head>
<style type="text/css">

#main{
    width: 300px;
    margin:0 auto;
    margin-top: 200px;
}
#top{
    position: absolute;
    top:20px;
    right: 220px;
  width: 200px;
}
.atop{
    margin-right: 20px;
}
</style>
<body>
<div id="top">
<a  class="atop" href="quit">退出登录</a>
<a  class="atop" href="achange">更改密码</a>
</div>
        <div id="main">
<h3  style="margin-bottom: 40px;">老师选课管理</h3>

            <a href="message" style="margin-right: 20px;">修改信息</a>
            <a href="score">修改成绩</a>
            <!-- <a href="quit">退出登录</a> -->
         </div>
</body>

</html>