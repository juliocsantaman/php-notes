<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="">
    <link rel="icon" type="image/jpg" href="">
    <title>Mostrando archivo de la BD</title>
</head>
<body>


<?php

    $id = "";
    $type = "";
    $content = "";

    try {
        $connection = new PDO("mysql:host=localhost; port=3308; dbname=php_course", "root", "");
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connection->exec("SET CHARACTER SET UTF8");

        $sql = "SELECT * FROM files WHERE ID = 8 ";
        $result = $connection->prepare($sql);
        $result->execute();

        while($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $id = $row["id"];
            $type = $row["type"];
            $content = $row["content"];
        }

        $result->closeCursor();

    } catch (Exception $e) {
        die("ERROR: " . $e->getMessage());
    }

    echo "ID: $id <br>";
    echo "Tipo: $type <br>";
    echo "<img src='data:image/jpeg; base64,". base64_encode($content)." '>";


?> 



</body>
</html>