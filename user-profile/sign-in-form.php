<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./styles/sign-in-form.css?n="<?php echo rand() ?>>
    <link rel="icon" type="image/jpg" href="">
    <title>Iniciar sesión</title>
</head>
<body>

    <h1>Iniciar Sesión</h1>

    <form action="sign-in.php" method="POST">

        <table>

            <tr>
                <td> <label for="user">Usuario: </label> </td>
                <td> <input type="text" name="user" placeholder="Aquí va tu usuario."> </td>
            </tr>

            <tr>
                <td> <label for="password">Contraseña: </label> </td>
                <td> <input type="password" name="password" placeholder="Aquí va tu contraseña."> </td>
            </tr>
            
            <tr>
                <td colspan="2"> <input type="submit" name="send" value="Iniciar Sesión"> </td>
            </tr>


        </table>




    </form>





</body>
</html>