<?php

class Car {
    var $ruedas;
    var $color;
    var $motor;

    function Car (){                 //metodo constructor
        $this->ruedas = 4;
        $this->color = " "; 
        $this->motor = 1600;

    }
        function arrancar (){ 
            echo "estoy arrancando \n";
        }

        function girar (){ 
            echo "estoy girando \n";
        }
        function frenar () {
            echo "estoy frenando \n";

        }
}

$neon =new Car ();
$mazda =new Car ();
$corvette =new Car ();