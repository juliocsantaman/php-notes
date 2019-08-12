<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="styles.css">
    <title>Ejemplo operadores</title>
</head>
<body>

<h1>CALCULADORA</h1>

<form name="form1" id="form1" method="POST" action="">

    <label for="num1">Número 1</label>
    <input type="text" name="num1", id="num1">

    <label for="num2">Número 2</label>
    <input type="text" name="num2" id="num2">

    <label for="operation">
    <select name="operation" id="operation">
        <option> Suma </option>
        <option> Resta </option>
        <option> Multiplicación </option>
        <option> División </option>
        <option> Módulo </option>
        <option> Incremento </option>
        <option> Decremento </option>
    </select>

    <input type="submit" name="btn1" id="btn1" value="Send" onClick="prueba">
</form>

<?php

    include("calculadora.php");

     if(isset($_POST["btn1"])) {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operation = $_POST["operation"];

        calculate($operation, $num1, $num2);

    }



?>

</body>
</html>