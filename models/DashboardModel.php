<?php

//require './../libs/Model.php';
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

        // public function insertEmployee($employee){
        //     $this->db->query('INSERT INTO employees (name, email, age, streetadress, city, state, postalcode, phonenumber) 
        //     VALUES (?, ?, ?, ?, ?, ?, ?, ?);');
        //     for($i= 1; $i<=count($employee); $i++){ //implement in db class
        //         $this->db->bind($i, $employee[$i]);
        //     }
        //     try{
        //         $this->db->execute(); //need to rewrite
        //         return [true];
        //     } catch (PDOException $e){
        //         return [false, $e];
        //     }
        // }

        public function deleteEmployee($id){
            $this->db->query('DELETE from employees where id = ?;');
            $this->db->bind(1, $id);
            try {
                $this->db->execute();
                return [true];
            } catch (PDOException $e) {
                return [false, $e];
            }
        }

        public function updateEmployee($employee){
            $this->db->query('UPDATE employees SET name = ? , lastname = ? ,email = ? , age = ?, gender=?, streetaddress=? , city = ?, state = ?, postalcode = ?, phonenumber = ? 
            where id = ?');
                $this->db->bind(1, $employee['name']);
                $this->db->bind(2, $employee['lastname']);
                $this->db->bind(3, $employee['email']);
                $this->db->bind(4, $employee['age']);
                $this->db->bind(5, $employee['gender']);
                $this->db->bind(6, $employee['streetaddress']);
                $this->db->bind(7, $employee['city']);
                $this->db->bind(8, $employee['state']);
                $this->db->bind(9, $employee['postalcode']);
                $this->db->bind(10, $employee['phonenumber']);
                $this->db->bind(11, $employee["id"]);

            try{
                $this->db->execute(); 
                return [true];
            } catch (PDOException $e){
                return [false, $e];
            }
        }

        public function insertEmployee($employee){
            $this->db->query('INSERT INTO employees (name, lastnme, email, age, gender, streetaddress, city, state, postalcode, phonenumber) VALUES (?,?,?,?,?,?,?,?,?,?);');
                $this->db->bind(1, $employee['name']);
                $this->db->bind(2, $employee['lastnme']);
                $this->db->bind(3, $employee['email']);
                $this->db->bind(4, $employee['age']);
                $this->db->bind(5, $employee['gender']);
                $this->db->bind(6, $employee['streetaddress']);
                $this->db->bind(7, $employee['city']);
                $this->db->bind(8, $employee['state']);
                $this->db->bind(9, $employee['postalcode']);
                $this->db->bind(10, $employee['phonenumber']);
            try{
                $this->db->execute();
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
// $result = $object->deleteEmployee(10);
// echo "The result is <br>";
// echo '<pre>';
// print_r($result);
// echo '</pre>';
