<?php
ini_set('declare(strict_types', '1');

class Boat extends Vehicle 
{
    public function move(): void
    {
        echo "The boat $this->brand $this->model moving on waters.\n";
    }
}
