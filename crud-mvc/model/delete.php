<?php
    require("connection.php");

    $connection = Connection::connection_model();


    $id = $_GET["id"];

    $connection->query("DELETE FROM USER_DATA_2 WHERE ID = '$id' ");
    header("location: ../index.php");















?>