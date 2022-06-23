<?php

    class View{
        
        public function __construct(){

        }

        public function render($view){
            require VIEWS . ucwords($view) . 'View.php';
        }

    }

?>