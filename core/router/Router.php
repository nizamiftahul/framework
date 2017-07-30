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
            $params    = explode('$', $url);
            $route     = $params[0];
            $req       = explode($route, $_SERVER['REQUEST_URI']);
            $reqParams = explode('/', $req[1]);
            
            if ($req[0] == '' && count($params) > count($reqParams)) {
                if (is_callable($action)) return $action;

                $actionArr = explode('#', $action);
                $controller = 'app\\controllers\\'.$actionArr[0];
                $method = $actionArr[1];
                
                return call_user_func_array([new $controller, $method], $reqParams);    
            }
        }

        call_user_func_array($this->notFound, [$_SERVER['REQUEST_URI']]);
    }
}