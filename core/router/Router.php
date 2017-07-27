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
            $params = explode('$', $url);
            $route = '/public'.$params[0];
            $req = explode($route, $_SERVER['REQUEST_URI']);

            if ($req[0] == '') {
                if (is_callable($action)) return $action;

                $actionArr = explode('#', $action);
                $controller = 'app\\controllers\\'.$actionArr[0];
                $method = $actionArr[1];
                
                if (isset($req[1])) {
                    $arr = explode('/', $req[1]);
                    for ($i=0; $i<5; $i++) {
                        if (!isset($arr[$i])) $arr[$i] = null;
                    }
                    return (new $controller)->$method($arr[0],$arr[1],$arr[2],$arr[3],$arr[4]);    
                }
                return (new $controller)->$method();
            }
        }

        call_user_func_array($this->notFound, [$_SERVER['REQUEST_URI']]);
    }
}