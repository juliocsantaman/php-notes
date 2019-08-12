<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./styles/registered-users.css?n=1">
    <link rel="icon" type="image/jpg" href="">
    <title> Usuarios Registrados </title>
</head>
<body>

    <?php
        session_start(); //We resume the session.
        if(!isset($_SESSION["username"])) {
            header("location: login.php");
        }        
    ?>

    <?php
        echo "<button class='user-btn'> Usuario: " . $_SESSION["username"]  . "</button>"
    ?>

    <h1> Bienvenido Usuario. :) </h1>

    <p> Esto es solo para usuarios registrados. </p>

    <a href="registered-users.php">Página 1</a>
    <a href="registered-users-2.php">Página 2</a>
    <a href="registered-users-3.php">Página 3</a>

    <a href="sign-out.php"> Cerrar Sesión </a>


</body>

</html>