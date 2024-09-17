<?php
ini_set('declare(strict_types', '1');

class ElectricCar extends Car implements ElectricVehicle 
{
    public function charging(): void 
    {
        echo "The electric car $this->brand $this->model is chargin.\n";
    }

    public function move(): void
    {
        echo "The electric car $this->brand $this->model is moving quietly.\n";
    }
}
