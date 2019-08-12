<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="">
    <link rel="icon" type="image/jpg" href="">
    <title>Mostrando imagen de la BD</title>
</head>
<body>


<?php

    try {
        $connection = new PDO("mysql:host=localhost; port=3308; dbname=php_course", "root", "");
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connection->exec("SET CHARACTER SET UTF8");

        $sql = "SELECT FOTO FROM articulos WHERE ID = 'J1' ";
        $result = $connection->prepare($sql);
        $result->execute();

        while($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $route_img = $row["FOTO"];
        }

        $result->closeCursor();

    } catch (Exception $e) {
        die("ERROR: " . $e->getMessage());
    }


?> 

<div>  
    <img src="/intranet/uploads/<?php echo $route_img ?>" style="border-radius: 10px;">
</div>

</body>
</html>