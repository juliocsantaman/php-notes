<style>
        .available {
            color: #69F0AE;
        }

        .unavailable {
            color: #D50000;

        }

</style>

<?php

    if(isset($_POST["send"])) {
        $user = $_POST["name"];
        $age = $_POST["age"];

        if($user == "Juuzoujs" && $age >= 18) {
            echo "<p class='available'> Puedes entrar </p>";
        } else {
            echo "<p class='unavailable'>No puedes entrar. Usuario incorrecto o eres menor de edad jaja.</p>";
        }
    }
?>