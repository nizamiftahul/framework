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

    public function redir($ctrl, $req, $action)
    {
        if ($req[0] == '') {
            if (is_callable($action)) return $action;

            $actionArr = explode('#', $action);
            $controller = $ctrl.$actionArr[0];
            $method = $actionArr[1];
            
            if (class_exists($controller)) {
                if (isset($req[1])) return call_user_func_array([new $controller, $method], explode('/', $req[0]));
                return call_user_func_array([new $controller, $method]);
            }    
        }

        return false;
    }

    public function dispatch()
    {
        foreach ($this->routes as $url => $action) {
            $params    = explode('$', $url);
            $route     = $params[0];
            $req       = explode($route, $_SERVER['REQUEST_URI']);
            
            if (is_null($this->redir('app\\controllers\\', $req, $action))) return;

            $modules = scandir('app/modules');
            foreach ($modules as $m) {
                $reqParams = explode('/'.$m.'/', $req[1]);
                if (is_null($this->redir('app\\modules\\'.$m.'\\controllers\\', $req, $action))) return;
            }
        }

        call_user_func_array($this->notFound, [$_SERVER['REQUEST_URI']]);
    }
}