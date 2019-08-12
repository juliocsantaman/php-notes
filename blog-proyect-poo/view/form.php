<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../styles/form.css?n="<?php echo rand(); ?>>
    <link rel="icon" type="image/jpg" href="">
    <title>Formulario del blog</title>
</head>
<body>

    <h1>Nueva Entrada</h1>

    <form action="../controller/transactions.php" method="POST" enctype="multipart/form-data">
        
        <table>

            <tr>
                <td> <label for="title">Título: </label> </td>
                <td> <input type="text" name="title" placeholder="Aquí va el título."> </td>
            </tr>

            <tr>
                <td> <label for="comment"> Comentarios: </label> </td>
                <td><textarea name="comment" rows="10" cols="50" placeholder="Aquí van tus comentarios."></textarea> </td>
            </tr>

            <input type="hidden" name="MAX_TAM" value="2097152">

            <tr>
                <td colspan="2" class="right"> <label> Seleccione una imagen con tamaño inferior a 2 MB </label> </td>

            </tr>

            <tr>
                <td colspan="2" class="right"> <input type="file" name="image"> </td>
            </tr>

            <tr>
                <td colspan="2" class="right"> <input type="submit" name="send" value="Enviar"> </td>
            </tr>

            <tr>
                <td colspan="2" class="right"> <a href="show-blog.php"> Página de visualización del blog </a> </td>
            </tr>

        </table>

    </form>










</body>
</html>