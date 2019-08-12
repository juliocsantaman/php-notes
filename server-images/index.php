<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="">
    <link rel="icon" type="image/jpg" href="">
    <title>Imágenes del servidor</title>

    <style>
        table {
            margin: auto;
            width: 450px;
            border: 2px dotted #000;
        }
    </style>

</head>
<body>

    <form action="image-data.php" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td><label for="image"></label></td>
                <td><input type="file" name="image" size="20"></td>
            </tr>

            <tr>
                <td colspan="2" style="text-align: center"><input type="submit" name="send" value="Enviar imágen"></td>
            </tr>
        </table>

    </form>




</body>
</html>