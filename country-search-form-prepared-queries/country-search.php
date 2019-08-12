<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="">
    <link rel="icon" type="image/jpg" href="">
    <title>Buscando país</title>
</head>

<body>
    <?php
        $country = $_GET["country"];

        require("../connection/connection-data.php");

        $connection = mysqli_connect($db_host, $db_user, $db_password, $db_name, 3308);

        if(mysqli_errno($connection)) {
            echo "Falló al conectar con la base de datos.";
            exit();
        }

        mysqli_select_db($connection, $db_name) or die("No se encuentra la BBDD");

        mysqli_set_charset($connection, "UTF8");

        $sql = "SELECT ID, NOMBRE_ARTICULO, PAIS_ORIGEN, PRECIO FROM ARTICULOS WHERE PAIS_ORIGEN = ?";
        $result = mysqli_prepare($connection, $sql);
        $ok = mysqli_stmt_bind_param($result, "s", $country);
        $ok = mysqli_execute($result);

        if(!$ok) {
            echo "Error al ejecutar la consulta.";
        } else {
            $ok = mysqli_stmt_bind_result($result, $id, $article_name, $origin_country, $price);

            echo "Artículos encontrados: <br><br>";

            while(mysqli_stmt_fetch($result)) {

                echo $id . "  " . $article_name . "  " . $origin_country . "  " . $price . "<br>";


            }

            mysqli_stmt_close($result);
        }

        


        mysqli_close($connection);
    ?>

</body>

</html>