<?php
ini_set('declare(strict_types', '1');

abstract class Unit
{  
    protected bool $aline =true;
    protected string $name;

public function __construct($name)
{
    $this->name = $name;
} 

public function move($direction)
{
    echo "{$this->name} camina hacia $direction";
}

abstract public function attack($opponente);
}

class Soldier extends Unit
{
    public function attack($opponente)
    {
        echo "{$this->name}corta a $opponente en dos";
    }
}
class Archer extends Unit
{
    public function attack($opponent)
    {
        echo "$this->name} dispara una flecha a $opponent";
    }
}

$silence = new Soldier('Steven');
$silence->attack('Juan');