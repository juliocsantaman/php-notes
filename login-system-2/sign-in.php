<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./styles/sign-in.css">
    <link rel="icon" type="image/jpg" href="">
    <title> Sign in </title>

</head>
<body>

<?php

if(isset($_POST["send"])) {

try {
    $base = new PDO("mysql:host=localhost; port=3308; dbname=php_course", "root", "");
    $base -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = "SELECT * FROM USER_PASS WHERE USERNAME = :username AND PASSWORD = :password";
    $result = $base->prepare($query);

    $username = htmlentities(addslashes($_POST["username"]));
    $password = htmlentities(addslashes($_POST["password"]));

    $result->bindValue(":username", $username);
    $result->bindValue(":password", $password);

    $result->execute();

    $register_number = $result->rowCount(); //1 o 0;

    if ($register_number != 0) {
        //echo "<h2>Adelante</h2>";
        session_start();
        $_SESSION["username"] = $_POST["username"];
        
        //header("location: registered-users.php");
        
    } else {
        //header("location: sign-in.php");
        echo "ERROR: USUARIO O CONTRASEÑA INCORRECTAS.";

    }


} catch(Exception $e) {
    die("Error " . $e->getMessage());
}

}

?>

    <?php
        if(!isset($_SESSION["username"])) {

            include("sign-in-form.html");
        } else {
            echo "Usuario: " . $_SESSION["username"];
        }
    ?>

    <div class="img-container">
        <img src="./img/img-dark-1.jpg" class="img-1" title="Imagén dark 1" alt="Imagén dark 1">
        <img src="./img/img-dark-2.jpg" class="img-1" title="Imagén dark 2" alt="Imagén dark 2">
        <img src="./img/img-dark-3.jpg" class="img-1" title="Imagén dark 3" alt="Imagén dark 3">
        <img src="./img/img-dark-4.jpg" class="img-1" title="Imagén dark 4" alt="Imagén dark 4">
    </div>
</body>
</html>