<?php

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