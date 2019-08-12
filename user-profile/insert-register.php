<?php

    try {
        $connection = new PDO("mysql:host=localhost; port=3308; dbname=php_course; charset=UTF8", "root", "");
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sql = "INSERT INTO user_profile (user, password, profile) VALUES (:user, :password, :profile)";

        $user = $_POST['user'];
        $password = $_POST['password'];
        $profile = $_POST['profile'];

        $password_encryption = password_hash($password, PASSWORD_DEFAULT, array("cost" => 12));



        $result = $connection->prepare($sql);

        $result->bindValue(":user", $user);
        $result->bindValue(":password", $password_encryption);
        $result->bindValue(":profile", $profile);

        $result->execute();

        if($result->rowCount()>0) {
            echo "El registro ha sido insertado correctamente. :)";
        } else {
            echo "El registro no se ha insertado correctamente. :(";
        }

        $result->closeCursor();
        


    } catch (Exception $e) {
        
        die("Error: " . $e->getMessage());
    }





?>