<?php

    if(isset($_POST["send"])) {
        $age = $_POST["age"];
        calculateAge($age);
    }

    /*function calculateAge($age) {
        if($age < 18) {
            echo "Eres menor de edad.";
        } else if($age >= 18 && $age <45) {
            echo "Eres joven";
        } else if($age >= 45 && $age < 85) {
            echo "Eres una persona madura";
        } else {
            echo "Cuídate";
        }
        
    }*/

    function calculateAge($age) {
        switch (true) {
            case $age<18:
                echo "Eres menor de edad.";
                break;

            case $age >= 18 && $age < 45:
                echo "Eres joven.";
                break;

            case $age >= 45 && $age < 85:
                echo "Eres una persona madura.";
                break;
            
            default:
                echo "Cuídate.";
                break;
        }
    }

?>