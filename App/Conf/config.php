<?php
return array(
    //共用配置文件
	//开启应用分组
	'APP_GROUP_LIST' => 'Index,Admin',
    //默认分组
    'DEFAULT_GROUP' => 'Index',
    
    //配置数据库
    'DB_HOST' => '127.0.0.1',
    'DB_USER' => 'root',
    'DB_PWD' => '',
    'DB_NAME' => 'think',
    'DB_PREFIX' => 'hd_',
    
    //点语法默认解析
    'TMPL_VAR_IDENTIFY' =>'array',
    
    //模板路径  控制器_方法名.html
    'TMPL_FILE_DEPR' => '_',
);
?>