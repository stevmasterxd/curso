<?php
ini_set('declare(strict_types', '1');

spl_autoload_register (function($className)
{
    require "src/$className.php";
});

$car = new Car("Toyota", "Corolla");

$car->move();

$boat = new Boat("Yamaha", "WaveRunner");

$boat->move();

$ElectricCar = new ElectricCar("Tesla", "Model S");

$ElectricCar->move();

$ElectricCar->charging();








