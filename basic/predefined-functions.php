<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Funciones Predefinidas</title>
</head>
<body>

    <?php

        /*$name = "MY NAME IS JUUZOUJS.";
        $name2 = "julio cesar";

        $res = ucwords($name2);
        echo $res;*/

        //Funciones creadas.
        /*function add($num1, $num2) {
            $res = $num1 + $num2;
            return $res;
        }

        $res = add(5,7);
        echo "La suma es: $res";*/

        function sentence_capitalLetter($sentence, $convert = true) {
            $sentence = strtolower($sentence);

            if($convert) {
                $sentence = ucwords($sentence);
            } else {
                $sentence = strtoupper($sentence);
            }

            return $sentence;
        }

        echo sentence_capitalLetter("voy a confiar mas en Dios.", false);



    ?>
    
</body>
</html>