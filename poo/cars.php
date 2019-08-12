<?php
        class Car {
            //Atributos/propiedades.
            protected $tires;
            var $color;
            protected $engine;

            //Método constructor.

            function __Construct() {
                $this -> tires = 4;
                $this -> color = "";
                $this -> engine = 1600;
            }

            /*function __Construct($tires, $color, $engine) {
                $this->tires = $tires;
                $this->color = $color;
                $this->engine = $engine;
            }*/

            /*function Car($tires, $color, $engine) {
                $this -> $tires = $tires;
                $this -> $color = $color;
                $this -> $engine = $engine;
            }*/

            function turnOn() {

                echo "Estoy arrancando...";
            }

            function brake() {
                echo "Estoy frenando...";
            }

            function turn() {
                echo "Estoy girando...";
            }

            function setColor($color_car, $name_car) {
                $this->color = $color_car;
                echo "Nombre: $name_car <br>";
            }

            function getTires() {
                
                return $this->tires;
            }

            function getEngine() {
                return $this->engine;
            }

            function showFullInformation() {
                echo "Llantas: $this->tires </br>";
                echo "Color: $this->color </br>";
                echo "Motor: $this->engine </br> </br>";

            }


            
        }
        /*----------------------------------------------------------------------------------------------------*/
        //Truck
        class Bus extends Car{
            //Método constructor.
            function __Construct() {
                $this -> tires = 8;
                $this -> color = "";
                $this -> engine = 2600;
            }

            function setColor($color_bus, $name_bus) {
                $this->color = $color_bus;
                echo "Nombre: $name_bus <br>";
            }

            function turnOn() {

                parent::turnOn();
                echo "Camión arrancado.";
            }



            

            
            
        }

    ?>