<?php 

    class products_model {
        
        private $db;
        private $products;

        public function __construct() {
            
            require_once("model/connection.php");

            $this->db = Connection::connection_model();

            $this->products = array();
        }

        public function get_products() {
            $query = $this->db->query("SELECT * FROM articulos");

            while($rows=$query->fetch(PDO::FETCH_ASSOC)) {
                $this->products[] = $rows;
            }

            return $this->products;
        }

    }

?>