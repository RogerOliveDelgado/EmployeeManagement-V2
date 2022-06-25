<?php

// require './../libs/Model.php';
// require './../libs/Database.php';
    class DashboardModel extends Model{

        public function __construct(){
            parent::__construct();
        }

        public function getAllEmployees(){
            $this->db->query('SELECT * FROM employees');

            try{
                return $this->db->resultSet();
            } catch (PDOException $e) {
                return [];
            }
        }

        public function getEmployee($id) {
            $this->db->query('SELECT * from employees WHERE id = ?;');
            $this->db->bind(1, $id);
            try{
                 return $this->db->single();
            } catch (PDOException $e) {
                return [];
            }
        }

        public function insertEmployee($employee){
            $this->db->query('INSERT INTO employees (name, email, age, streetadress, city, state, postalcode, phonenumber) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?);');
            for($i= 1; $i<=count($employee); $i++){ //implement in db class
                $this->db->bind($i, $employee[$i-1]);
            }
            try{
                $this->db->execute(); //need to rewrite
                return [true];
            } catch (PDOException $e){
                return [false, $e];
            }

        }

    }

// //Database PARAMS
// define('DB_HOST', 'localhost');
// define('DB_USER', 'root');
// define('DB_PASSWORD', '');
// define('DB_NAME', 'employee_management_v2');
// define('CHARSET', 'utf8mb4');

// $object = new DashboardModel;
// $employee = array("Roger", "logic@king.com", 28, "C/Street", "Barcelona", "Spain", 8999, 515145654);
// $object->insertEmployee($employee);
