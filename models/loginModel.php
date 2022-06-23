<?php

class LoginModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function login($username, $password) {
        $sql = "SELECT * FROM users WHERE username = :username";
        $this->db->query($sql);

        $this->db->query->bindParam(1, $username);
        $this->db->query->execute();
        $user = $this->db->query->fetch(PDO::FETCH_OBJ);
        
        if (password_verify($password, $user->password)){
            return $user;
        } else {
            return false;
        }

    }

}

