<?php

        include_once("../model/object-model.php");
        include_once("../model/object-manage.php");

        try {
            $connection = new PDO("mysql:host=localhost; port=3308; dbname=blog-bbdd", "root", "");
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            if($_FILES["image"]["error"]) {
                switch ($_FILES["image"]["error"]) {
                    case 1:
                        echo "El tamaño del archivo excede lo permitido por el servidor.";
                        break;

                    case 2:
                        echo "El tamaño del archivo excede 2 MB.";
                        break;

                    case 3:
                        echo "El envio del archivo se interrumpió.";
                        break;

                    case 4:
                        
                        echo "No se ha enviado ningún archivo.";
                        break;
                    
                    /*default:
                        echo "ERROR: Intentelo de nuevo.";
                        break;*/
                }
            } else {
                echo "Entrada subida correctamente <br>";
                
                if( isset($_FILES["image"]["name"]) && $_FILES["image"]["error"] == UPLOAD_ERR_OK ) {

                    $route_destiny = "../images/";

                    move_uploaded_file($_FILES["image"]["tmp_name"], $route_destiny.$_FILES["image"]["name"]);

                    echo "El archivo " . $_FILES["image"]["name"] . " se ha copiado en el directorio de imágenes.";

                } else {
                    echo "El archivo no se ha podido copiar al directorio de imágenes.";
                }
            }

            $object_manage = new Object_Manage($connection);
            $blog = new Object_Model();

            $blog->set_title(htmlentities(addslashes($_POST["title"]), ENT_QUOTES));
            $blog->set_date(Date("Y-m-d H:i:s"));
            $blog->set_comment(htmlentities(addslashes($_POST["comment"]), ENT_QUOTES));
            $blog->set_image($_FILES["image"]["name"]);

            $object_manage->insert_content($blog);

            echo "<br>Entrada de blog agregada con éxito.";




        } catch (Exception $e) {
            die("Error: " . $e->getMessage());

        }

        

    ?>