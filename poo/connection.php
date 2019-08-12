<?php
    require('config.php');

    class Connection {
        protected $connection_db;

        function __construct() {
            $this->connection_db = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT);

            if($this->connection_db->connect_errno) {
                echo "Error al conectar a MYSQL" . $this->connection_db->connect_errno;
                return;
            }

            $this->connection_db->set_charset(DB_CHARSET);

        }
    }



?>