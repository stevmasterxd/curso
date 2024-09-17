<?php
ini_set('declare(strict_types', '1');

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
