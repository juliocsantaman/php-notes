<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../styles/insert-registers-form.css">
    <title>Formulario de insertar artículos</title>
</head>
<body>
    <h1>FORMULARIO DE ARTÍCULOS</h1>
    <form name="form1" action="insert-registers.php" method="GET">
        <table border="0" align="center">

            <tr>
                <td>ID: </td>
                <td>
                    <label for="id"></label>
                    <input type="text" name="id">

                </td>
            </tr>

            <tr>
                <td>Sección: </td>
                <td>
                    <label for="section"></label>
                    <input type="text" name="section">

                </td>
            </tr>

            <tr>
                <td>Nombre: </td>
                <td>
                    <label for="article-name"></label>
                    <input type="text" name="article-name">

                </td>
            </tr>

            <tr>
                <td>Fecha: </td>
                <td>
                    <label for="date"></label>
                    <input type="text" name="date">

                </td>
            </tr>

            <tr>
                <td>País de origen: </td>
                <td>
                    <label for="origin-country"></label>
                    <input type="text" name="origin-country">
                    
                </td>
            </tr>

            <tr>
                <td>Precio: </td>
                <td>
                    <label for="price"></label>
                    <input type="text" name="price">

                </td>
            </tr>
            
            <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
            </tr>

            <tr>
                <td align="center"><input type="submit" name="send" value="Enviar"></td>
                <td align="center"><input type="reset" name="delete" value="Borrar"></td>
            </tr>
    
    
    

        </table>
    </form>
</body>
</html>