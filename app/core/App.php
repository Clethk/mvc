<?php
class App{
    protected $controller = 'HomeController';
    protected $method = 'index';
    protected $params = [];
    private $path = '../app/controllers/';

    public function __construct()
    {
        $url = $this->parseUrl();

        //print_r($url);

        if(file_exists($this->path.$url[0].'Controller.php')){
            $this->controller = $url[0].'Controller';
            unset($url[0]) ;
        }

        require_once $this->path.$this->controller.'.php';
        // $this->controller = new Home();
        $this->controller = new $this->controller;
         //debugging
        //var_dump($this->controller);
        if (isset($url[1])){
            if(method_exists($this->controller, $url[1])){
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        $this->params = $url ? array_values($url) : [];


        call_user_func_array([$this->controller, $this->method], $this->params);

    }

    private function parseUrl()
    {
        if(isset($_GET['url'])){
            return explode('/', filter_var(rtrim($_GET['url'], FILTER_SANITIZE_URL)));
        }
    }

}