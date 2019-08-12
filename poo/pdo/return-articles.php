<?php
    require('connection.php');

    class ReturnArticles extends Connection {
        public function __construct() {
            parent::__construct();
        }

        public function get_articles($dato) {
            $query="SELECT * FROM ARTICULOS WHERE PAIS_ORIGEN = '". $dato . "' ";
            $statement=$this->connection_db->prepare($query);
            $statement->execute(array());
            $result=$statement->fetchAll(PDO::FETCH_ASSOC);
            $statement->closeCursor();
            return $result;
            $this->connection_db=null;
            
        }
    }

?>