<?php
    require('config.php');

    class Connection {
        protected $connection_db;

        public function __construct() {
            try {
                $this->connection_db = new PDO("mysql:host=localhost; port=3308; dbname=php_course", "root", "");
                $this->connection_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->connection_db->exec("SET CHARACTER SET utf8");
                return $this->connection_db;
                
            } catch (Exception $e) {
                echo "La línea del error es: " . $e->getLine();
            }
           

        }
    }



?>