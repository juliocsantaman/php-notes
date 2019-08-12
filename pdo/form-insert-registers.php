<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=width-device, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/styles.css?n=1">
    <link rel="icon" type="image/jpg" href="">
    <title> Formulario insertar registros </title>
</head>

<body>

    <form name="form-insert-registers" action="insert-registers.php" method="POST">
        
        <table>
            <tr>
                <td>
                    <label for="id"> ID: </label>
                </td>

                <td>
                    <input type="text" name="id" placeholder="escribe el id">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="section"> Sección: </label>
                </td>

                <td>
                    <input type="text" name="section" placeholder="escribe la sección">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="article-name"> Nombre artículo: </label> 
                </td>

                <td>
                    <input type="text" name="article-name" placeholder="escribe el nombre del artículo">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="date"> Fecha: </label>
                </td>

                <td>
                    <input type="text" name="date" placeholder="escribe la fecha">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="origin-country"> País de origen: </label>
                </td>

                <td>
                    <input type="text" name="origin-country" placeholder="escribe la fecha de origen">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="price"> Precio: </label>
                </td>

                <td>
                    <input type="text" name="price" placeholder="escribe el precio">
                </td>
            </tr>

            <tr>
                <td colspan="2"> <input type="submit" name="send" values="Ok"> </td>
            </tr>
        </table>

        
    </form>


</body>

</html>