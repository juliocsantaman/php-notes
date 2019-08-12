<?php
    require ('return-articles.php');
    $dato = $_GET["origin-country"];
    $articles = new ReturnArticles();
    $array_articles = $articles->get_articles($dato);


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=width-device, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="">
    <link rel="icon" type="image/jpg" href="">
    <title> Visualizando la tabla de articulos </title>
</head>

<body>

    <?php
        foreach($array_articles as $element) {
            echo "<table>";
            echo "<tr>";
            echo "<td>" . $element['ID'] . "</td>";
            echo "<td>" . $element['SECCION'] . "</td>";
            echo "<td>" . $element['NOMBRE_ARTICULO'] . "</td>";
            echo "<td>" . $element['FECHA'] . "</td>";
            echo "<td>" . $element['PAIS_ORIGEN'] . "</td>";
            echo "<td>" . $element['PRECIO'] . "</td>";
            echo "</tr>";
            echo "</table>";
        }

    ?>


</body>

</html>