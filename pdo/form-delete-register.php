<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=width-device, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/styles.css?n=1">
    <link rel="icon" type="image/jpg" href="">
    <title> Formulario eliminar registro </title>
</head>

<body>

    <form name="form-delete-register" action="delete-register.php" method="POST">

        <table>
            <tr>
                <td> <label for="id"> ID: </label> </td>
                <td> <input type="text" name="id" placeholder="escribe el id">
            </tr>

            <tr>
                <td colspan="2"> <input type="submit" name="send" value="Ok"> </td>
            </tr>
        </table>

    </form>

</body>


</html>