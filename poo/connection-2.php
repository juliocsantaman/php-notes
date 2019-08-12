<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=width-device, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="">
    <link rel="icon" type="image/jpg" href="">
    <title> Conexión con POO </title>

</head>

<body>

<?php

    $connection = new mysqli("localhost", "root", "", "php_course", 3308);

    if($connection -> connect_errno) {
        echo "Falló la conexión. " . $connection -> connect_errno;
    }

    $connection -> set_charset("utf8");

    $query = "SELECT * FROM ARTICULOS";

    //Forma procedimental.
    //$results = mysqli_query($connection, $query);
    //Forma POO.
    $results = $connection -> query($query);

    if($connection -> errno) {
        die($connection -> error);
    }

    while($row=$results -> fetch_assoc()) {
        echo "<table> <tr>";
        echo "<td>". $row['ID'] ."</td>";
        echo "<td>". $row['SECCION'] . "</td>";
        echo "<td>". $row['NOMBRE_ARTICULO'] . "</td>";
        echo "<td>". $row['FECHA'] . "</br>";
        echo "<td>". $row['PAIS_ORIGEN'] . "</br>";
        echo "<td>". $row['PRECIO'] . "</br>";
        echo "</tr> </table>";
    }

    $connection -> close();






?>




</body>

</html>