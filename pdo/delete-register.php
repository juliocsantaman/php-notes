<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=width-device, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="">
    <link rel="icon" type="image/jpg" href="">
    <title> Eliminando registro</title>

</head>

<body>

<?php

    $id = $_POST["id"];

    try {
        $base = new PDO("mysql:host=localhost; port=3308; dbname=php_course", "root", "");
        $base -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $base -> exec("SET CHARACTER SET UTF8");

        $query = "DELETE FROM ARTICULOS WHERE ID = :id";
        $result = $base->prepare($query);//It returns an object of PDOstatement.
        $result -> execute(array(":id"=>$id));

        echo "Registro eliminado correctamente :)";
        $result->closeCursor();
    } catch (Exception $e) {
        die("ERROR" . $e->getMessage());
    } finally {
        $base = null;
    }


?>

</body>

</html>