<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <title>Conexión BBDD PHP</title>
</head>
<body>

<?php

    include("connection-data.php");

    //The new port is: 3308 because of I added it in parameters.
    $connection=mysqli_connect($db_host, $db_user, $db_password, $db_name, 3308); 

    if (mysqli_connect_errno()) {
        echo "ERROR.";
        exit();
    }

    mysqli_select_db($connection, $db_name) or die ("No se encuentra la BBDD");

    mysqli_set_charset($connection, "UTF8");

    $query="SELECT * FROM artículos";

    $results=mysqli_query($connection, $query);

    // mysqli_fetch_row($results)
    // mysqli_fetch_assoc($results)
    while ($row=mysqli_fetch_assoc($results)) {
        echo "<table> <tr> <td>";
        /*for ($i=0; $i <count($row); $i++) {
            
            echo $row[$i] . "</td><td>  ";
        }*/

        echo $row['SECCION'] . "</td> <td>";
        echo $row['NOMBRE_ARTICULO'] . "</td> <td>";
        echo $row['PRECIO'] . "</td> <td>";

        echo "</tr> </table>";

        

        
    }
    

    mysqli_close($connection);


?>



    
</body>
</html>