<?php

    class DashboardController extends Controller{

        public function __construct(){
            parent::__construct();
        }

        public function getAllEmployees(){
            $employees = $this->model->getAllEmployees();
            print_r(json_encode(($employees)));
        }

        public function deleteEmployee($id){
            
        }

        public function showEmployee($params){
            $employee = $this->model->getEmployee($params[0]);
            $this->view('employee');
        }

        // public function render(){
        //     $this->view->render("dashboard");
        // }

    }