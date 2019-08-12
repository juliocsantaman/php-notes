<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=width-device, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="">
    <link rel="icon" type="image/jpg" href="">
    <title>Conexión con PDO</title>
</head>

<body>

<?php

    try {
        $base = new PDO("mysql:host=localhost; port=3308; dbname=php_course", "root", "");
        $base -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $base -> exec("SET CHARACTER SET UTF8");
        echo "Conexión Ok.";
    } catch (Exception $e) {
        die("Error  " . $e->getMessage());
        
    } finally {
        $base = null;
    }


?>


</body>

</html>

