<?php

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
            $this->db->query('INSERT INTO employees (name, lastname, email, age, gender, streetaddress, city, state, postalcode, phonenumber) VALUES (?,?,?,?,?,?,?,?,?,?);');
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
            try{
                $this->db->execute();
                return [true];
            } catch (PDOException $e){
                return [false, $e];
            }
        }

    }