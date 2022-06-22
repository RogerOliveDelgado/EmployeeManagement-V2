<?php

// if (EXECUTION_FLOW)
//     echo '<p>BASE_PATH -> ' . BASE_PATH . '</p>';

//BASE URL -> FOR LINK CSS - This is the old impentation
// $uri = $_SERVER['REQUEST_URI'];

// if (isset($uri) && $uri !== null) {
//     $uri = substr($uri, 1);
//     $uri = explode('/', $uri);

//     if (isset($uri[0])) {
//         $uri = "http://$_SERVER[HTTP_HOST]" . "/" . $uri[0] . "/"; // You must concatenate one $uri[0] for every project folder of the URL
//         $uri = checkUri($uri);
//     } else {
//         $uri = "http://$_SERVER[HTTP_HOST]" . "/";
//     }
// } else {
//     $uri = null;
// }

$documentRoot = getcwd();

//BASE PATH -> FOR REFERENCE FILES
define("BASE_PATH", $documentRoot);

define('PROTOCOL', (!empty($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS'] == 'on')) ? 'https://' : 'http://');
define('DOMAIN', $_SERVER['HTTP_HOST']);
define('BASE_URL', preg_replace("/\/$/", '', PROTOCOL . DOMAIN . str_replace(array('\\', "index.php", "index.html"), '', dirname(htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES))), 1) . '/');

// function checkUri($uri)
// {
//     if (substr($uri, -1) === "/") {
//         $uri = substr($uri, 0, -1);
//     }
//     return $uri;
// }

// if (EXECUTION_FLOW)
//     echo '<p>BASE_URL -> ' . BASE_URL . '</p>';

//Main PATHS
define("CONTROLLERS", BASE_PATH . '/controllers/');
define("VIEWS", BASE_PATH . '/views/');
define("MODELS", BASE_PATH . '/models/');
define("LIBS", BASE_PATH . '/libs/');

//Database PARAMS
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'EmployeeManagementV2');
define('CHARSET', 'utf8mb4');

//Sitename
define('SITENAME', 'Employee Management MVC');