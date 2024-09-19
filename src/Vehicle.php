<?php
declare(strict_types=1);
namespace Practices\Oop;
abstract class Vehicle 
{
    protected $brand;
    protected $model;

    public function __construct(string $brand, string $model) 
    {
        $this->brand = $brand;
        $this->model = $model;
    }

    abstract public function move();
}
