<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arrays Multidimensionales PHP</title>
</head>
<body>

<?php

$foods = array("fruit" => array("tropical" => "kiwi",
                                "citric" => "tangerine",
                                "other" => "apple"), 

               "milk" => array("animal" => "cow",
                               "vegetable" => "coconut"), 

               "meat" => array("bovine" => "loin",
                               "porcine" => "paw"));

//echo $foods["fruit"]["other"];

foreach ($foods as $key_food => $value_food) {
    echo "$key_food <br>";

    while(list($key, $value)=each($value_food)) {
        echo "$key=$value <br>";
    }

    echo "<br>";
}



?>



    
</body>
</html>