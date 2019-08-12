<?php 

    class person_model {
        
        private $db;
        private $people;

        public function __construct() {
            
            require_once("model/connection.php");

            $this->db = Connection::connection_model();

            $this->people = array();
        }

        public function get_people() {
            require("pagination.php");
            $query = $this->db->query("SELECT * FROM user_data_2 LIMIT $start_since, $size_page");

            while($rows=$query->fetch(PDO::FETCH_ASSOC)) {
                $this->people[] = $rows;
            }

            return $this->people;
        }

    }

?>