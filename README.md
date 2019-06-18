# xcmphp

ThinkPHP 是一个免费开源的，敏捷快速，扩展性高的PHP开发框架，
遵循Apache2开源协议发布，为敏捷WEB应用开发和简化企业应用开发而生。

配置要求php版本在5.3以上，使用psr4加载类
使用多层MVC架构，适合开发多模块多语言的项目

配置文件在/app/config.php
配置基本的数据库参数和目录参数

入口文件/index.php, 

路由控制文件/app/route.php
可改写路由配置，默认使用restfulAPI风格(如： /api/news/getnews/id/1)

数据库可使用pdo和medoo以及自己扩展的orm

支持composer
在/composer.json文件中使用psr4加载类，进行类与目录的关联配置

可以任意加载各种类
以及自定义的扩展如menmcache的扩展

缓存的使用请引入自己适用的扩展

xcmphp无需安装，下载后将解压的目录拷贝到web目录即可

使用xcmphp框架请遵循开源协议，并仔细阅读帮助文档

感谢你的浏览和支持！
