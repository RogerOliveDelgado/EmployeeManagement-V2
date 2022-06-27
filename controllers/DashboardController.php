<?php

    class DashboardController extends Controller{

        public function __construct(){
            parent::__construct();
        }

        public function getAllEmployees(){
            $employees = $this->model->getAllEmployees();
            print_r(json_encode(($employees)));
        }

        public function deleteEmployee($params){
            $this->model->deleteEmployee($params[0]);
        }

        public function showEmployee($params){
            $employee = $this->model->getEmployee($params[0]);
            $this->view('employee', $employee);
        }

        public function updateEmployee(){
           
            $employee = json_decode(file_get_contents('php://input'), true);

            print_r($employee);
            $this->model->updateEmployee($employee);

        }

        // public function render(){
        //     $this->view->render("dashboard");
        // }

    }