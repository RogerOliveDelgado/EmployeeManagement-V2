<?php

class App{

    protected $currentController = 'login';
    protected $currentMethod = 'index';
    protected $params = [];

    function __construct(){
        $url = $this->getUrl();

        if(empty($url[0])){
            require_once LOGIN_CONTROLLER;
            $controller = new LoginController;
            $controller->render();
            return false;
        }

        $controllerPath = $this->getController($url);
        // echo '<pre>';
        // print_r($url);
        // echo '</pre>';

        if(file_exists($controllerPath)){
            require_once $controllerPath;
            $class = $url[0] . "Controller";
            $controller = new $class;
            $controller->loadModel($url[0]);
            $nparams = count($url);
            $this->callController($url, $nparams, $controller);
            
        } else {
            require_once FAILURE_CONTROLLER;
            $controller = new FailureController;
        }
    }

    public function getUrl(): array{
        $url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : null;
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $url = explode('/', $url);
        return $url;
    }

    public function callController($url, $nparams, $controller){
        switch($nparams){
            case 1: 
                $controller->view->render($url[0]);
                break;
            case 2:
                $controller->{$url[1]}();
                break;
            default:
                $params = [];
                for ($i = 2; $i < $nparams; $i++){
                    array_push($params, $url[$i]);
                }
                $controller->{$url[1]}($params);
                break;
        }
        
    }

    public function getController(array $url): string {
        return CONTROLLERS . ucwords($url[0]) . 'Controller.php';
    }

}
