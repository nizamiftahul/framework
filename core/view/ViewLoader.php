<?php

namespace phpocean\core\view;

class ViewLoader {

    public function __construct($path)
    {
        $this->path = $path;
    }

    public function load($viewName, $params)
    {
        $filePath = $this->path.$viewName;
        if (file_exists($filePath)) {
            ob_start();
            if (!is_null($params)) extract($params);
            include($filePath);
            return ob_get_clean();
        }
        var_dump($filePath);
        throw new Exception('View file does not exist');
    }
}