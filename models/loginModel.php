<?php

class loginModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function addUser($username, $password) {
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
        $this->db->writeQuery($sql);
        $this->db->query->bindParam(1, $username);
        $this->db->query->bindParam(2, $password);
        $this->db->executeQuery();
    }

}

