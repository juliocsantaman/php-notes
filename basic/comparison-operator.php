<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Operadores de comparación</title>

    <style>
        .box {
            border: solid #000;
            padding: 5px;
            max-width: 250px;
            background: #FFF9C4;
        }

        .centerText {
            text-align: center;
        }

        .move {
            margin: auto;
        }

        .btn {
            
            padding: 3px;
            margin: 5px 0 0 100px;
        }
    </style>

    

</head>
<body>

<form action="validacion.php" method="post" name="data_user" id="data_user">

    <h1 class="centerText">USANDO OPERADORES DE COMPARACIÓN</h1>
    
    <div class="box move">
        <label for="name">Nombre: </label>
        <input type="text" name="name" id="name">
        <br> <br>
        <label for="age">Edad: </label>
        <input type="text" name="age" id="age">

        <button type="submit" class="btn" name="send" id="send">Enviar</button>
    </div>

</form>

</body>
</html>