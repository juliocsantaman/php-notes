<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="view/styles/product-view.css">
    <link rel="icon" type="image/jpg" href="">
    <title>Vista de productos</title>
</head>
<body>

<table>
<tr>
    <td class="mainTd">Nombre del artículo</td>
</tr>

<?php

    foreach($product_matrix as $row) {
        echo "<tr> <td>" . $row["NOMBRE_ARTICULO"] . "</td> </tr>";
    }



?>


</table>













</body>
</html>