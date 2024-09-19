<?php
declare(strict_types=1);
namespace Practices\Oop;

class Car extends Vehicle
{
    public function move(): void
    {
        echo "The $this->brand $this->model moving on wheeals.\n";
    }
}
