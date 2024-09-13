<?php
ini_set('declare(strict_types', '1');
class car {
    private $wheels; 
    private $color;
    private $engine;

    function __construct($wheels , $color , $engine)
    {  
        $this->wheels = $wheels;
        $this->color = $color;
        $this->engine = $engine;
    }
        public function arrancar(): void
        { 
            echo "estoy arrancando \n";
        }
        function girar(): void
        { 
            echo "estoy girando \n";
        }
        function frenar(): void
        {
            echo "estoy frenando \n";
        }
}
$neon =new car(4 , "rojo" ,1600);
$mazda =new car(4 , "amarrillo" , 2000);
$corvette =new car(4 , "verde" , 1500);