<?php
namespace app\model;

class  test extends \app\model{
	public function getTableAll($table){
		return  $this->instance()->select($table,'*');
	}

	public static function run(){
        echo 123;
    }
}