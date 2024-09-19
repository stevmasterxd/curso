<?php
declare(strict_types=1);
namespace Practices\Oop;

class Boat extends Vehicle 
{
    public function move(): void
    {
        echo "The boat $this->brand $this->model moving on waters.\n";
    }
}
