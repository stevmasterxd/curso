<?php
ini_set('declare(strict_types', '1');

abstract class Unit
{  
    protected bool $alive =true;
    protected string $name;

public function __construct(string $name)
{
    $this->name = $name;
} 

public function move($direction): void
{
    echo "{$this->name} camina hacia $direction";
}

abstract public function attack($opponente);
}

class Soldier extends Unit
{
    public function attack($opponente): void
    {
        echo "{$this->name}corta a $opponente en dos";
    }
}
class Archer extends Unit
{
    public function attack($opponent): void
    {
        echo "$this->name} dispara una flecha a $opponent";
    }
}

$silence = new Soldier('Steven');
$silence->attack('Juan');