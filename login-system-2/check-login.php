<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <link rel="stylesheet" href="">
    <link rel="icon" type="image/jpg" href="">
    <title> Check Login </title>

</head>
<body>

    <?php

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
                
                header("location: registered-users.php");
                
            } else {
                header("location: sign-in.php");

            }


        } catch(Exception $e) {
            die("Error " . $e->getMessage());
        }

    ?>


</body>
</html>
