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

    <div id="condent">
        <div id="main">
        <h3  style="margin-bottom: 40px;">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;老师修改信息</h3>
                <form class="form-inline" action="__URL__/editmess" method="post">

                  <div class="form-group">
                    <label for="exampleInputName2">用户名：</label>
                    <input type="text" class="form-control" id="exampleInputName2" placeholder="请输入用户名" name="name" value="<?php echo ($message["Tname"]); ?>">
                  </div><br/><br/>
                   <label for="exampleInputEmail2">性&nbsp; &nbsp;&nbsp;别：</label>
                   <input type="hidden" value="<?php echo ($message["Tsex"]); ?>" value="<?php echo ($cour["Tsex"]); ?>"  id="sex"/>
                男<input type="radio" name="sex" value="0" id="man">
                            女<input type="radio" name="sex" value="1" id="woman"><br/><br/>
                  <div class="form-group">
                  <label for="exampleInputEmail2">课程号：</label>
                  <input type="hidden" class="form-control" id="exampleInputEmail2" placeholder="请输入课程号" value="<?php echo ($cour["Cno"]); ?>" name="cnum" >
                    <input type="text" class="form-control" id="exampleInputEmail2" placeholder="请输入课程号" value="<?php echo ($cour["Cno"]); ?>"  disabled >
                  </div><br/><br/>
                <div class="form-group">
                      <label for="exampleInputEmail2">课程名：</label>
                        <input type="text" class="form-control" id="exampleInputEmail2" placeholder="请输入课程名"value="<?php echo ($cour["Cname"]); ?>" name="cna">
                      </div><br/><br/>
                         <div class="form-group">
                      <label for="exampleInputEmail2">学&nbsp; &nbsp;&nbsp;分：</label>
                        <input type="text" class="form-control" id="exampleInputEmail2" placeholder="请输入学分"   value="<?php echo ($cour["Ccredit"]); ?>" name="cd">
                      </div><br/><br/>
                  <button type="submit" class="btn btn-default"  style="margin-left: 30px;margin-right: 30px;">修改</button><input type="button" class="btn btn-default" onclick="javascript:history.back(-1);" value="返回上一页">
                </form>

        </div>

</div>

</body>
<script>
 //判断男女
 if($('#sex').val()==1){
    $('#woman').attr("checked",true);
 }else{
    $('#man').attr("checked",true);

 }

</script>
</html>