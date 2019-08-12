<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="">
    <title>Dar de baja usuario</title>
</head>

<body>
    <?php

        

        include("../connection/connection-data.php");

        $connection = mysqli_connect($db_host, $db_user, $db_password, $db_name, 3308);

        $user = mysqli_real_escape_string($connection, $_GET["user"]);
        $password = mysqli_real_escape_string($connection, $_GET["password"]);

        if(mysqli_connect_errno()) {
            echo "ERROR CON LOS DATOS.";
            exit();
        }

        mysqli_select_db($connection, $db_name) or die ("No se encuentra la BBDD");
        mysqli_set_charset($connection, "UTF8");

        $query = "DELETE FROM USERS WHERE USER = '$user' AND PASSWORD = '$password'";

        $result = mysqli_query($connection, $query);

        if(mysqli_affected_rows($connection)>0) {
            echo "Usuario eliminado correctamente.";
        } else {
            echo "Usuario no encontrado.";
        }

       

        /*while($row=mysqli_fetch_assoc()) {



        }*/

        mysqli_close($connection);



    ?>
</body>

</html>