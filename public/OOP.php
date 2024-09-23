<?php
declare(strict_types=1);

require "src/Helpers.php";
require __DIR__ . '/../vendor/autoload.php';

use Practices\Oop\BronzeArmor;
use Practices\Oop\Soldier;
use Practices\Oop\Archer;
use Practices\Oop\CursedArmor;

$armor = new BronzeArmor();

$ramm = new Soldier('Ramm');

$silence = new Archer('Silence');

$silence->attack($ramm);

$ramm->setArmor(new CursedArmor);

$silence->attack($ramm);

$ramm->attack($silence);
