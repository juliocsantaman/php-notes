<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../styles/styles.css">
    <title>Resultados de la busqueda</title>

    <?php
    
    function search_query($data) {
    //$search = $_GET["search-name"];

    include("../connection/connection-data.php");

    //The new port is: 3308 because of I added it in parameters.
    $connection=mysqli_connect($db_host, $db_user, $db_password, $db_name, 3308); 

    if (mysqli_connect_errno()) {
        echo "ERROR.";
        exit();
    }

    mysqli_select_db($connection, $db_name) or die ("No se encuentra la BBDD");

    mysqli_set_charset($connection, "UTF8");

    $query="SELECT * FROM artículos WHERE NOMBRE_ARTICULO LIKE '%$data%' ";

    
      

    $results=mysqli_query($connection, $query);

    if ($results->num_rows === 0) {
        echo "Lo sentimos. No se pudo encontrar una coincidencia para la palabra: <strong> $data.</strong> Inténtelo de nuevo.";
        exit;
    }

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
}

?>


</head>
<body>

    <?php
        
        $my_search = isset($_GET["article-name"]) ? $_GET["article-name"] : "";
        $my_page = $_SERVER["PHP_SELF"];

        if($my_search != NULL) {
            search_query($my_search);
        } else {
            echo "
            
            <form action='" . $my_page . "' method='GET'>
                <label for='article-name'>Buscar: </label>
                <input type='text' name='article-name'>
                <input type='submit' name='search' value='Go!'>
            </form>
            
            ";
        }


    ?>




    
</body>
</html>
