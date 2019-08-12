<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="">
    <link rel="icon" type="image/jpg" href="">
    <title>Insertando registro</title>
</head>

<body>
    <?php
        $id = $_GET["id"];
        $section = $_GET["section"];
        $article_name = $_GET["article-name"];
        $date = $_GET["date"];
        $origin_country = $_GET["origin-country"];
        $price = $_GET["price"];


        require("../connection/connection-data.php");

        $connection = mysqli_connect($db_host, $db_user, $db_password, $db_name, 3308);

        if(mysqli_errno($connection)) {
            echo "Falló al conectar con la base de datos.";
            exit();
        }

        mysqli_select_db($connection, $db_name) or die("No se encuentra la BBDD");

        mysqli_set_charset($connection, "UTF8");

        $sql = "INSERT INTO ARTICULOS (ID, SECCION, NOMBRE_ARTICULO, FECHA, PAIS_ORIGEN, PRECIO)
        VALUES (?, ?, ?, ?, ?, ?)";

        $result = mysqli_prepare($connection, $sql);
        $ok = mysqli_stmt_bind_param($result, "sssssi", $id, $section, $article_name, $date, $origin_country, $price);
        $ok = mysqli_execute($result);

        if(!$ok) {
            echo "Error al ejecutar la consulta.";
        } else {
            
            //$ok = mysqli_stmt_bind_result($result, $id, $section, $article_name, $date, $origin_country, $price);

            echo "Se ha agregado un nuevo artículo: <br><br>";
            echo $id . "  " . $section . "  " . $article_name . "  " . $date . "  " . $origin_country . "  " . $price . "<br>";
            /*while(mysqli_stmt_fetch($result)) {

                echo $id . "  " . $section . "  " . $article_name . "  " . $date . "  " . $origin_country . "  " . $price . "<br>";


            }*/

            mysqli_stmt_close($result);
        }

        


        mysqli_close($connection);
    ?>

</body>

</html>