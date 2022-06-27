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
            'usernameMsg' => '',
            'passwordMsg' => ''
        ];

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            
            $_POST = filter_input_array(INPUT_POST);

            $data = [
                'username' => trim($_POST['username']),
                'password' => trim($_POST['password']),
                'usernameMessage' => '',
                'passwordMessage' => '',
            ];

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
        $this->destroySessionCookie();
        header("Location: " . BASE_URL);
    }

    public function destroySessionCookie() {
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(
                session_name(),
                '',
                time() - 42000,
                $params["path"],
                $params["domain"],
                $params["secure"],
                $params["httponly"]
            );
        }
    }



}