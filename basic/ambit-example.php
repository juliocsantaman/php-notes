<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ámbito de variables</title>
</head>
<body>

<?php

    $name="Julio Cesar";

    Function getName() {

        global $name;

        $name="El nombre es: " . $name;
        
    }

    getName();

    echo $name;


?>



    
</body>
</html>