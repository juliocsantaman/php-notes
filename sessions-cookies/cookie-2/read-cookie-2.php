<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href-"">
    <link rel="icon" type="image/jpg" href="">
    <title> Leyendo la cookie </title>
</head>

<body>

    <?php
        if(isset($_COOKIE["example"])) {
            echo $_COOKIE["example"];
        } else {
            echo "ERROR AL CARGAR LA COOKIE. NO SE HA CREADO.";
        }
    ?>

</body>

</html>