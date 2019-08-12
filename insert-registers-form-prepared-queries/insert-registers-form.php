<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=width-device, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../styles/insert-registers-form.css">
    <link rel="icon" type="image/jpg" href="">
    <title>Formulario: dar de alta artículos</title>
</head> 

<body>

    <h1> ALTA DE ARTÍCULOS </h1>

    <form name="insert-registers-form" action="insert-registers.php" method="GET">

        <table align="center">
            <tr>
                <td><label for="id"> ID: </label></td>
                <td><input type="text" name="id" placeholder="escribe el id..."></td>
            </tr>
            
            <tr>
                <td><label for="section"> Sección: </label></td>
                <td><input type="text" name="section" placeholder="escribe la sección..."></td>

            </tr>

            <tr>
                <td><label for="article-name"> Nombre artículo: </label></td>
                <td><input type="text" name="article-name" placeholder="escribe nombre del artículo..."></td>
            </tr>

            <tr>
                <td><label for="date"> Fecha: </label></td>
                <td><input type="text" name="date" placeholder="escribe la fecha..."></td>
            </tr>

            <tr>
                <td><label for="origin-country"> País de origen: </label></td>
                <td><input type="text" name="origin-country" placeholder="escribe el país de origen..."></td>
            </tr>

            <tr>
                <td><label for="price"> Precio: </label></td>
                <td><input type="text" name="price" placeholder="escribe el precio..."></td>
            </tr>

            <tr>
                
                <td colspan="2" align="center"><input type="submit" name="send" value="listo"></td>
            </tr>

        </table>


    </form>



</body>

</html>