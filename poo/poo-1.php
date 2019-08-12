<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POO 1</title>
</head>
<body>
    <?php
        include("cars.php");

        $ferrari = new Car();
        $ferrari->setColor("Morado", "Ferrari");
        echo "Número de llantas:" . $ferrari->getTires() . "<br>";
        echo "Motor de: " . $ferrari->getEngine() . " cc <br><br>";
        

        $pegaso = new Bus();
        $pegaso->setColor("Gris", "Pegaso");
        echo "Número de llantas: " . $pegaso->getTires() . "<br>";
        echo "Motor de: " . $pegaso->getEngine() . " cc <br>";
        
    ?>
</body>
</html>