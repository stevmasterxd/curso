<?php
declare(strict_types=1);
namespace Practices\Oop;

class CursedArmor implements Armor
{
    public function absorbDamage($damage): int
    {
        return $damage * 2;
    }
}
