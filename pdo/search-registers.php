<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=width-device, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="">
    <link rel="icon" type="image/jpg" href="">
    <title> Buscar registros con PDO </title>

</head>

<body>

<?php

    $section = $_GET["section"];
    $origin_country = $_GET["origin-country"];

    try {
        $base = new PDO("mysql:host=localhost; port=3308; dbname=php_course", "root", "");
        $base -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $base -> exec("SET CHARACTER SET UTF8");
        //echo "Conexión Ok.";

        $query = "SELECT SECCION, NOMBRE_ARTICULO, PRECIO, PAIS_ORIGEN FROM ARTICULOS WHERE SECCION = :section AND PAIS_ORIGEN = :ori_country"; //We are using markers.
        $result = $base->prepare($query); //It returns an object of PDOstatement.
        $result -> execute(array(":section"=>$section, ":ori_country"=>$origin_country)); //We're using markers.

        while($row=$result->fetch(PDO::FETCH_ASSOC)) {
            echo "Sección del artículo: " . $row["SECCION"] . "<br>";
            echo "Nombre del artículo: " . $row["NOMBRE_ARTICULO"] . "<br>";
            echo "Precio del artículo: " . $row["PRECIO"] . "<br>";
            echo "País de origen: " . $row["PAIS_ORIGEN"] . "<br>";
            echo "<br><br>";
        }

        $result->closeCursor();

    } catch (Exception $e) {
        die("Error  " . $e->getMessage());
        
    } finally {
        $base = null;
    }


?>

</body>

</html>