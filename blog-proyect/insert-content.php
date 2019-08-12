<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="">
    <link rel="icon" type="" href="">
    <title>Insertar contenido</title>
</head>
<body>

    <?php

        $connection = mysqli_connect("localhost", "root", "", "blog-bbdd", "3308");
        mysqli_set_charset($connection, "UTF8");
        
        //Check connection.
        if(!$connection) {
            echo "La conexión ha fallado: " . mysqli_error($connection);
            exit();
        }

        
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

                $route_destiny = "images/";

                move_uploaded_file($_FILES["image"]["tmp_name"], $route_destiny.$_FILES["image"]["name"]);

                echo "El archivo " . $_FILES["image"]["name"] . " se ha copiado en el directorio de imágenes.";

            } else {
                echo "El archivo no se ha podido copiar al directorio de imágenes.";
            }
        }

        $title = $_POST["title"];
        $date = date("Y-m-d H:i:s");
        $comments = $_POST["comments"];
        $image = $_FILES["image"]["name"];

        $sql = "INSERT INTO content (title, date, comment, image) VALUES ('" . $title ."', '" . $date . "', 
        '" . $comments ."', '" . $image ."') ";

        $result = mysqli_query($connection, $sql);

        //We close the connection.
        mysqli_close($connection);

        echo "<br>Se ha agregado el comentario con éxito.<br><br>";

        echo "<a href='form.php'>Añadir nueva entrada.</a>";
        echo "<a href='show-blog.php'>Ver blog.</a>";

    ?>







</body>
</html>