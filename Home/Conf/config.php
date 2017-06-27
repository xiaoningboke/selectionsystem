<?php
return array(
	//'配置项'=>'配置值'
              'DB_DSN'=>'mysql://root:root@localhost:3306/student',//使用DSN方式配置数据库信息
              'SHOW_PAGE_TRACE'=>true,//开启页面Trace
              'DB_PREFIX'=>'',  //设置表前缀
              'TMPL_ACTION_ERROR'     => APP_PATH. 'Tpl/Public/error.html', // 默认错误跳转对应的模板文件
              'TMPL_ACTION_SUCCESS'   => APP_PATH.'Tpl/Public/success.html',
);
?>
