<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Index</title>
    <style>
        #daohang{
            height: 100px;
            background-color: #abcdef;
        }
        a{
            border:1px solid grey;
            font-size: 60px;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div id='daohang'>
        <?php if(is_array($list)): foreach($list as $key=>$v): ?><a href="__APP__/City/<?php echo ($v["name"]); ?>"><?php echo ($v["name"]); ?></a><?php endforeach; endif; ?>
    </div>

	<h1>欢迎你访问聊城的网页</h1>
</body>
</html>