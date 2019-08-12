<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../styles/styles.css">
    <title>Resultados de la busqueda</title>
</head>
<body>

<?php

    $search = $_GET["search-name"];
    //$user = $_GET["user"];
    //$password = $_GET["password"];

    include("../connection/connection-data.php");

    //The new port is: 3308 because of I added it in parameters.
    $connection=mysqli_connect($db_host, $db_user, $db_password, $db_name, 3308); 

    if (mysqli_connect_errno()) {
        echo "ERROR.";
        exit();
    }

    mysqli_select_db($connection, $db_name) or die ("No se encuentra la BBDD");

    mysqli_set_charset($connection, "UTF8");

    $query="SELECT * FROM articulos WHERE NOMBRE_ARTICULO LIKE '%$search%' ";

    //$query="SELECT * FROM articulos WHERE NOMBRE_ARTICULO = '$search' ";

    //$query = "SELECT * FROM USERS WHERE USER = '$user' AND PASSWORD = '$password'";
    

    $results=mysqli_query($connection, $query);

    if($results->num_rows == 0) {
        echo "Lo sentimos. No se pudo encontrar una coincidencia para la palabra: <strong> $search.</strong> Inténtelo de nuevo.";
        exit;
    }

    // mysqli_fetch_row($results)
    // mysqli_fetch_assoc($results)
    while ($row=mysqli_fetch_assoc($results)) {
        
        /*for ($i=0; $i <count($row); $i++) {
            
            echo $row[$i] . "</td><td>  ";
        }*/

        echo "<table>";
            echo "<tr> <td>". $row['SECCION'] ."</td>";
            echo "<td>" . $row['NOMBRE_ARTICULO'] . "</td>";
            echo "<td>" . $row['PRECIO'] . "</td> </tr>";
            
        echo "</table>";

        
        /*echo "<table> <tr> <td>";
        echo "Bienvenido usuario, estos son tus datos. </td> <td>";

        echo $row['USER'] . "</td> <td>";
        echo $row['PASSWORD'] . "</td> <td>";
        echo $row['ADDRESS'] . "</td>";

        echo "</tr> </table>";*/

    }
    

    mysqli_close($connection);


?>



    
</body>
</html>