<?php
declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use Practices\Oop\Car;
use Practices\Oop\Boat;
use Practices\Oop\ElectricCar;

$car = new Car("Toyota", "Corolla");

$car->move();

$boat = new Boat("Yamaha", "WaveRunner");

$boat->move();

$ElectricCar = new ElectricCar("Tesla", "Model S");

$ElectricCar->move();

$ElectricCar->charging();






