<?php

class Login extends Controller{

    public function __construct(){
        parent::__construct();
    }

    public function addUser($username, $password){
        $this->model->addUser($username, $password);
    }
    
    // public function getLoginData():array {
    //     $username = $_POST["username"];
    //     $password = $_POST["password"];
    //     $loginData = ["username" => $username, "password" => $password];
    //     return $loginData;
    // }

    // public function authUserCall(): void {
    //     $getLoginData = getLoginData();
    //     authUser($getLoginData);
    // }


}