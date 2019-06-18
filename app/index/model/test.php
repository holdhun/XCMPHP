<?php

namespace app\index\model;

use  \app\model;
use  \app\model\db as DB;

class test extends model
{
    private $table = 'table_name';
	
	//使用pdo查询
	public function find(){
		$dbh = DB::instance();
        $sql = "select * from {$table} ";
        $sth = $dbh->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute();
        return $sth->fetchAll();
	}
	
	//使用medoo类的函数查询数据库
    public function add($arr)
    {
        $res = $this->instance()->insert($this->table, $arr);
        return $this->instance()->id();
    }
	
	public function test1(){
		return 'XCMPHP';
	}
}