<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./styles/sign-in.css?n=1">
    <link rel="icon" type="image/jpg" href="">
    <title> Sign in </title>

</head>
<body>

<?php

$authenticated = false;

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
        $authenticated = true;

        if(isset($_POST["remember"])) {
            setcookie("username_cookie", $_POST["username"], time()+(86400));

        }
        
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
        if($authenticated == false) {
            if(!isset($_COOKIE["username_cookie"])) {
                include("sign-in-form.html");
            }
        }

        if(isset($_COOKIE["username_cookie"])) {
            echo "Hello " . $_COOKIE["username_cookie"] . "!!!";
        } else if($authenticated == true) {
            echo "Hello " . $_POST["username"] . "!!!";
        }
    ?>

    
       <table class="img-table">
            <tr>
                <td>
                    <img src="./img/img-dark-1.jpg" class="img-1" title="Imagén dark 1" alt="Imagén dark 1">
                </td>

                <td>
                    <img src="./img/img-dark-2.jpg" class="img-1" title="Imagén dark 2" alt="Imagén dark 2">
                </td>
            </tr>
            
            <tr>
                <td>
                    
                    <img src="./img/img-dark-3.jpg" class="img-1" title="Imagén dark 3" alt="Imagén dark 3">
                </td>
                <td>
                    <img src="./img/img-dark-4.jpg" class="img-1" title="Imagén dark 4" alt="Imagén dark 4">
                </td>
            </tr>
           
       </table>

       <?php
            if($authenticated == true || isset($_COOKIE["username_cookie"])) {
                include("extra-information.html");
            }
       ?>
</body>
</html>