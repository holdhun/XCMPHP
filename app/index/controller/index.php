<?php

namespace app\index\controller;

use app\index\model\test as TestModel;

class index  extends  \app\controller
{
    //首页
    public function index(){
		$model =new TestModel();
        $data = $model->test1();
		$this->assign('data1',$data);
        $this->render();
    }
   
}
