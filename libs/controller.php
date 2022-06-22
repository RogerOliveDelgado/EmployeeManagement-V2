<?php

    //This is the main base for each controller we are going to implement in our application

    class Controller{
        public function model($model) {
            require_once MODELS . $model . '.php';
            return new $model();
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
