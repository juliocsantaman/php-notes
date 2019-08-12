<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./styles/profile-insert-form.css?n="<?php echo rand() ?>>
    <link rel="icon" type="image/jpg" href="">
    <title>Formulario de insertar perfil</title>
</head>
<body>

    <h1>Inserta tu perfil</h1>

    <form action="insert-register.php" method="POST">

        <table>

            <tr>
                <td> <label for="user">Usuario: </label> </td>
                <td> <input type="text" name="user" placeholder="Aquí va tu usuario"> </td>
            </tr>

            <tr>
                <td> <label for="password">Contraseña: </label> </td>
                <td> <input type="password" name="password" placeholder="Aquí va tu contraseña"> </td>
            </tr>

            <tr>
                <td> <label for="profile">Perfil</label> </td>
                <td> 
                    <select name="profile">
                        <option>Administrador</option>
                        <option>Usuario</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td class="move-to-right" colspan="2"> <input type="submit" name="send" value="Enviar"> </td>
            </tr>

        </table>




    </form>





</body>
</html>