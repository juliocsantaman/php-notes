<?php
    require('connection.php');

    class ReturnArticles extends Connection {
        public function __construct() {
            parent::__construct();
        }

        public function get_articles($dato) {
            $result = $this->connection_db->query('SELECT * FROM ARTICULOS WHERE PAIS_ORIGEN = "'. $dato .'"');
            $articles = $result->fetch_all(MYSQLI_ASSOC);
            return $articles;
        }
    }

?>