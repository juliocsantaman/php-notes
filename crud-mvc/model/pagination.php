<?php

/*************************PAGINATION***************************************/
    require_once("connection.php");
    $connection = Connection::connection_model();

  $size_page = 2;

    if(isset($_GET["page"])) {
        if($_GET["page"]==1) {
            header("location: index.php");
        } else {
            $page=$_GET["page"];
        }
    } else {

        $page = 1;
    }
    $start_since = ($page-1) * $size_page;

    $total_query = "SELECT * FROM USER_DATA_2";
    $result = $connection->prepare($total_query);
    $result->execute(array());

    $row_number = $result->rowCount();
    $total_pages = ceil($row_number/$size_page); // 10/3 = 4.


  /******************END PAGINATION************/
  ?>