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
    margin-top: 200px;
}
</style>
</head>
<body>
<div id="main">
<h3  style="margin-left: 80px;margin-bottom: 20px;">课程详情</h3>
<table class="table-bordered table-hover table " width="100%">
<tr>
<td>课程号</td>
<td>课程名</td>
<td>学分</td>
</tr>
    <tr>
            <td><?php echo ($data["Cno"]); ?></td>
            <td><?php echo ($data["Cname"]); ?></td>
            <td><?php echo ($data["Ccredit"]); ?></td>
    </tr>
</volist>

</table>

<input type="button" class="btn btn-default" onclick="javascript:history.back(-1);" value="返回上一页">

</div>
</body>
</html>