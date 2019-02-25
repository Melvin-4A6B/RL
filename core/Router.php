<?php
class Router extends Controller {

    public function __construct()
    {
        $this->determineDestination($this->getUri());
    }

    private function getUri()
    {
        $uri = explode('/', $_SERVER["REQUEST_URI"]);

        return $uri;
    }

    private function sendToDestination($className, $method, $params)
    {
        $class = 'app/controllers/' . $className . '.php';
        require_once($class);
        $obj = new $className;
        die(call_user_func_array(array($obj, $method), $params));
    }

    private function determineDestination($uri = '')
    {
        $className = DEFAULT_CONTROLLER;
        $method = DEFAULT_METHOD;

        if(isset($uri[2]) && $uri[2] != '')
        {

            if(class_exists(ucfirst($uri[2])))
            {
                $className = ucfirst($uri[2]);
            }
            else
            {
                $className = DEFAULT_CONTROLLER;
            }

        }
        else
        {
            $className = DEFAULT_CONTROLLER;
        }

        if(isset($uri[3]) && $uri[3] != '')
        {

            if(method_exists($className, ucfirst($uri[3])))
            {
                $method = ucfirst($uri[3]);
            }
            else
            {
                $method = DEFAULT_METHOD;
            }

        }

        $params = array_slice($uri, 4);
        $this->sendToDestination($className, $method, $params);
    }

}