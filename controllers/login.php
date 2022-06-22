<?php

class Login extends Controller{

    public function __construct(){
        if(isset($_POST['username'])){
            $db = new Database;

            $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
            $db->writeQuery($sql);
            $db->query->bindParam(1, $_POST['username']);
            $db->query->bindParam(2, $_POST['password']);
            $db->executeQuery();
        }
    }
    
    // public function getLoginData():array {
    //     $username = $_POST["username"];
    //     $password = $_POST["password"];
    //     $loginData = ["username" => $username, "password" => $password];
    //     return $loginData;
    // }

    public function authUserCall(): void {
        $getLoginData = getLoginData();
        authUser($getLoginData);
    }


}