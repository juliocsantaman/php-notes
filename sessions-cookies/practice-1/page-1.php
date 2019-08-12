<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./styles/page-1.css">
    <link rel="icon" type="image/jpg" href="">
    <title> Página 1 </title>

</head>
<body>

<?php

    if(isset($_COOKIE["selected_language"])) {

        if($_COOKIE["selected_language"] == "es") {
            header("location: spanish.php");
        } else if($_COOKIE["selected_language"] == "en") {
            header("location: english.php");
        }
    }

?>
    <header>
        <h1>ELIGE IDIOMA</h1>
    </header>
    <table>
        <tr>
            <td><a href="create-cookie.php?language=es"><img src="./img/españa.jpg"></a></td>
            <td><a href="create-cookie.php?language=en"><img src="./img/inglaterra.jpg"></a></td>
        </tr>
    </table>

</body>
</html>