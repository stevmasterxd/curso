<?php
declare(strict_types=1);
namespace Practices\Oop;

class ElectricCar extends Car implements ElectricVehicle 
{
    private float $batteryLevel;

    public function __construct(string $brand, string $model, float $batteryLevel)
    {
        parent::__construct($brand, $model);
        $this->batteryLevel = $batteryLevel;
    }

    public function charging(): void 
    {
        if ($this->batteryLevel >= 100) {
            echo "The electric car $this->brand $this->model is charging.\n";
        } else {
            echo "The electric car $this->brand $this->model does not need charging.\n";
        }
    }

    public function move(): void
    {
        if ($this->batteryLevel >0) 
        {
            echo "The electric car $this->brand $this->model is moving quietly.\n";
            $this->batteryLevel -= 10;
        } 
        else 
        {
            echo "The electric car $this->brand $this->model has no charge left.\n";
        }
    }

    public function hasCharge(): bool
    {
        return $this->batteryLevel > 0;
    }
}
