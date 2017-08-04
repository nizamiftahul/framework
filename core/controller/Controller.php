<?php

namespace phpocean\core\controller;

class Controller {

    public $view;
    public $db;

    public function __construct()
    {
        $db = new \phpocean\core\database\Database();
        $this->db = $db->db();
        
        // cek apakah module
        $viewPath = '/'.explode('\controllers', get_class($this))[0].'/views/';
        
        $this->view = new \phpocean\core\view\View(
            new \phpocean\core\view\ViewLoader(BASEPATH.$viewPath)
        );
    }
}