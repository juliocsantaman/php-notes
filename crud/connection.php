<?php

    try {
        $connection = new PDO("mysql:host=localhost; port=3308; dbname=php_course", "root", "");
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connection->exec("SET CHARACTER SET UTF8");

    } catch (Exception $e) {
        die("Error: " . $e->getMessage());
        echo "Línea del error: " . $e->getLine();
    }

?>