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

            $count=0;

            $base = new PDO("mysql:host=localhost; port=3308; dbname=php_course", "root", "");
            $base -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $query = "SELECT * FROM USER_PASS WHERE USERNAME = :username";
            $result = $base->prepare($query);

            $username = htmlentities(addslashes($_POST["username"]));
            $password = htmlentities(addslashes($_POST["password"]));

            $result->bindValue(":username", $username);
            //$result->bindValue(":passowrd", $password);
            
            //$result->execute(array(":username" => $username));
            $result->execute();
            

            while($row=$result->fetch(PDO::FETCH_ASSOC)) {
                //echo "Usuario: " . $row["USERNAME"] . " Contraseña: " . $row["PASSWORD"];
                
                if(password_verify($password, $row["PASSWORD"])) {
                    
                    $count++;
                }

            }

            if($count>0) {
                echo $count . "<br>";
                echo "Usuario activo.";
            } else {
                echo "Usuario no activo.";
            }
                
        } catch(Exception $e) {
            die("Error " . $e->getMessage());
        }

    ?>


</body>
</html>
