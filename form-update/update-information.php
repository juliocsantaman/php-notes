<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actualizando registros PHP</title>
</head>
<body>

<?php

$id = $_GET["id"];
$section = $_GET["section"];
$article_name = $_GET["article-name"];
$date = $_GET["date"];
$origin_country = $_GET["origin-country"];
$price = $_GET["price"];

require("../connection/connection-data.php");

//The new port is: 3308 because of I added it in parameters.
$connection=mysqli_connect($db_host, $db_user, $db_password, $db_name, 3308); 

if (mysqli_connect_errno()) {
    echo "ERROR.";
    exit();
}

mysqli_select_db($connection, $db_name) or die ("No se encuentra la BBDD");
mysqli_set_charset($connection, "UTF8");


$query=" UPDATE ARTICULOS SET ID='$id', SECCION='$section', NOMBRE_ARTICULO='$article_name', 
FECHA='$date', PAIS_ORIGEN='$origin_country', PRECIO=$price WHERE ID='$id' ";



$results=mysqli_query($connection, $query) or die("Error al ejecutar la query: ".mysqli_error());

if($results) {
    echo "Registro realizado con éxito. <br><br>";

    echo "<table><tr><td> $id </td></tr></table>";
    echo "<table><tr><td> $section </td></tr></table>";
    echo "<table><tr><td> $article_name </td></tr></table>";
    echo "<table><tr><td> $date </td></tr></table>";
    echo "<table><tr><td> $origin_country </td></tr></table>";
    echo "<table><tr><td> $price </td></tr></table>";
} else {
    echo "Registro no realizado :v. Intentelo de nuevo.";
}

mysqli_close($connection);



?>

</body>
</html>