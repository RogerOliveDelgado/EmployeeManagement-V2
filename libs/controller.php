<?php

    //This is the main base for each controller we are going to implement in our application

    class Controller{

        public function __construct(){
            $this->view = new View;
        }

        public function loadModel($model) {
            $modelName = $model . 'Model';
            $url = MODELS . $modelName . '.php';
            if(file_exists($url)){
                require $url;
                $this->model = new $modelName;
            }
        }

        public function view($view, $data =[]){
            $viewFile = VIEWS . $view . '.php';
            if(file_exists($viewFile)){
                require_once $viewFile;
            } else {
                die("View you are trying to acccess does not exist");
            }
        }
    }

?>
