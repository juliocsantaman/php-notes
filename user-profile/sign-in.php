<?php

    try {
        $connection = new PDO("mysql:host=localhost; port=3308; dbname=php_course; charset=UTF8", "root", "");
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT * FROM user_profile WHERE user = :user";
        $result = $connection->prepare($sql);
        
        $user = $_POST["user"];
        $password = $_POST["password"];

        $result->bindValue(":user", $user);

        $result->execute();

        
        while($row = $result->fetch(PDO::FETCH_ASSOC)) {

            

            if(password_verify($password, $row["password"])) {
                if($row["profile"] == "Administrador") {
                    header("Location: administrator-page.php");
                } else {
                    header("Location: user-page.php");
                }
            } else {
                echo "Contraseña incorrecta";
            }
        }

       
        $result->closeCursor();

        
    } catch (Exception $e) {
        die("Error: " . $e->getMessage());
    }





?>