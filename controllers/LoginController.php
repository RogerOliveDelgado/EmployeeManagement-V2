<?php

class LoginController extends Controller{

    public function __construct(){
        parent::__construct();
    }

    public function authUser() {
        $data = [
            'title' => 'Login page',
            'username' => '',
            'password' => '',
            'usernameError' => '',
            'passwordError' => ''
        ];

        echo "chequendo el request method";
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            
            $_POST = filter_input_array(INPUT_POST);

            $data = [
                'username' => trim($_POST['username']),
                'password' => trim($_POST['password']),
                'usernameMessage' => '',
                'passwordMessage' => '',
            ];
            print_r($data);

            if (empty($data['username'])){
                $data['usernameMessage'] = 'Please enter a username';
            }

            if (empty($data['password'])){
                $data['passwordMessage'] = 'Please enter a password';
            }

            if (empty($data['usernameMsg']) && empty($data['passwordMsg'])){
                $loggedInUser = $this->model->login($data['username'], $data['password']);

                if ($loggedInUser) {
                    $this->createUserSession($loggedInUser);
                } else {
                    $data['passwordMsg'] = 'Invalid username or password. Please try again';
                }

            }

        } else {
            $data = [
                'username' => '',
                'password' => '',
                'usernameMsg' => '',
                'passwordMsg' => '',
            ];
            
        }
        $this->view('login', $data);
    }

    public function createUserSession($user) {
        $_SESSION['username'] = $user->username;
        $_SESSION['init'] = time();
        header("Location: " . BASE_URL . "dashboard");
    }

    public function logout() {
        unset($_SESSION['username']);
        unset($_SESSION['init']);
        header("Location: " . BASE_URL);
    }

    public function render(){
        $this->view->render('login');
    }

}