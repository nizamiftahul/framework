<?php

namespace app\controllers;

class IndexController extends \phpocean\core\controller\Controller {

    protected $model;

    public function __construct()
    {
        $this->model = new \app\models\TbAdmin();
    }

    public function index($a, $b='default')
    {
        echo '<pre>';
        $model = $this->model->findAll();
        foreach ($model as $m) {
                var_dump($m);
        }
        die();
    }
}