<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/form-send.css">
    <link rel="icon" type="image/jpg" href="">
    <title>Enviar correo</title>
</head>
<body>

    <h1>Enviar correo</h1>

    <form name="form-send" action="send-email.php" method="POST">
        <table>
            <tr>
                <td><label for="name">Nombre: </label></td>
                <td><input type="text" name="name" placeholder="escribe tu nombre"></td>
            </tr>

            <tr>
                <td><label for="last-name">Apellido: </label></td>
                <td><input type="text" name="last-name" placeholder="escribe tu apellido"></td>
            </tr>

            <tr>
                <td> <label for="email">E-mail *: </label> </td>
                <td> <input type="email" name="email" placeholder="escribe tu e-mail"> </td>
            </tr>

            <tr>
                <td> <label for="telephone">Teléfono: </label> </td>
                <td> <input type="text" name="telephone" placeholder="escribe tu teléfono"> </td>
            </tr>

            <tr>
                <td> <label for="subject">Asunto *: </label> </td>
                <td> <input type="text" name="subject" placeholder="escribe tu asunto"> </td>
            </tr>

            <tr>
                <td> <label for="comments">Comentarios *: </label> </td>
                <td> <textarea name="comments" maxlength="500" cols="30" rows="5"></textarea> </td>
            </tr>

            <tr>
                <td colspan="2"> <input type="submit" name="send" value="Enviar"></td>
            </tr>
        </table>

    </form>





</body>
</html>