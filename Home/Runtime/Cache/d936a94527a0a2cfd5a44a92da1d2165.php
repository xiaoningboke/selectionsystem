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
    width: 300px;
    margin:0 auto;
    margin-top: 200px;
}
</style>
</head>
<body>
<div id="main">
<h3  style="margin-bottom: 40px;">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;老师修改成绩</h3>
<table class="table-bordered table-hover table">
    <tr>
        <td>学号</td>
        <td>分数</td>
    </tr>
    <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
        <td>
            <?php echo ($vo["Sno"]); ?>
        </td>
        <td>
             <form class="form-inline" action="__URL__/scor" method="post">
                        <input type="hidden" value="<?php echo ($vo["Id"]); ?>" name="id">
                         <input type="text" class="form-control" id="exampleInputName2" placeholder="请输入分数" name="sco" value="<?php echo ($vo["grade"]); ?>">
                        <button type="submit" class="btn btn-default">提交</button>
            </form>
        </td>
    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>
<input type="button" class="btn btn-default" onclick="javascript:history.back(-1);" value="返回上一页">
</div>

</body>
</html>