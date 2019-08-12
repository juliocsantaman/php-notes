


<?php

    function calculate($operation, $num1, $num2) {
        //Primera manera de comparar.
        if(!strcmp("Suma", $operation)) {
            //Podemos declarar las variables como GLOBALES o pasarlo como parámetros.
            //global $num1;
            //global $num2;

            $res = $num1 + $num2;
            echo "El resultado es: $res";
        }
        //Segunda manera de comparar.
        if($operation == "Resta") {
            $res = $num1 - $num2;
            echo "El resultado es: $res";
        }
    
        if($operation == "Multiplicación") {
            $res = $num1 * $num2;
            echo "El resultado es: $res";
        }
    
        if($operation == "División") {
    
            if($num2 != 0) {
                $res = $num1 / $num2;
                echo "El resultado es: $res";
    
            } else {
                echo "<p class='error'>ERROR: NO SE PUEDE HACER UNA DIVISIÓN ENTRE CERO.</p>";
            }
        }
    
        if($operation == "Módulo") {
            $res = $num1 % $num2;
            echo "El resultado es: $res";
        }

        if($operation == "Incremento") {
            $num1++;
            $res = $num1;
            echo "El resultado es: $res";
        }

        if($operation == "Decremento") {
            $num1--;
            $res = $num1;
            echo "El resultado es: $res";
        }
    }

    

?>