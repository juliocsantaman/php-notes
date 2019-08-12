<?php

    //We get file data.
    $file_name = $_FILES["file"]["name"];
    $file_type = $_FILES["file"]["type"];
    $file_size = $_FILES["file"]["size"];

    
    //This is the route destiny folder. Default: < 2MB.
    $destiny_folder = $_SERVER["DOCUMENT_ROOT"] . "/intranet/uploads/";
            
    //We move temporal directory image to the directory chosen.
    move_uploaded_file($_FILES["file"]["tmp_name"], $destiny_folder.$file_name);
     

    try {
        
        $connection = new PDO("mysql:host=localhost; port=3308; dbname=php_course", "root", "");
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //$connection->exec("SET CHARACTER SET UTF8"); //Error.
        $connection->exec("SET NAMES UTF8"); //Good.

        $file_objective = fopen($destiny_folder.$file_name, "r");
        $file_content = fread($file_objective, $file_size);

        $file_content = addslashes($file_content);

        fclose($file_objective);

        $sql = "INSERT INTO files (name, type, content) VALUES ('$file_name', '$file_type', '$file_content')";
        //$sql = "UPDATE ARTICULOS SET FOTO = '$image_name' WHERE ID = 'J1' ";

        $result = $connection->prepare($sql);

        $result->execute();

        if($result->rowCount()>0) {
            echo "El registro se ha insertado con éxito.";
        } else {
            echo "ERROR: No se ha insertado el registro correctamente.";
        }

        $result->closeCursor();

        

    } catch (Exception $e) {

        die("ERROR: " . $e->getMessage());
        
    }


?>