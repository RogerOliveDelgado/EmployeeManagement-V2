<?php

//Database PARAMS
// define('DB_HOST', 'localhost');
// define('DB_USER', 'root');
// define('DB_PASSWORD', '');
// define('DB_NAME', 'EmployeeManagementV2');
// define('CHARSET', 'utf8mb4');

 class Database{

        public $query;
        public $dbHandler;
        public $error;

        public function __construct() {
            try {
                $connection = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";" . "charset=" . CHARSET . ";";

                $options = [
                    PDO::ATTR_ERRMODE           =>  PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_EMULATE_PREPARES  => FALSE,
                ];

                $this->dbHandler = new PDO($connection, DB_USER, DB_PASSWORD, $options);

            } catch (PDOException $e) {
                // require_once(VIEWS . "/error/error.php"); // We have to handle error
            }
        }

        public function writeQuery($sql){
            $this->query = $this->dbHandler->prepare($sql);
        }

        public function executeQuery(){
            return $this->query->execute();
        }

 }


 //prueba de que puedo escribir información en la base de datos
//  $db = new Database;

//  $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
//  $db->writeQuery($sql);
//  $name = "manolo";
//  $password = "123456";
//  $db->query->bindParam(1, $name);
//  $db->query->bindParam(2, $password);
//  $db->executeQuery();

//  echo 'Final de la ejecución';
