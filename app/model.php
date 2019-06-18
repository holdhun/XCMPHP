<?php

namespace app;


class model
{
	private static $_instance;

        public static function instance()
        {
            if(!isset(self::$_instance))
            {
            	$config = include(CONFIG);
                self::$_instance = new \app\model\medoo([
					'database_type' => $config['database_type'],
					'database_name' => $config['database_name'],
					'server' => $config['server'],
					'username' => $config['username'],
					'password' => $config['password'],
                    'charset' => 'utf8',
				]);
            }
            return self::$_instance;
        }


}