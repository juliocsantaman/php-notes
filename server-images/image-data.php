<?php

    //We get data image.
    $image_name = $_FILES["image"]["name"];
    $image_type = $_FILES["image"]["type"];
    $image_size = $_FILES["image"]["size"];

    
    //post_max_size = 8MB finds in php/php settings. Default < 2MB. 
    if($image_size > 1000000) {
        echo "Has excedido el tamaño permitido.";
    } else if($image_type == "image/jpeg" || $image_type == "image/jpg" || $image_type == "image/png" || $image_type == "image/gif") {
        
        //This is the route destiny folder. Default: < 2MB.
        $destiny_folder = $_SERVER["DOCUMENT_ROOT"] . "/intranet/uploads/";
            
        //We move temporal directory image to the directory chosen.
        move_uploaded_file($_FILES["image"]["tmp_name"], $destiny_folder.$image_name);
    } else {
        echo "Error: Solo se permiten extensiones jpeg, jpg, png y gif.";
    }

    try {
        
        $connection = new PDO("mysql:host=localhost; port=3308; dbname=php_course", "root", "");
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connection->exec("SET CHARACTER SET UTF8");

        //$sql = "INSERT INTO articulos (FOTO) VALUES ('$image_name')";
        $sql = "UPDATE ARTICULOS SET FOTO = '$image_name' WHERE ID = 'J1' ";

        $result = $connection->prepare($sql);

        $result->execute();
        $result->closeCursor();

    } catch (Exception $e) {

        die("ERROR: " . $e->getMessage());
        
    }


?>