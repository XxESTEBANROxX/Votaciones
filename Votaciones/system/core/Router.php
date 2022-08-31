<?php

class Router
{
    private $uri;
    private $controller;
    private $method;
    private $params;
    
    public function __construct(){
        $this->setUri();
        $this->setController();
        $this->setMethod();
        $this->setParam();
    }

    public function setUri(){
        $this->uri = explode('/',$_SERVER['REQUEST_URI']);
    }

    public function setController(){
        $this->controller = $this->uri[2] === '' ? DEFAULT_CONTROLLER : $this->uri[2];
    }

    public function setMethod(){
        $this->method = !empty($this->uri[3]) ? $this->uri[3]: 'exec';
    }

    public function setParam(){
        if(REQUEST_METHOD == 'POST')
            $this->params = $_POST;
        elseif (REQUEST_METHOD == 'GET')
            $this->params = !empty($this->uri[4]) ? $this->uri[4]:'';
    }

    public function getUri(){
        return $this->uri;
    }

    public function getController(){
        return $this->controller;
    }

    public function getMethod(){
        return $this->method;
    }

    public function getParam(){
        return $this->params;
    }


}