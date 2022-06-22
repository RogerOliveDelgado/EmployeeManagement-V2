<?php

class App{

    protected $currentController = 'login';
    protected $currentMethod = 'index';
    protected $params = [];

    function __construct(){
        $url = $this->getUrl();
        echo '<pre>';
        print_r($url);
        echo '</pre>';
        $controllerPath = $this->getController($url);
        if(file_exists($controllerPath)){
            require_once $controllerPath;
            $controller = new $url[0];
            $controller->view('login');
        }
    }

    public function getUrl(): array{
        $url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : null;
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $url = explode('/', $url);
        return $url;
    }

    public function getController(array $url): string {
        return CONTROLLERS . ucwords($url[0]) . '.php';
    }

}
