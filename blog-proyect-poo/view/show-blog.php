<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="">
    <link rel="icon" type="image/jpg" href="">
    <title>Mostrando Blog</title>
</head>
<body>

    <h2>Blog</h2>
    

    <?php

        include("../model/object-manage.php");

        try {
            $connection = new PDO("mysql:host=localhost; port=3308; dbname=blog-bbdd", "root", "");
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


            $object_manage = new Object_Manage($connection);

            $blog_table = $object_manage->get_content_date();

            // If registers == 0 
            if(empty($blog_table)) {
                echo "No hay entradas de blog aún.";
            } else {

                foreach($blog_table as $value) {

                    echo "<h3>" . $value->get_title() . "</h3>";

                    echo "<h4>" . $value->get_date() . "</h3>";

                    echo "<div style='width: 400px;'>";

                    echo $value->get_comment();

                    echo "</div>";

                    if($value->get_image() != "") {
                        echo "<img src='../images/";
                        echo $value->get_image() . "' width='300px' height='200px' />";
                    }

                    echo "<hr/>";

                }

            }


        } catch (Exception $e) {
            die("Error: " . $e->getMessage());
            
        }

    
    ?>

        <br>
        <a href="form.php">Volver a la página de inserción</a> 



</body>
</html>