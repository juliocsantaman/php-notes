<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=width-device, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="">
    <link rel="icon" type="image/jpg" href="">
    <title> Insertando registro </title>

</head>

<body>

<?php

    $id = $_POST["id"];
    $section = $_POST["section"];
    $article_name = $_POST["article-name"];
    $date = $_POST["date"];
    $origin_country = $_POST["origin-country"];
    $price = $_POST["price"];

    try {
        $base = new PDO("mysql:host=localhost; port=3308; dbname=php_course", "root", "");
        $base -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $base -> exec("SET CHARACTER SET UTF8");
        //echo "Conexión Ok.";

        $query = "INSERT INTO ARTICULOS (ID, SECCION, NOMBRE_ARTICULO, FECHA, PAIS_ORIGEN, PRECIO) 
        VALUES (:id, :section, :article_name, :date1, :origin_country, :price)"; //We are using markers.
        $result = $base->prepare($query); //It returns an object of PDOstatement.
        $result -> execute(array(":id"=>$id, ":section"=>$section, ":article_name"=>$article_name, ":date1"=>$date,
         ":origin_country"=>$origin_country, ":price"=>$price)); //We're using markers.

        /*while($row=$result->fetch(PDO::FETCH_ASSOC)) {
            echo "Sección del artículo: " . $row["SECCION"] . "<br>";
            echo "Nombre del artículo: " . $row["NOMBRE_ARTICULO"] . "<br>";
            echo "Precio del artículo: " . $row["PRECIO"] . "<br>";
            echo "País de origen: " . $row["PAIS_ORIGEN"] . "<br>";
            echo "<br><br>";
        }*/

        echo "Registro insertado correctamente :)";

        $result->closeCursor();

    } catch (Exception $e) {
        die("Error  " . $e->getMessage());
        
    } finally {
        $base = null;
    }


?>

</body>

</html>