<?php
declare(strict_types=1);
namespace Practices\Oop;

class BronzeArmor implements Armor
{
    public function absorbDamage($damage): int
    {
        return $damage / 2;
    }
}
