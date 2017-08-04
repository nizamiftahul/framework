<?php

namespace phpocean\core\view;

class View {

    public function __construct($viewLoader)
    {
        $this->viewLoader = $viewLoader;
    }

    public function display($viewName, $params = null)
    {
        echo $this->viewLoader->load($viewName, $params);
    }
}