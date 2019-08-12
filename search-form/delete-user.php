<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="">
    <title>Dar de baja usuario</title>
</head>

<body>
    <form name="delete-user" action="delete-information.php" method="GET">
        <label for"user">Usuario: </label>
        <input type="text" name="user" placeholder="escribe tu usuario...">

        <label for="password">Contraseña: </label>
        <input type="text" name="password" placeholder="escribe tu contraseña...">

        <input type="submit" name="send" value="Ok">

    </form>
</body>

</html>