<?php

namespace app\modules\dev\controllers;

class TestController extends \phpocean\core\controller\Controller {

    public function index()
    {
        $this->view->display('test.php');
    }
}
