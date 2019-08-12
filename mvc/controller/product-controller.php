<?php
    require_once("model/product-query.php");

    $product = new products_model();
    $product_matrix = $product->get_products();

    require_once("view/product-view.php");




?>