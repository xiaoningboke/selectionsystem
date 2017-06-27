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
</head>
<body>
<div id="top">
<a  class="atop" href="quit">退出登录</a>
<a  class="atop" href="achange">更改密码</a>
</div>

<div id="main">

<h3  style="margin-left: 70px;margin-bottom: 20px;">学生选课管理</h3>
<p>请选择:</p>
 <form class="form-inline" action="__URL__/xk" method="post">
    <select class="form-control" id="sf" name="distinguish">
         <?php if(is_array($name)): $i = 0; $__LIST__ = $name;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><option value="<?php echo ($data["Cno"]); ?>">课程号：<?php echo ($data["Cno"]); ?>----课程名：<?php echo ($data["Cname"]); ?>----学分：<?php echo ($data["Ccredit"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
    </select>
    <br/><br/>
    <button type="submit" class="btn btn-default"   style="margin-left: 100px;">提交</button>
    <br/><br/>
</form>
<p>选课详情:</p>
<table class="table-bordered table-hover table " width="100%">
<tr>
<td>课程号(点击查看详细信息)</td>
<td>成绩</td>
<td>操作</td>
</tr>

 <?php if(is_array($datas)): $i = 0; $__LIST__ = $datas;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i; $a=$data[Cno]; $b=$data[Id]; ?>
    <tr>
            <td>
                <a href="<?php echo U('Portal/Student/show',array('id'=>$a));?>"> <?php echo ($data["Cno"]); ?></a>
            </td>
            <td><?php echo ($data["grade"]); ?></td>
            <td> <a href="<?php echo U('Portal/Student/delete',array('id'=>$b));?>">退选</a></td>
    </tr><?php endforeach; endif; else: echo "" ;endif; ?>

</table>

</div>
</body>
</html>