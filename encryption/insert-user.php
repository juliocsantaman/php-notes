<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" contnet="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="">
    <link rel="icon" href="">
    <title> Insert user </title>

</head>

<body>

    <?php

        try {
            $base = new PDO("mysql:host=localhost; port=3308; dbname=php_course", "root", "");
            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $query = "INSERT INTO USER_PASS (USERNAME, PASSWORD) VALUES (:username, :password)";
            $result=$base->prepare($query);

            $username = htmlentities(addslashes($_POST["username"]));
            $password = htmlentities(addslashes($_POST["password"]));

            $password_encryption = password_hash($password, PASSWORD_DEFAULT, array("cost" => 12));

            $result->bindValue(":username", $username);
            $result->bindValue(":password", $password_encryption);

            $result->execute();

            $registered_user = $result->rowCount();
            
            if (!$registered_user) {
                echo "No se logró realizar el registro correctamente. Intentelo de nuevo.";
            } else {
                //header("location: sign-in.php");
                echo "Se ha insertado el registro correctamente";
            }

            
        } catch (Exception $e) {

            die("ERROR: " .  $e->getMessage());
        }
    ?>

</body>

</html>