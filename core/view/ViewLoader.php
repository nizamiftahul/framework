<?php

namespace phpocean\core\view;

class ViewLoader {

    public function __construct($path)
    {
        $this->path = $path;
    }

    public function load($viewName)
    {
        $filePath = $this->path.$viewName;
        if (file_exists($filePath)) {
            return file_get_contents($filePath);
        }

        throw new Exception('View file does not exist');
    }
}