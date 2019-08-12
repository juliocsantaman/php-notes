<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="">
    <link rel="icon" type="image/jpg" href="">
    <title> Cookies PHP </title>

</head>

<body>
    <?php 
        setcookie("example", "Esta es la información de nuestra primera cookie.", time()+400, 
        "/desarrollo-web/backend/php-notes/sessions-cookies/");
    ?>
    

</body>

</html>