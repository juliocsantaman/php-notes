<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./styles/sign-in.css?n=1">
    <link rel="icon" type="image/jpg" href="">
    <title> Sign in </title>

</head>
<body>

    <div class="login-color">
    <h1> Inicio de sesión </h1>

    <form name="login-form" action="check-login.php" method="POST">
        <table>
            <tr>
                <td> <label for="username"> Nombre de usuario: </label> </td>  
                <td> <input type="text" name="username" placeholder="escribe tu usuario"> </td>  
            </tr>

            <tr>
                <td> <label for="password"> Contraseña: </label> </td>
                <td> <input  type="password" name="password" placeholder="escribe tu contraseña" </td>
            </tr>

            <tr> 
                <td class="btn-send" colspan="2"> <input class="btn-1" type="submit" name="send" value="Enviar"> </td> 
            </tr>
        </table>
    </form>
    </div>

</body>
</html>