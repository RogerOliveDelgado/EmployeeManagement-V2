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

        public function query($sql){
            $this->query = $this->dbHandler->prepare($sql);
        }

        public function execute(){
            return $this->query->execute();
        }

        public function resultSet() {
            $this->execute();
            return $this->query->fetchAll(PDO::FETCH_ASSOC);
        }

        public function single() {
            $this->execute();
            return $this->query->fetch(PDO::FETCH_OBJ);
        }

        public function bind($parameter, $value, $type = null){
            echo $parameter . " " . $value . " ";
            switch (is_null($type)) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
            $this->query->bindParam($parameter, $value, $type);
        }
}
