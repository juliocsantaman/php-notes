<?php 

    include_once("object-model.php");
    class Object_Manage {

        private $connection;

        public function __construct($connection) {
            $this->set_connection($connection);
        }

        public function set_connection(PDO $connection) {
            $this->connection = $connection;
        }

        public function get_content_date() {
            $arr = array();
            $count = 0;
            $result = $this->connection->query("SELECT * FROM content ORDER BY date DESC");

            while($row=$result->fetch(PDO::FETCH_ASSOC)) {
                $blog = new Object_Model();

                $blog->set_id($row["id"]);
                $blog->set_title($row["title"]);
                $blog->set_date($row["date"]);
                $blog->set_comment($row["comment"]);
                $blog->set_image($row["image"]);

                $arr[$count] = $blog;


            }

            return $arr;

        }

        public function insert_content(Object_Model $blog) {
            $sql = "INSERT INTO content (title, date, comment, image) VALUES 
            ('" . $blog->get_title() . "', '" . $blog->get_date() . "', 
            '" . $blog->get_comment() . "',
            '" . $blog->get_image() . "')";

            $this->connection->exec($sql);
            
        }

    }






?>