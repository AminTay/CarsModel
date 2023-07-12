<?php

namespace app\Car\Peugeot;

use app\Car\BaseCar;

class A206 extends BaseCar
{

    public const  BASE_FUEL_CONSUMPTION = 15;

    public function __construct(int $posX, int $posY)
    {
        parent::__construct($posX, $posY, self::BASE_FUEL_CONSUMPTION);
    }
}