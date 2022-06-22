<?php

$documentRoot = getcwd();
$uri = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

//PATH
define("BASE_PATH", $documentRoot);
//URL
define("BASE_URL", $uri);

//Main PATHS
define("CONTROLLERS", BASE_PATH . '/controllers/');
define("VIEWS", BASE_PATH . '/views/');
define("MODELS", BASE_PATH . '/models/');
define("LIBS", BASE_PATH . '/libs/');

//Database PARAMS
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'EmployeeManagementV2');

//Sitename
define('SITENAME', 'Employee Management MVC');