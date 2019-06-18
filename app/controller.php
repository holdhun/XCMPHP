<?php

namespace app;
use \app\view;
class controller
{
    protected $view;

    public function __construct()
    {
        $this->view = new view();
    }

    public function assign($name, $value)
    {
        $this->view->assign($name, $value);

    }

    public function render()
    {
        $this->view->render();
    }
}