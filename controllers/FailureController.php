<?php
    class FailureController extends Controller{

        public function __construct(){
            parent::__construct();
            $this->render();
        }

        public function render() {
            $this->view('failure');
        }

    }
