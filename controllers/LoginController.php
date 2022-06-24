<?php

class LoginController extends Controller{

    public function __construct(){
        parent::__construct();
    }

    public function authUser(){
        if(isset($_POST['username'])){
            $user = $this->model->login($_POST['username'], $_POST['password']);
        }
        if($user){
            header("Location: " . BASE_URL . "dashboard");
        } else {
            echo "migueeeel";
        }
    }

    public function render(){
        $this->view->render('login');
    }

}