<?php

namespace phpocean\core\router;

class Router {

    private $routes = [];
    private $notFound;

    public function __construct()
    {
        $this->notFound = function($url) {
            echo '404 - page not found';
        };
    }

    public function add($url, $action)
    {
        $this->routes[$url] = $action;
    }

    public function setNotFound()
    {
        # code...
    }

    public function dispatch()
    {
        foreach ($this->routes as $url => $action) {
            var_dump($_SERVER['REQUEST_URI']); die();
            $params = explode('$', $url);

            if ('/public'.$url == $_SERVER['REQUEST_URI']) {
                if (is_callable($action)) return $action;

                $actionArr = explode('#', $action);
                $controller = 'app\\controllers\\'.$actionArr[0];
                $method = $actionArr[1];

                return (new $controller)->$method();
            }
        }

        call_user_func_array($this->notFound, [$_SERVER['REQUEST_URI']]);
    }
}