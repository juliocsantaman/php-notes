<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arrays PHP</title>
</head>
<body>

<?php

    //ARRAY INDEXADO
    //Arrays forma 1.
   //$week = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];

    //Arrays forma 2.
    //$week[] = "Monday";
    //$week[] = "Tuesday";
    //$week[] = "Wednesday";
    
    //Arrays forma 3.
    $week = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
    //Agregar un elemento al Array Indexado.
    $week[] = "Agregado";

    //$array = array("Julio", 19);
    //echo $array[0] . "<br>";
    //echo $array[1] . "<br>";

    /********************************************************************************************* */

    //ARRAY ASOCIATIVO
    $data= array("Name" => "Julio", "LastName" => "Santaman", "Age" => 19 );
    //Agregar un elemento a un Array Asociativo.
    $data["Country"] = "Cancún";

    //echo "Hola $data[Name] $data[LastName], con $data[Age] años";


    /******************************************************************************************************/

    // Comprobar si la variable es un ARRAY o no.
    //$data = array("Julio", "Santaman", 19);
    /*$data = "Julio Cesar";
    if(is_array($data)) {
        echo "Es un Array xD";
    } else {
        echo "No es un Array :v";
    }*/
    
    //Esta es la manera para recorrer un Array Indexado.
    /*for($i=0; $i<count($week); $i++) {
        echo $week[$i] . "<br>";
    }*/

    //Esta es la manera para recorrer un Array Asociativo.
    /*foreach ($data as $key => $value) {
        echo "A $key le corresponde $value <br>";
    }*/

    //Ordenar un Array.
    $numbers = array(5,4,1,7,8,9);
    sort($numbers);
    for ($i=0; $i < count($numbers); $i++) { 
        echo $numbers[$i] . "<br>";
    }

?>



    
</body>
</html>