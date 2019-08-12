<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/insert-registers-form.css">
    <title>Formulario de insertar artículos</title>
</head>
<body>
    <h1>ELIMINACIÓN DE ARTÍCULOS</h1>
    <form name="form1" action="delete-registers.php" method="GET">
        <table border="0" align="center">

            <tr>
                <td>ID: </td>
                <td>
                    <label for="id"></label>
                    <input type="text" name="id">

                </td>
            </tr>

            <tr>
                <td align="center"><input type="submit" name="delete" value="Eliminar"></td>
                <td align="center"><input type="reset" name="erase" value="Borrar"></td>
            </tr>

        </table>
    </form>
</body>
</html>