<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bucles PHP</title>
</head>
<body>
    <?php
        for ($i=10; $i>=-10; $i--) { 

            if($i == 0) {
                echo "No se puede realizar una división entre cero. </br>"; 
                continue;
            }

            echo "10 / $i = " . 10/$i . "</br>";
        }
    ?>
</body>
</html>