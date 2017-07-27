<?php

namespace app\controllers;

class IndexController extends BaseController {

    public function index($a)
    {
        var_dump($a);
        die();
        $this->view->display('test.php');
    }
}