<?php

namespace phpocean\core\controller;

class Controller {

    public $view;
    public $db;

    public function __construct()
    {
        $core = new \phpocean\core\Core();
        $this->db = $core->db();
        
        $this->view = new \phpocean\core\view\View(
            new \phpocean\core\view\ViewLoader(BASEPATH.'/views/')
        );
    }
}