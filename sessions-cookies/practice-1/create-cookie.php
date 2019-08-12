<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=""> 
    <link re;="icon" type="image/jpg" href="">
    <title> Crear cookie </title>
</head>
<body>

    <?php
        setcookie("selected_language", $_GET["language"], time()+(60*60*24*30));
        header("location: watch-cookie.php");
    ?>



</body>
</html>