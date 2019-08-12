<?php
    require("connection.php");

    $connection = Connection::connection_model();

if(isset($_POST["insert"])) {
    $name = $_POST["name"];
    $last_name = $_POST["last-name"];
    $address = $_POST["address"];

    $query = "INSERT INTO user_data_2 (name, last_name, address) VALUES (:name, :last_name, :address)";

    $result=$connection->prepare($query);

    $result->bindValue(":name", $name);
    $result->bindValue(":last_name", $last_name);
    $result->bindValue(":address", $address);

    $result->execute();

    $result->closeCursor();

    header("location: ../index.php");


  }
?>