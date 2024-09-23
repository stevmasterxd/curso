<?php
declare(strict_types=1);
namespace Practices\Oop;

abstract class Unit 
{
    protected $hp = 40;
    protected $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getHp(): int
    {
        return $this->hp;
    }

    public function move(string $direction): void
    {
        show("{$this->name} camina hacia $direction");
    }

    abstract public function attack(Unit $opponent);

    public function takeDamage($damage)
    {
        $this->hp = $this->hp - $this->absorbDamage($damage);

        show("{$this->name} ahora tiene {$this->hp} puntos de vida");

        if ($this->hp <= 0) {
            $this->die();
        }
    }

    public function  die()
    {
        show("{$this->name} muere");

        exit();
    }

    protected function absorbDamage($damage)
    {
        return $damage;
    }
}
