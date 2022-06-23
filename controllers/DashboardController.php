<?php

    class DashboardController extends Controller{

        public function __construct(){
            parent::__construct();
        }

        public function getAllEmployees(){
            $employees = $this->model->getAllEmployees();
            print_r(json_encode(($employees)));
        }

        public function render(){
            $this->view->render("dashboard");
        }

    }