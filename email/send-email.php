<?php

if(trim($_POST["email"]) == "" || trim($_POST["subject"]) == "" || trim($_POST["comments"]) == "") {
    echo "No joven, no se puede dejar los campos obligatorios en blanco.";
    die();
}

    $comments = $_POST["comments"];
    $subject = $_POST["subject"];
    $email = $_POST["email"];
    

    $headers = "MIME-Version: 1.0\r\n";
    $headers.= "Content-type: text/html; charset=utf-8\r\n";
    $headers.= "From: Prueba Julio Cesar <ejemplo@ejemplo.com>\r\n";

    $success = mail($email, $subject, $comments, $headers);
    

    if($success) {
        echo "El mensaje se ha enviado con éxito. :)";
    } else {
        echo "ERROR: No se ha podido enviar el mensaje correctamente. :(";
    }


?>