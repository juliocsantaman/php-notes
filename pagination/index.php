<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./styles/index.css?n=1">
    <link rel="icon" type="image/jpg" href="">
    <title>Paginación PHP</title>
</head>
<body>

<?php
try {
    $connection = new PDO("mysql:host=localhost; port=3308; dbname=php_course", "root", "");
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connection->exec("SET CHARACTER SET UTF8");

    $size_page = 3;

    if(isset($_GET["page"])) {
        if($_GET["page"]==1) {
            header("location: index.php");
        } else {
            $page=$_GET["page"];
        }
    } else {

        $page = 1;
    }
    $start_since = ($page-1) * $size_page;

    $total_query = "SELECT SECCION, NOMBRE_ARTICULO, PAIS_ORIGEN, PRECIO FROM articulos WHERE SECCION = 'DEPORTES' ";
    $result = $connection->prepare($total_query);
    $result->execute(array());

    $row_number = $result->rowCount();
    $total_pages = ceil($row_number/$size_page); // 10/3 = 4.

    echo "Número de registros en total: " . $row_number . ".<br>";
    echo "Mostramos " . $size_page . " registros por página.<br>";
    echo "Mostrando la página " . $page . " de " . $total_pages . "<br><br>";

   
    $result->closeCursor();

    $sql_limit = "SELECT SECCION, NOMBRE_ARTICULO, PAIS_ORIGEN, PRECIO FROM articulos WHERE SECCION = 'DEPORTES' 
    LIMIT $start_since, $size_page";

    $result = $connection->prepare($sql_limit);
    $result->execute(array());

    while($rows=$result->fetch(PDO::FETCH_ASSOC)) {
        echo "Sección: " . $rows["SECCION"] . " Nombre artículo: " . $rows["NOMBRE_ARTICULO"] . " País origen: " . 
        $rows["PAIS_ORIGEN"] . " Precio: " . $rows["PRECIO"] . "<br><br>";
    }

    $result->closeCursor();

    /***************************************************PAGINATION NUMBER************************************************/

    for($i=1; $i<=$total_pages; $i++) {
        echo "<a class='pagination-design' href='?page=" . $i . "'>" . $i . "</a>  ";
    }

    /******************************************************************************************************************/


} catch(Exception $e) {
    die("ERROR" . $e->getMessage());
}

?>










</body>
</html>