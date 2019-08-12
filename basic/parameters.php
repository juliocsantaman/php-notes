<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Parámetros por referencia</title>
</head>
<body>
    <?php

        //Parámetros por referencia.

        /*function increase(&$value) {
            $value++;

            return $value;
        }
        $value = 5;
        echo increase($value) . "</br>";
        echo $value;*/

        function sentence_capitalLetter(&$sentence) {
            $sentence = strtolower($sentence);
            $sentence = ucwords($sentence);

            return $sentence;
        }

        $mySentence = "holA mUnDo";

        echo sentence_capitalLetter($mySentence) . "</br>";
        echo $mySentence;

    ?>
</body>
</html>