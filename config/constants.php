<?php

require_once 'baseConstants.php';

define("CONTROLLERS", BASE_PATH . '/controllers/');
define("VIEWS", BASE_PATH . '/views/');
define("MODELS", BASE_PATH . '/models/');
define("LIBS", BASE_PATH . '/libs/');

//CONTROLLERS
define("FAILURE_CONTROLLER", CONTROLLERS . 'FailureController.php');
define("LOGIN_CONTROLLER", CONTROLLERS . 'LoginController.php');

//HTML
define("HEADER", BASE_PATH . '/assets/html/header.php');
define("FOOTER", BASE_PATH . '/assets/html/footer.html');

//CSS
define("BACKGROUND_CSS", BASE_URL . 'assets/css/background.css');
define("DASHBOARD_CSS", BASE_URL . 'assets/css/dashboard.css');
define("EMPLOYEES_CSS", BASE_URL . 'assets/css/employees.css');
define("HEADER_CSS", BASE_URL . 'assets/css/header.css');
define("LOGIN_CSS", BASE_URL . 'assets/css/login.css');
define("LOGINFORM_CSS", BASE_URL . 'assets/css/loginForm.css');
define("MAIN_CSS", BASE_URL . 'assets/css/main.css');

//JS
define("INDEX_JS", BASE_URL . 'assets/js/index.js');
define("SHOWPASS_JS", BASE_URL . 'assets/js/showPass.js');

