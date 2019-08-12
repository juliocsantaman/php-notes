<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP strings</title>

    <style>
        .highlight {
            color: red;
            text-align: center;
        }
    </style>

</head>
<body>

<?php

    echo "<h1 class='highlight'> STRINGS EN PHP </h1> <br>";

    $name="Julio Cesar";

    echo "<p class='highlight'>Hola $name</p>";

    $stringOne = "Juuzoujs";
    $stringTwo = "Juuzoujs";

    $res=strcmp($stringOne, $stringTwo);

    echo $res;

    /*if($res) {
        echo "No coinciden";
    } else {
        echo "Coinciden";
    }*/

    

    

?>



    
</body>
</html>