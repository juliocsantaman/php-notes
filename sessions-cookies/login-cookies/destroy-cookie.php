<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="">
    <link rel="icon" type="image/jpg" href="">
    <title>Destruir cookie </title>
</head>
<body>

    <?php
        setcookie("username_cookie", "Juuz", time()+(-1));
        echo "Cookie destruida.";
    ?>


</body>
</html>