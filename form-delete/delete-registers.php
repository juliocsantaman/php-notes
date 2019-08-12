<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insertando registros PHP</title>
</head>
<body>

<?php

$id = $_GET["id"];
//$section = $_GET["section"];
//$article_name = $_GET["article-name"];
//$date = $_GET["date"];
//$origin_country = $_GET["origin-country"];
//$price = $_GET["price"];

require("connection/connection-data.php");

//The new port is: 3308 because of I added it in parameters.
$connection=mysqli_connect($db_host, $db_user, $db_password, $db_name, 3308); 

if (mysqli_connect_errno()) {
    echo "ERROR.";
    exit();
}

mysqli_select_db($connection, $db_name) or die ("No se encuentra la BBDD");
mysqli_set_charset($connection, "UTF8");

$query="DELETE FROM ARTICULOS WHERE ID = '$id'";

$results=mysqli_query($connection, $query);

if(!$results) {
    echo "Registro no eliminado :v. Intentelo de nuevo.";
    
} else {

    if(mysqli_affected_rows($connection) == 0) {
        echo "No hay registros que eliminar.";
    } else {

        if(mysqli_affected_rows($connection) == 1) {
            echo "Se ha eliminado " . mysqli_affected_rows($connection) . " registro.";
            
        } else {
            echo "Se han eliminado " . mysqli_affected_rows($connection) . " registros.";
            
        }
        
    }
}

//Clean form.
if(isset($_POST["erase"])) {
    
}

mysqli_close($connection);



?>

</body>
</html>