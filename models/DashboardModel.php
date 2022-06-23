<?php

    class DashboardModel extends Model{

        public function __construct(){
            parent::__construct();
        }

        public function getAllEmployees(){
            $this->db->query('SELECT * FROM employees');

            $employees = $this->db->resultSet();

            if($employees){
                return $employees;
            } else {
                return false;
            }
        }

    }