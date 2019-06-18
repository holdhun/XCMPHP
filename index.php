<?php
//是否显示错误
ini_set("display_errors", "On");
ini_set('date.timezone','Asia/Shanghai');
//错误等级设置
//error_reporting(E_ERROR);
//引入composer
require __DIR__.'/vendor/autoload.php';
//引入调试
/*$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();*/
//定义常量，常量需要全大写
define('PATH_PATH', __DIR__ . '/');
define('CONFIG',__DIR__.'/app/config.php');
//引入基本配置文件和路由文件
require __DIR__.'/app/init.php';
require __DIR__.'/app/function.php';
require __DIR__.'/app/route.php';
//注意： 类使用小写命名，方法使用小写命名，文件和文件夹均使用小写命名


